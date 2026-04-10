<?php
$page_title = 'Layanan';
$base_path = '../';
require_once '../includes/header.php';
?>

<section class="page-hero">
  <div class="container page-hero-inner">
    <div class="breadcrumb">
      <a href="../index.php">Beranda</a>
      <span>›</span>
      <span class="current">Layanan</span>
    </div>
    <h1>Layanan <span>Unggulan</span></h1>
    <p>Solusi transportasi bus premium yang fleksibel, aman, dan terpercaya untuk berbagai kebutuhan perjalanan dan distribusi Anda.</p>
  </div>
</section>

<section class="section">
  <div class="container">
    <h2 class="section-title center" style="display:block;text-align:center;">Layanan <span>Kami</span></h2>
    <p class="section-subtitle center" style="margin-top:12px;">Kami menyediakan berbagai layanan transportasi yang dapat disesuaikan dengan kebutuhan unik setiap pelanggan.</p>

    <div style="display:grid;grid-template-columns:1fr 1fr;gap:40px;margin-top:60px;align-items:center;" id="antar-kota">
      <div style="background:var(--navy);border-radius:16px;min-height:300px;display:flex;flex-direction:column;align-items:center;justify-content:center;color:var(--cyan);">
        <i data-lucide="map-pinned" style="width:80px; height:80px; margin-bottom:15px; opacity:0.8;"></i>
        <div style="font-family:'Barlow Condensed',sans-serif; font-size:1.5rem; letter-spacing:2px;">INTERCITY ROUTE</div>
      </div>
      <div>
        <span style="background:rgba(0,180,216,0.1);color:var(--cyan);font-size:0.75rem;font-weight:700;letter-spacing:0.08em;text-transform:uppercase;padding:5px 12px;border-radius:100px;border:1px solid rgba(0,180,216,0.3);">Transportasi</span>
        <h2 style="font-family:'Barlow Condensed',sans-serif;font-size:2.2rem;text-transform:uppercase;color:var(--navy);margin:14px 0 14px;">Transportasi Antar Kota</h2>
        <p style="color:var(--text-mid);line-height:1.7;margin-bottom:16px;">Layanan bus reguler dengan jadwal tetap ke 15+ kota tujuan. Dilayani oleh pengemudi profesional bersertifikat.</p>
        <ul style="list-style:none;display:flex;flex-direction:column;gap:10px;margin-bottom:24px;">
          <?php foreach(['Malang – Surabaya (Setiap 2 jam)','Malang – Jakarta (Pagi & Malam)','Malang – Yogyakarta','Malang – Bali'] as $r): ?>
          <li style="display:flex;align-items:center;gap:10px;font-size:0.875rem;color:var(--text-mid);">
            <i data-lucide="check-circle-2" style="width:16px; height:16px; color:var(--cyan);"></i>
            <?= $r ?>
          </li>
          <?php endforeach; ?>
        </ul>
        <a href="kontak.php" class="btn btn-primary">Pesan Tiket <i data-lucide="arrow-right" style="width:16px;vertical-align:middle;margin-left:5px;"></i></a>
      </div>
    </div>

    <hr style="border:none;border-top:1px solid rgba(10,22,40,0.08);margin:60px 0;">

    <div style="display:grid;grid-template-columns:1fr 1fr;gap:40px;margin-top:0;align-items:center;" id="pariwisata">
      <div>
        <span style="background:rgba(0,180,216,0.1);color:var(--cyan);font-size:0.75rem;font-weight:700;letter-spacing:0.08em;text-transform:uppercase;padding:5px 12px;border-radius:100px;border:1px solid rgba(0,180,216,0.3);">Pariwisata</span>
        <h2 style="font-family:'Barlow Condensed',sans-serif;font-size:2.2rem;text-transform:uppercase;color:var(--navy);margin:14px 0 14px;">Charter Bus Wisata</h2>
        <p style="color:var(--text-mid);line-height:1.7;margin-bottom:16px;">Sewa bus fullday dan multiday untuk berbagai kebutuhan event khusus dengan layanan penuh dari tim SGI.</p>
        <div style="display:grid;grid-template-columns:1fr 1fr;gap:12px;margin-bottom:24px;">
          <?php 
          $w_icons = ['graduation-cap','building-2','milestone','users-round','heart','palmtree'];
          $w_text = ['Study Tour','Gathering','Wisata Religi','Outbound','Pernikahan','Keluarga'];
          foreach($w_text as $index => $w): ?>
          <div style="background:var(--gray-light);border-radius:6px;padding:10px 14px;font-size:0.82rem;color:var(--text-mid);font-weight:500;display:flex;align-items:center;gap:8px;">
            <i data-lucide="<?= $w_icons[$index] ?>" style="width:14px;height:14px;color:var(--navy);"></i> <?= $w ?>
          </div>
          <?php endforeach; ?>
        </div>
        <a href="kontak.php" class="btn btn-primary">Request Penawaran <i data-lucide="send" style="width:16px;vertical-align:middle;margin-left:5px;"></i></a>
      </div>
      <div style="background:linear-gradient(135deg,var(--navy-mid),var(--navy));border-radius:16px;min-height:280px;display:flex;align-items:center;justify-content:center;">
        <div style="text-align:center;padding:32px;">
          <i data-lucide="bus" style="width:60px; height:60px; color:var(--cyan); margin-bottom:10px;"></i>
          <div style="font-family:'Barlow Condensed',sans-serif;font-size:2rem;color:var(--cyan);margin:8px 0;">Charter Wisata</div>
          <div style="display:flex;gap:20px;justify-content:center;margin-top:20px;">
            <div><div style="font-family:'Barlow Condensed',sans-serif;font-size:1.8rem;color:#fff;font-weight:800;">30+</div><div style="font-size:0.75rem;color:rgba(255,255,255,0.5);">Unit</div></div>
            <div><div style="font-family:'Barlow Condensed',sans-serif;font-size:1.8rem;color:#fff;font-weight:800;">24/7</div><div style="font-size:0.75rem;color:rgba(255,255,255,0.5);">Layanan</div></div>
          </div>
        </div>
      </div>
    </div>

    <hr style="border:none;border-top:1px solid rgba(10,22,40,0.08);margin:60px 0;">

    <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(280px,1fr));gap:24px;">
      <?php
      $other_services = [
        ['package','logistik','Distribusi Logistik','Pengiriman barang dengan armada berpendingin ke seluruh Jawa dengan monitoring GPS real-time.'],
        ['briefcase','korporat','Layanan Korporat','Solusi transportasi karyawan, shuttle kantor, dan mobilisasi tim dengan jadwal fleksibel.'],
        ['gem','premium','Armada Premium','Sewa bus executive dan sleeper bus untuk perjalanan VIP dengan fasilitas kursi fully-flat.'],
      ];
      foreach ($other_services as $svc): ?>
      <div style="background:var(--gray-light);border-radius:12px;padding:28px;" id="<?=$svc[1]?>">
        <i data-lucide="<?=$svc[0]?>" style="width:40px; height:40px; color:var(--navy); margin-bottom:15px;"></i>
        <h3 style="font-family:'Barlow Condensed',sans-serif;font-size:1.4rem;text-transform:uppercase;color:var(--navy);margin-bottom:10px;"><?=$svc[2]?></h3>
        <p style="font-size:0.875rem;color:var(--text-mid);line-height:1.7;margin-bottom:18px;"><?=$svc[3]?></p>
        <a href="kontak.php" class="btn btn-navy btn-sm">Tanya Info</a>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="section section-dark" id="armada">
  <div class="container">
    <h2 class="section-title white">Spesifikasi <span>Armada</span></h2>
    <p class="section-subtitle white" style="margin-top:12px;">Seluruh armada bus SGI memenuhi standar keselamatan nasional.</p>
    <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(240px,1fr));gap:20px;margin-top:40px;">
      <?php
      $fleet_types = [
        ['shield-check','Bus Executive AC','40–44 Kursi','Reclining seat, AC, toilet, TV, WiFi, APAR'],
        ['layers','Bus Double Decker','60–70 Kursi','2 lantai, AC panoramic, kursi semi-sleeper'],
        ['bed','Sleeper Bus','24–28 Kursi','Kasur fully-flat, tirai privasi, AC individual'],
        ['shuttle-bus','Medium Bus','25–35 Kursi','Akses fleksibel untuk wisata & shuttle kota'],
      ];
      foreach ($fleet_types as $ft): ?>
      <div style="background:rgba(255,255,255,0.05);border:1px solid rgba(255,255,255,0.1);border-radius:12px;padding:24px;transition:all 0.3s;" onmouseover="this.style.background='rgba(0,180,216,0.1)';" onmouseout="this.style.background='rgba(255,255,255,0.05)';">
        <i data-lucide="<?=$ft[0]?>" style="width:36px; height:36px; color:var(--cyan); margin-bottom:15px;"></i>
        <h4 style="font-family:'Barlow Condensed',sans-serif;font-size:1.1rem;text-transform:uppercase;color:var(--cyan);margin-bottom:4px;"><?=$ft[1]?></h4>
        <div style="font-size:0.8rem;color:rgba(255,255,255,0.5);margin-bottom:10px;font-weight:600;"><?=$ft[2]?></div>
        <p style="font-size:0.8rem;color:rgba(255,255,255,0.65);line-height:1.6;"><?=$ft[3]?></p>
      </div>
      <?php endforeach; ?>
    </div>
    <div style="background:rgba(0,180,216,0.1);border:1px solid rgba(0,180,216,0.3);border-radius:10px;padding:20px 24px;margin-top:28px;display:flex;gap:16px;align-items:center;">
      <i data-lucide="shield-alert" style="width:32px; height:32px; color:var(--cyan); flex-shrink:0;"></i>
      <div>
        <strong style="color:var(--white);display:block;margin-bottom:2px;">Semua Armada Dilengkapi Fasilitas K3 Wajib</strong>
        <span style="color:rgba(255,255,255,0.65);font-size:0.85rem;">APAR · P3K · Palu Pemecah Kaca · GPS Tracker · Jalur Evakuasi</span>
      </div>
    </div>
  </div>
</section>

<section class="section section-gray">
  <div class="container">
    <h2 class="section-title center" style="display:block;text-align:center;">Apa yang Membuat Kami <span>Berbeda?</span></h2>
    <div style="max-width:800px;margin:40px auto 0;">
      <?php
      $diffs = [
        ['clipboard-check','Keselamatan Terverifikasi','Inspeksi pra-perjalanan dan pemeliharaan berkala oleh mekanik bersertifikat.'],
        ['user-check','Pengemudi Berpengalaman','Memiliki SIM B2 Umum, lulus psikotes, dan pelatihan defensive driving.'],
        ['wrench','Armada Modern','Armada maksimal 8 tahun dengan perawatan rutin di bengkel internal.'],
        ['headset','Layanan Pelanggan 24/7','Tim customer service siap melayani pemesanan dan keluhan setiap saat.'],
        ['leaf','Ramah Lingkungan','Mesin Euro 4/5 dan program efisiensi bahan bakar berkelanjutan.'],
      ];
      foreach ($diffs as $d): ?>
      <div style="display:flex;gap:20px;padding:24px 0;border-bottom:1px solid rgba(10,22,40,0.08);">
        <div style="width:48px;height:48px;background:var(--navy);border-radius:12px;display:flex;align-items:center;justify-content:center;flex-shrink:0;color:var(--cyan);">
            <i data-lucide="<?= $d[0] ?>" style="width:24px; height:24px;"></i>
        </div>
        <div>
          <h4 style="font-size:1.1rem;color:var(--navy);margin-bottom:6px;text-transform:uppercase;font-family:'Barlow Condensed',sans-serif;"><?= $d[1] ?></h4>
          <p style="font-size:0.875rem;color:var(--text-mid);"><?= $d[2] ?></p>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="cta-banner">
  <div class="container">
    <div class="cta-inner">
      <div>
        <h2>Siap Memesan Layanan?</h2>
        <p>Hubungi kami sekarang dan dapatkan penawaran terbaik.</p>
      </div>
      <div class="cta-actions">
        <a href="kontak.php" class="btn btn-primary btn-lg">Pesan Sekarang</a>
        <a href="k3.php" class="btn btn-outline btn-lg">Info K3 Kami</a>
      </div>
    </div>
  </div>
</section>

<script>
  lucide.createIcons();
</script>

<?php require_once '../includes/footer.php'; ?>