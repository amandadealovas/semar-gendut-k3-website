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
  <link rel="icon" type="image/png" href="<?php echo $base_path ?? ''; ?>assets/images/1.png">
  
  <script src="https://unpkg.com/lucide@latest"></script>
</head>

<body>

  <div class="topbar">
    <div class="container topbar-inner">
      <div class="topbar-right" style="gap:20px;display:flex;align-items:center;">
        <a href="mailto:info@semargendut.co.id" style="display:flex; align-items:center; gap:6px;">
          <i data-lucide="mail" style="width:14px; height:14px;"></i>
          info@semargendut.co.id
        </a>
        <a href="https://maps.google.com" target="_blank" style="display:flex; align-items:center; gap:6px;">
          <i data-lucide="map-pin" style="width:14px; height:14px;"></i>
          Jl. Suhat No. 88, Malang, Jawa Timur
        </a>
      </div>
      <div class="topbar-right">
        <a href="tel:+62341123456" class="contact-phone" style="display:flex; align-items:center; gap:6px;">
          <i data-lucide="phone" style="width:14px; height:14px;"></i>
          (0341) 123-456
        </a>
      </div>
    </div>
  </div>

  <nav class="navbar">
    <div class="container nav-inner">
      <a href="<?php echo $base_path ?? ''; ?>index.php" class="logo">
        <img style="width: 150px; height: 50px;" src="<?php echo $base_path ?? ''; ?>assets/images/1.png" alt="Semar Gendut Logo">
      </a>

      <ul class="nav-menu" id="navMenu">
        <li><a href="<?php echo $base_path ?? ''; ?>index.php" class="<?php echo ($current_page == 'index.php') ? 'active' : ''; ?>">Beranda</a></li>
        <li><a href="<?php echo $base_path ?? ''; ?>pages/layanan.php" class="<?php echo ($current_page == 'layanan.php') ? 'active' : ''; ?>">Layanan</a></li>
        <li><a href="<?php echo $base_path ?? ''; ?>pages/k3.php" class="<?php echo ($current_page == 'k3.php') ? 'active' : ''; ?>">K3</a></li>
        <li><a href="<?php echo $base_path ?? ''; ?>pages/tentang.php" class="<?php echo ($current_page == 'tentang.php') ? 'active' : ''; ?>">Tentang</a></li>
        <li><a href="<?php echo $base_path ?? ''; ?>pages/kontak.php" class="nav-cta <?php echo ($current_page == 'kontak.php') ? 'active' : ''; ?>">Hubungi Kami</a></li>
      </ul>

      <button class="hamburger" id="hamburger" aria-label="Toggle Menu">
        <span></span>
        <span></span>
        <span></span>
      </button>
    </div>
  </nav>

  <script>
    lucide.createIcons();
  </script>