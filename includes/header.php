<?php
// includes/header.php
$current_page = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="PT. Semar Gendut Indonesia - Perusahaan transportasi bus premium berkomitmen pada keselamatan dan kesehatan kerja (K3) terbaik di Indonesia.">
  <title><?php echo isset($page_title) ? $page_title . ' | ' : ''; ?>PT. Semar Gendut Indonesia</title>
  <link rel="stylesheet" href="<?php echo $base_path ?? ''; ?>assets/css/style.css">
  <link rel="icon" type="image/svg+xml" href="<?php echo $base_path ?? ''; ?>assets/images/favicon.svg">
</head>
<body>

<!-- TOP BAR -->
<div class="topbar">
  <div class="container topbar-inner">
    <div class="topbar-right" style="gap:20px;display:flex;align-items:center;">
      <a href="mailto:info@semargendut.co.id">
        <svg width="14" height="14" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
        info@semargendut.co.id
      </a>
      <a href="https://maps.google.com" target="_blank">
        <svg width="14" height="14" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
        Jl. Veteran No. 88, Malang, Jawa Timur
      </a>
    </div>
    <div class="topbar-right">
      <a href="tel:+62341123456" class="contact-phone">
        <svg width="14" height="14" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12 19.79 19.79 0 0 1 1.61 3.18 2 2 0 0 1 3.6 1h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 8.56a16 16 0 0 0 6 6l.96-.96a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
        (0341) 123-456
      </a>
    </div>
  </div>
</div>

<!-- NAVBAR -->
<nav class="navbar">
  <div class="container nav-inner">
    <!-- Logo -->
    <a href="<?php echo $base_path ?? ''; ?>index.php" class="logo">
      <div class="logo-icon">
        <svg width="26" height="26" fill="none" viewBox="0 0 40 28">
          <rect x="0" y="8" width="32" height="14" rx="3" fill="#00b4d8"/>
          <rect x="32" y="10" width="8" height="10" rx="2" fill="#48cae4"/>
          <circle cx="8" cy="24" r="4" fill="#fff"/>
          <circle cx="26" cy="24" r="4" fill="#fff"/>
          <rect x="4" y="4" width="16" height="8" rx="2" fill="#0077a8"/>
        </svg>
      </div>
      <div>
        <div class="logo-text">S<span>G</span>I</div>
        <span class="logo-sub">Semar Gendut Indonesia</span>
      </div>
    </a>

    <!-- Nav Menu -->
    <ul class="nav-menu" id="navMenu">
      <li><a href="<?php echo $base_path ?? ''; ?>index.php">Beranda</a></li>
      <li><a href="<?php echo $base_path ?? ''; ?>pages/layanan.php">Layanan</a></li>
      <li><a href="<?php echo $base_path ?? ''; ?>pages/k3.php">K3</a></li>
      <li><a href="<?php echo $base_path ?? ''; ?>pages/tentang.php">Tentang</a></li>
      <li><a href="<?php echo $base_path ?? ''; ?>pages/kontak.php">Kontak</a></li>
      <li><a href="<?php echo $base_path ?? ''; ?>pages/kontak.php" class="nav-cta">Hubungi Kami</a></li>
    </ul>

    <!-- Hamburger -->
    <button class="hamburger" id="hamburger" aria-label="Toggle Menu">
      <span></span>
      <span></span>
      <span></span>
    </button>
  </div>
</nav>
