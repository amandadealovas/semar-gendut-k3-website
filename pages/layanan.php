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

<!-- OUR SERVICES -->
<section class="section">
  <div class="container">
    <h2 class="section-title center" style="display:block;text-align:center;">Layanan <span>Kami</span></h2>
    <p class="section-subtitle center" style="margin-top:12px;">Kami menyediakan berbagai layanan transportasi yang dapat disesuaikan dengan kebutuhan unik setiap pelanggan.</p>

    <div style="display:grid;grid-template-columns:1fr 1fr;gap:40px;margin-top:60px;align-items:center;" id="antar-kota">
      <div style="background:var(--navy);border-radius:16px;min-height:300px;display:flex;align-items:center;justify-content:center;overflow:hidden;">
        <svg viewBox="0 0 400 220" xmlns="http://www.w3.org/2000/svg" style="width:80%;">
          <rect x="10" y="60" width="340" height="110" rx="14" fill="#1a3a5c" stroke="#00b4d8" stroke-width="2"/>
          <rect x="10" y="62" width="340" height="8" rx="4" fill="#00b4d8"/>
          <rect x="25" y="82" width="55" height="40" rx="4" fill="#00b4d8" opacity="0.5"/>
          <rect x="90" y="82" width="55" height="40" rx="4" fill="#00b4d8" opacity="0.5"/>
          <rect x="155" y="82" width="55" height="40" rx="4" fill="#00b4d8" opacity="0.5"/>
          <rect x="220" y="82" width="55" height="40" rx="4" fill="#00b4d8" opacity="0.5"/>
          <rect x="285" y="82" width="55" height="40" rx="4" fill="#00b4d8" opacity="0.5"/>
          <circle cx="70" cy="175" r="18" fill="#1a3a5c" stroke="#00b4d8" stroke-width="2.5"/>
          <circle cx="70" cy="175" r="8" fill="#0a1628"/>
          <circle cx="290" cy="175" r="18" fill="#1a3a5c" stroke="#00b4d8" stroke-width="2.5"/>
          <circle cx="290" cy="175" r="8" fill="#0a1628"/>
          <text x="160" y="115" fill="#00b4d8" font-family="Arial" font-size="14" text-anchor="middle" font-weight="bold">PT. SGI</text>
        </svg>
      </div>
      <div>
        <span style="background:rgba(0,180,216,0.1);color:var(--cyan);font-size:0.75rem;font-weight:700;letter-spacing:0.08em;text-transform:uppercase;padding:5px 12px;border-radius:100px;border:1px solid rgba(0,180,216,0.3);">Transportasi</span>
        <h2 style="font-family:'Barlow Condensed',sans-serif;font-size:2.2rem;text-transform:uppercase;color:var(--navy);margin:14px 0 14px;">Transportasi Antar Kota</h2>
        <p style="color:var(--text-mid);line-height:1.7;margin-bottom:16px;">Layanan bus reguler dengan jadwal tetap ke 15+ kota tujuan. Dilayani oleh pengemudi profesional bersertifikat dengan armada yang selalu dalam kondisi prima.</p>
        <ul style="list-style:none;display:flex;flex-direction:column;gap:10px;margin-bottom:24px;">
          <?php foreach(['Malang – Surabaya (Setiap 2 jam)','Malang – Jakarta (Pagi & Malam)','Malang – Yogyakarta','Malang – Bali','Malang – Semarang','+ 10 rute lainnya'] as $r): ?>
          <li style="display:flex;align-items:center;gap:8px;font-size:0.875rem;color:var(--text-mid);">
            <svg width="16" height="16" fill="none" stroke="var(--cyan)" stroke-width="2" viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>
            <?= $r ?>
          </li>
          <?php endforeach; ?>
        </ul>
        <a href="kontak.php" class="btn btn-primary">Pesan Tiket →</a>
      </div>
    </div>

    <hr style="border:none;border-top:1px solid rgba(10,22,40,0.08);margin:60px 0;">

    <div style="display:grid;grid-template-columns:1fr 1fr;gap:40px;margin-top:0;align-items:center;" id="pariwisata">
      <div>
        <span style="background:rgba(0,180,216,0.1);color:var(--cyan);font-size:0.75rem;font-weight:700;letter-spacing:0.08em;text-transform:uppercase;padding:5px 12px;border-radius:100px;border:1px solid rgba(0,180,216,0.3);">Pariwisata</span>
        <h2 style="font-family:'Barlow Condensed',sans-serif;font-size:2.2rem;text-transform:uppercase;color:var(--navy);margin:14px 0 14px;">Charter Bus Wisata</h2>
        <p style="color:var(--text-mid);line-height:1.7;margin-bottom:16px;">Sewa bus fullday dan multiday untuk perjalanan wisata kelompok, study tour, outbound, gathering perusahaan, atau event khusus dengan layanan penuh dari tim SGI.</p>
        <div style="display:grid;grid-template-columns:1fr 1fr;gap:12px;margin-bottom:24px;">
          <?php foreach(['Study Tour Sekolah','Gathering Kantor','Wisata Religi','Outbound Team','Event Pernikahan','Perjalanan Keluarga'] as $w): ?>
          <div style="background:var(--gray-light);border-radius:6px;padding:10px 14px;font-size:0.82rem;color:var(--text-mid);font-weight:500;">🚌 <?= $w ?></div>
          <?php endforeach; ?>
        </div>
        <a href="kontak.php" class="btn btn-primary">Request Penawaran →</a>
      </div>
      <div style="background:linear-gradient(135deg,var(--navy-mid),var(--navy));border-radius:16px;min-height:280px;display:flex;align-items:center;justify-content:center;">
        <div style="text-align:center;padding:32px;">
          <div style="font-size:4rem;">🏔️</div>
          <div style="font-family:'Barlow Condensed',sans-serif;font-size:2rem;color:var(--cyan);margin:8px 0;">Charter Wisata</div>
          <p style="color:rgba(255,255,255,0.6);font-size:0.875rem;">Fullday / Multiday / Khusus</p>
          <div style="display:flex;gap:20px;justify-content:center;margin-top:20px;">
            <div><div style="font-family:'Barlow Condensed',sans-serif;font-size:1.8rem;color:#fff;font-weight:800;">30+</div><div style="font-size:0.75rem;color:rgba(255,255,255,0.5);">Unit Tersedia</div></div>
            <div><div style="font-family:'Barlow Condensed',sans-serif;font-size:1.8rem;color:#fff;font-weight:800;">24/7</div><div style="font-size:0.75rem;color:rgba(255,255,255,0.5);">Layanan</div></div>
          </div>
        </div>
      </div>
    </div>

    <hr style="border:none;border-top:1px solid rgba(10,22,40,0.08);margin:60px 0;">

    <!-- More services grid -->
    <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(280px,1fr));gap:24px;">
      <?php
      $other_services = [
        ['📦','logistik','Distribusi Logistik','Pengiriman barang dan distribusi logistik dengan armada berpendingin ke seluruh kota di Pulau Jawa. Armada dilengkapi GPS tracker dan sistem monitoring real-time.'],
        ['🏢','korporat','Layanan Korporat','Solusi transportasi karyawan, shuttle kantor, dan mobilisasi tim korporat dengan armada eksklusif, pengemudi profesional, dan jadwal yang fleksibel.'],
        ['🏫','premium','Armada Premium (VVIP)','Sewa bus executive dan sleeper bus untuk perjalanan VIP dengan fasilitas mewah: kursi reclining fully-flat, hiburan onboard, dan layanan pramugari.'],
      ];
      foreach ($other_services as $svc): ?>
      <div style="background:var(--gray-light);border-radius:12px;padding:28px;" id="<?=$svc[1]?>">
        <div style="font-size:2.4rem;margin-bottom:14px;"><?=$svc[0]?></div>
        <h3 style="font-family:'Barlow Condensed',sans-serif;font-size:1.4rem;text-transform:uppercase;color:var(--navy);margin-bottom:10px;"><?=$svc[2]?></h3>
        <p style="font-size:0.875rem;color:var(--text-mid);line-height:1.7;margin-bottom:18px;"><?=$svc[3]?></p>
        <a href="kontak.php" class="btn btn-navy btn-sm">Tanya Info →</a>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- FLEET -->
<section class="section section-dark" id="armada">
  <div class="container">
    <h2 class="section-title white">Spesifikasi <span>Armada</span></h2>
    <p class="section-subtitle white" style="margin-top:12px;">Seluruh armada bus SGI memenuhi standar keselamatan nasional dan dilengkapi fasilitas modern.</p>
    <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(240px,1fr));gap:20px;margin-top:40px;">
      <?php
      $fleet_types = [
        ['🚌','Bus Executive AC','40–44 Kursi','Reclining seat, AC, toilet, TV, WiFi, APAR, kotak P3K'],
        ['🚍','Bus Double Decker','60–70 Kursi','2 lantai, AC panoramic, kursi semi-sleeper'],
        ['💺','Sleeper Bus','24–28 Kursi','Kasur fully-flat, tirai privasi, AC individual'],
        ['🚐','Medium Bus','25–35 Kursi','Cocok untuk wisata & shuttle dengan akses fleksibel'],
      ];
      foreach ($fleet_types as $ft): ?>
      <div style="background:rgba(255,255,255,0.05);border:1px solid rgba(255,255,255,0.1);border-radius:12px;padding:24px;transition:all 0.3s;" onmouseover="this.style.background='rgba(0,180,216,0.1)';this.style.borderColor='rgba(0,180,216,0.3)'" onmouseout="this.style.background='rgba(255,255,255,0.05)';this.style.borderColor='rgba(255,255,255,0.1)'">
        <div style="font-size:2.4rem;margin-bottom:12px;"><?=$ft[0]?></div>
        <h4 style="font-family:'Barlow Condensed',sans-serif;font-size:1.1rem;text-transform:uppercase;color:var(--cyan);margin-bottom:4px;"><?=$ft[1]?></h4>
        <div style="font-size:0.8rem;color:rgba(255,255,255,0.5);margin-bottom:10px;font-weight:600;"><?=$ft[2]?></div>
        <p style="font-size:0.8rem;color:rgba(255,255,255,0.65);line-height:1.6;"><?=$ft[3]?></p>
      </div>
      <?php endforeach; ?>
    </div>
    <div style="background:rgba(0,180,216,0.1);border:1px solid rgba(0,180,216,0.3);border-radius:10px;padding:20px 24px;margin-top:28px;display:flex;gap:16px;align-items:center;">
      <svg width="32" height="32" fill="none" stroke="var(--cyan)" stroke-width="2" viewBox="0 0 24 24"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
      <div>
        <strong style="color:var(--white);display:block;margin-bottom:2px;">Semua Armada Dilengkapi Fasilitas K3 Wajib</strong>
        <span style="color:rgba(255,255,255,0.65);font-size:0.85rem;">APAR kelas ABC · Kotak P3K lengkap · Palu pemecah kaca · GPS Tracker real-time · Jalur evakuasi berlabel · Inspeksi berkala tersertifikasi</span>
      </div>
    </div>
  </div>
</section>

<!-- WHAT MAKES US DIFFERENT -->
<section class="section section-gray">
  <div class="container">
    <h2 class="section-title center" style="display:block;text-align:center;">Apa yang Membuat Kami <span>Berbeda?</span></h2>
    <div style="max-width:800px;margin:40px auto 0;">
      <?php
      $diffs = [
        ['Keselamatan Terverifikasi','Semua armada menjalani inspeksi pra-perjalanan dan pemeliharaan berkala oleh mekanik bersertifikat. Zero tolerance terhadap armada tidak laik jalan.'],
        ['Pengemudi Berpengalaman & Tersertifikasi','Seluruh pengemudi memiliki SIM B2 Umum aktif, telah lulus psikotes, pemeriksaan kesehatan berkala, dan pelatihan defensive driving.'],
        ['Armada Modern & Terawat','Armada berusia maksimal 8 tahun dengan perawatan terjadwal. Setiap unit diperiksa di bengkel internal SGI sebelum diizinkan beroperasi.'],
        ['Layanan Pelanggan 24/7','Tim customer service siap melayani pemesanan, pertanyaan, dan penanganan keluhan pelanggan setiap saat tanpa hari libur.'],
        ['Pendekatan Ramah Lingkungan','Pemilihan armada bermesin Euro 4/5, manajemen limbah bengkel yang bertanggung jawab, dan program efisiensi bahan bakar yang berkelanjutan.'],
      ];
      foreach ($diffs as $i => $d): ?>
      <div style="display:flex;gap:16px;padding:20px 0;border-bottom:1px solid rgba(10,22,40,0.08);">
        <div style="width:36px;height:36px;background:var(--navy);border-radius:50%;display:flex;align-items:center;justify-content:center;flex-shrink:0;font-family:'Barlow Condensed',sans-serif;font-weight:800;color:var(--cyan);"><?= $i+1 ?></div>
        <div>
          <h4 style="font-size:1rem;color:var(--navy);margin-bottom:6px;text-transform:uppercase;font-family:'Barlow Condensed',sans-serif;"><?= $d[0] ?></h4>
          <p style="font-size:0.875rem;color:var(--text-mid);"><?= $d[1] ?></p>
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
        <p>Hubungi kami sekarang dan dapatkan penawaran terbaik sesuai kebutuhan perjalanan Anda.</p>
      </div>
      <div class="cta-actions">
        <a href="kontak.php" class="btn btn-primary btn-lg">Pesan Sekarang</a>
        <a href="k3.php" class="btn btn-outline btn-lg">Info K3 Kami</a>
      </div>
    </div>
  </div>
</section>

<?php require_once '../includes/footer.php'; ?>
