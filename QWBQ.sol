// SPDX-License-Identifier: MIT
pragma solidity ^0.8.20;

/*
  Clean ERC20 token for BNB Chain
  - Fixed supply minted at deploy
  - decimals = 18
  - Owner can ONLY change name and symbol
  - No mint, no burn, no blacklist, no pause, no special powers
*/

abstract contract Context {
    function _msgSender() internal view virtual returns (address) { return msg.sender; }
    function _msgData() internal view virtual returns (bytes calldata) { return msg.data; }
}

interface IERC20 {
    event Transfer(address indexed from, address indexed to, uint256 value);
    event Approval(address indexed owner, address indexed spender, uint256 value);
    function totalSupply() external view returns (uint256);
    function balanceOf(address account) external view returns (uint256);
    function transfer(address to, uint256 value) external returns (bool);
    function allowance(address owner, address spender) external view returns (uint256);
    function approve(address spender, uint256 value) external returns (bool);
    function transferFrom(address from, address to, uint256 value) external returns (bool);
}

interface IERC20Metadata is IERC20 {
    function name() external view returns (string memory);
    function symbol() external view returns (string memory);
    function decimals() external view returns (uint8);
}

/* Minimal Ownable */
contract Ownable is Context {
    address private _owner;
    event OwnershipTransferred(address indexed previousOwner, address indexed newOwner);
    constructor(address initialOwner) {
        require(initialOwner != address(0), "Ownable: zero owner");
        _owner = initialOwner;
        emit OwnershipTransferred(address(0), initialOwner);
    }
    function owner() public view returns (address) { return _owner; }
    modifier onlyOwner() {
        require(owner() == _msgSender(), "Ownable: caller is not owner");
        _;
    }
    function transferOwnership(address newOwner) public onlyOwner {
        require(newOwner != address(0), "Ownable: zero new owner");
        emit OwnershipTransferred(_owner, newOwner);
        _owner = newOwner;
    }
}

/* Simple, standard ERC20 implementation (transparent & verifiable) */
contract ERC20 is Context, IERC20, IERC20Metadata {
    mapping(address => uint256) internal _balances;
    mapping(address => mapping(address => uint256)) internal _allowances;
    uint256 internal _totalSupply;

    function totalSupply() public view virtual override returns (uint256) { return _totalSupply; }
    function balanceOf(address account) public view virtual override returns (uint256) { return _balances[account]; }
    function transfer(address to, uint256 value) public virtual override returns (bool) {
        _transfer(_msgSender(), to, value);
        return true;
    }
    function allowance(address owner_, address spender) public view virtual override returns (uint256) {
        return _allowances[owner_][spender];
    }
    function approve(address spender, uint256 value) public virtual override returns (bool) {
        _approve(_msgSender(), spender, value);
        return true;
    }
    function transferFrom(address from, address to, uint256 value) public virtual override returns (bool) {
        address spender = _msgSender();
        uint256 currentAllowance = _allowances[from][spender];
        require(currentAllowance >= value, "ERC20: allowance");
        unchecked { _approve(from, spender, currentAllowance - value); }
        _transfer(from, to, value);
        return true;
    }

    function _transfer(address from, address to, uint256 value) internal virtual {
        require(from != address(0), "ERC20: from zero");
        require(to != address(0), "ERC20: to zero");
        uint256 fromBalance = _balances[from];
        require(fromBalance >= value, "ERC20: balance");
        unchecked { _balances[from] = fromBalance - value; _balances[to] += value; }
        emit Transfer(from, to, value);
    }

    function _mint(address account, uint256 amount) internal virtual {
        require(account != address(0), "ERC20: mint to zero");
        _totalSupply += amount;
        _balances[account] += amount;
        emit Transfer(address(0), account, amount);
    }

    function _approve(address owner_, address spender, uint256 value) internal virtual {
        require(owner_ != address(0), "ERC20: approve from zero");
        require(spender != address(0), "ERC20: approve to zero");
        _allowances[owner_][spender] = value;
        emit Approval(owner_, spender, value);
    }

    // The token contract will override name/symbol/decimals
    function name() public view virtual override returns (string memory) { return ""; }
    function symbol() public view virtual override returns (string memory) { return ""; }
    function decimals() public view virtual override returns (uint8) { return 18; }
}

/* === Final token === */
contract CleanBNBToken is ERC20, Ownable {
    string private _tokenName;
    string private _tokenSymbol;
    uint8 private constant _decimals = 18;

    event NameChanged(string indexed oldName, string indexed newName);
    event SymbolChanged(string indexed oldSymbol, string indexed newSymbol);

    constructor(string memory initialName, string memory initialSymbol, uint256 initialSupplyWhole) 
        Ownable(msg.sender)
    {
        _tokenName = initialName;
        _tokenSymbol = initialSymbol;
        // initialSupplyWhole is number like 9000000000 (9 billion)
        uint256 supply = initialSupplyWhole * (10 ** uint256(_decimals));
        _mint(msg.sender, supply);
    }

    // Override metadata
    function name() public view virtual override returns (string memory) { return _tokenName; }
    function symbol() public view virtual override returns (string memory) { return _tokenSymbol; }
    function decimals() public view virtual override returns (uint8) { return _decimals; }

    // ONLY owner can change name/symbol — kept minimal and transparent
    function setName(string calldata newName) external onlyOwner {
        string memory old = _tokenName;
        _tokenName = newName;
        emit NameChanged(old, newName);
    }
    function setSymbol(string calldata newSymbol) external onlyOwner {
        string memory old = _tokenSymbol;
        _tokenSymbol = newSymbol;
        emit SymbolChanged(old, newSymbol);
    }

    // No mint, no burn functions exposed
}