<?php
// header.php - آپدیت‌شده: Token Details & Bio نام + SSL خلاصه 2 خط + دکمه More + هر دو guide/site-guide-sections (37 لینک) + PDF جزئیات - ۱۰۰٪ crawlable
$page_title = isset($page_title) ? $page_title : 'Quazenthor (QWBQ)';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $page_title; ?> – Quazenthor (QWBQ)</title>
  <meta name="description" content="Quazenthor (QWBQ) – Educational non-financial BEP-20 reference token on BNB Smart Chain. Strictly educational – no investment, no sale. Network links, verifications, and downloads included. Total Supply: 5.00T QWBQ. Owner: toora dokht.">

  <!-- استایل پایه – ساده، رسمی، بدون انیمیشن/JS + responsive برای SSL + دکمه More -->
  <style>
    body { font-family: Arial, sans-serif; margin:0; padding:0; line-height:1.6; color:#333; background:#fff; }
    .container { max-width:1200px; margin:0 auto; padding:0 20px; }
    header.site-header { background:#f8f9fa; padding:30px 0; text-align:center; border-bottom:2px solid #ddd; }
    .logo { font-size:2.8rem; color:#2c3e50; margin:0; }
    .logo a { color:#2c3e50; text-decoration:none; }
    .tagline { font-size:1.1rem; color:#555; margin:10px 0 0; }
    
    /* ناوبری crawlable – لیست ساده، بدون details/JS */
    .main-nav { background:#e3f2fd; padding:15px; margin:20px 0; text-align:center; font-size:0.95rem; }
    .main-nav a { color:#1976d2; text-decoration:none; margin:0 12px; white-space:nowrap; display:inline-block; }
    .main-nav a:hover { text-decoration:underline; }
    
    /* Network Links – آپدیت: SSL خلاصه 2 خط + دکمه More (responsive) */
    .network-links { background:#f0f8ff; padding:20px; margin:20px 0; border:1px solid #ddd; }
    .network-links h3 { color:#2c3e50; text-align:center; margin-bottom:15px; }
    .network-links ul { display:grid; grid-template-columns:repeat(auto-fit, minmax(250px,1fr)); gap:15px; list-style:none; padding:0; }
    .network-links li { background:#fff; padding:10px; border-radius:5px; border:1px solid #eee; word-wrap:break-word; overflow-wrap:break-word; }
    .network-links a { color:#1976d2; text-decoration:none; }
    .network-links a:hover { text-decoration:underline; }
    .ssl-more-btn { display:inline-block; margin-top:5px; padding:5px 12px; background:#1976d2; color:#fff; border-radius:4px; text-decoration:none; font-size:0.85rem; }
    .ssl-more-btn:hover { background:#1565c0; }
    
    /* Official Downloads – ۴ دکمه crawlable (Token Details & Bio نام آپدیت) */
    .downloads-section { text-align:center; margin:30px 0; padding:20px; background:#e8f5e8; border:1px solid #1e8449; }
    .download-btn { display:inline-block; margin:10px 15px; padding:12px 25px; background:#1e8449; color:#fff !important; border-radius:6px; text-decoration:none; font-weight:bold; }
    .download-btn:hover { background:#27ae60; }
    
    h1, h2, h3 { color:#2c3e50; }
    main { margin-bottom:60px; }
  </style>
</head>
<body>

<header class="site-header">
  <div class="container">
    <h1 class="logo"><a href="/index">Quazenthor (QWBQ)</a></h1>
    <p class="tagline">Transparency-Focused BEP-20 Token on BNB Smart Chain. Last updated: February 2026. Total Supply: 5.00T QWBQ. Owner: toora dokht.</p>
  </div>
</header>

<!-- Official Downloads – ۴ دکمه crawlable (Token Details & Bio آپدیت‌شده) -->
<section class="downloads-section">
  <h3>Official Documents – Direct Downloads</h3>
  <a href="/whitepaper.pdf" class="download-btn" download>Download Whitepaper</a>
  <a href="/token-info.pdf" class="download-btn" download>Download Token Details & Bio</a>
  <a href="/official-token-information.pdf" class="download-btn" download>Download Official Token Info</a>
  <a href="/clarification.pdf" class="download-btn" download>Download Clarification</a>
</section>

<!-- Network Links – کامل از link.txt + SSL خلاصه 2 خط + دکمه More (زیر on-chain refs) -->
<section class="network-links">
  <h3>Network Links & On-Chain References</h3>
  <ul>
    <!-- Core Info -->
    <li><strong>Official Website:</strong> <a href="https://quazenthor.com">https://quazenthor.com</a></li>
    <li><strong>Official Email:</strong> <a href="mailto:admin@quazenthor.com">admin@quazenthor.com</a></li>
    
    <!-- Socials -->
    <li><strong>X (Twitter):</strong> <a href="https://x.com/quazenthorQWBQ">https://x.com/quazenthorQWBQ</a> (Main) / <a href="https://x.com/sos_tbt">https://x.com/sos_tbt</a> (Owner)</li>
    <li><strong>Telegram:</strong> <a href="https://t.me/Quazenthor">https://t.me/Quazenthor</a></li>
    <li><strong>Medium:</strong> <a href="https://medium.com/@quazenthor">https://medium.com/@quazenthor</a></li>
    <li><strong>GitHub:</strong> <a href="https://github.com/toorandokhtafshari/QWBQ-Token-">https://github.com/toorandokhtafshari/QWBQ-Token-</a> (Main) / <a href="https://github.com/hokar1404/QWBQ-Token">https://github.com/hokar1404/QWBQ-Token</a></li>
    <li><strong>Bitcointalk:</strong> <a href="https://bitcointalk.org/index.php?topic=5573196">https://bitcointalk.org/index.php?topic=5573196</a></li>
    <li><strong>Facebook:</strong> <a href="https://www.facebook.com/quazenthor">https://www.facebook.com/quazenthor</a> (Main) / <a href="https://www.facebook.com/QWBQToken">https://www.facebook.com/QWBQToken</a></li>
   
    <!-- On-Chain References (ردیف آخر با خط افقی) -->
    <li><strong>Contract Address:</strong> <a href="https://bscscan.com/token/0x013f5f2F7F5b027012415A783ac2ed69EF936aE8">0x013f5f2F7F5b027012415A783ac2ed69EF936aE8</a> (Name: quazenthor, Symbol: QWBQ)</li>
    <li><strong>Contract Code:</strong> <a href="https://bscscan.com/token/0x013f5f2F7F5b027012415A783ac2ed69EF936aE8#code">View Verified Source Code</a> – Verified Date: 2026-01-31</li>
    <li><strong>Deployer / Owner Wallet:</strong> <a href="https://bscscan.com/address/0x0daeb75bf06b879164d0753fa9d695763fcd1f49">0x0daeb75bf06b879164d0753fa9d695763fcd1f49</a></li>
    <li><strong>Ownership Verification:</strong> <a href="https://bscscan.com/verifySig/15181">Signature #15181 (Verified)</a></li>
    <li><strong>Token Logo:</strong> <a href="/logo.svg" download>Download Logo (SVG)</a></li>
    
    <!-- SSL خلاصه 2 خط + دکمه More (زیر on-chain refs، responsive) -->
    <li style="border-top:2px solid #ddd; padding-top:15px; margin-top:10px;">
      <strong>SSL Certificate (Summary):</strong> Valid for quazenthor.com & www.quazenthor.com (Jan 31, 2026 – Jan 31, 2027; Expires: 364 days; IP: 78.47.123.194; Trusted: Yes – All major browsers; Issuer: Certum DV TLS G2 R39 CA; Serial: 668ab2e067bd7b8b129757692ec967e9).<br>
      Cached: Jan 31, 2026, 2:04 AM PST | <a href="https://www.sslshopper.com/ssl-checker.html?hostname=quazenthor.com" class="ssl-more-btn" target="_blank">More Details</a>
    </li>
  </ul>
</section>

<!-- ناوبری کامل – 37 لینک (اضافه guide + site-guide-sections)، بدون .php در لینک (htaccess هندل می‌کنه) -->
<nav class="main-nav">
  <strong>Quick Navigation (All 37 Pages):</strong><br>
  <a href="/index">Home</a> •
  <a href="/about">About</a> •
  <a href="/tokenomics">Tokenomics</a> •
  <a href="/holders">Holders</a> •
  <a href="/lifecycle">Lifecycle</a> •
  <a href="/source-code">Source Code</a> •
  <a href="/ownership-verification">Ownership Verification</a> •
  <a href="/verification">Verification</a> •
  <a href="/bscscan-clarification">BscScan Clarification</a> •
  <a href="/bscscan-official-token-information">Official Token Info</a> •
  <a href="/team">Team</a> •
  <a href="/owner">Owner</a> •
  <a href="/founder-declaration">Founder Declaration</a> •
  <a href="/identity">Identity</a> •
  <a href="/links">Network Links</a> •
  <a href="/whitepaper">Whitepaper</a> •
  <a href="/legal">Legal Notice</a> •
  <a href="/privacy">Privacy</a> •
  <a href="/terms">Terms</a> •
  <a href="/license">License</a> •
  <a href="/security">Security</a> •
  <a href="/audit">Audit</a> •
  <a href="/explorer-compliance">Explorer Compliance</a> •
  <a href="/website-domain-clarification">Domain Clarification</a> •
  <a href="/official-email-statement">Official Email</a> •
  <a href="/social-proof">Social Proof</a> •
  <a href="/news">News</a> •
  <a href="/blog">Blog</a> •
  <a href="/community">Community</a> •
  <a href="/social">Social & Links</a> •
  <a href="/contact">Contact</a> •
  <a href="/FAQ">FAQ</a> •
  <a href="/scope-declaration">Scope Declaration</a> •
  <a href="/guide">Guide</a> •
  <a href="/site-guide-sections">Site Guide Sections</a> •
  <a href="/changelog">Changelog</a> •
  <a href="/footer-info">Footer Info</a>
</nav>

<main class="container">