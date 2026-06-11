<?php
$page_title = 'Tentang Kami';
$base_path = '../';
require_once '../includes/header.php';
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<section class="page-hero">
  <div class="container page-hero-inner">
    <div class="breadcrumb">
      <a href="../index.php">Beranda</a>
      <span>›</span>
      <span class="current">Tentang Kami</span>
    </div>
    <h1>Tentang <span>SGI</span></h1>
    <p>Inovasi dalam transportasi, Keunggulan dalam layanan, Keselamatan dalam setiap perjalanan.</p>
  </div>
</section>

<!-- ABOUT INTRO -->
<<section class="section" id="sejarah">
  <div class="container">
    <div class="about-intro-grid">
      <div>
        <h2 class="section-title">Menggerakkan <span>Indonesia</span><br>dengan Aman</h2>
        <p style="color:var(--text-mid);margin-top:16px;line-height:1.8;">PT. Semar Gendut Indonesia didirikan pada tahun 2024 sebagai respons terhadap meningkatnya kebutuhan masyarakat akan layanan transportasi darat yang aman, nyaman, dan tepat waktu.</p>
        <p style="color:var(--text-mid);margin-top:12px;line-height:1.8;">Bermula dari layanan transportasi penumpang dalam kota Malang, SGI terus berkembang menjadi perusahaan transportasi regional yang melayani rute antar kota di Jawa, jasa distribusi logistik, serta penyewaan armada untuk kebutuhan pariwisata dan korporat.</p>
        <p style="color:var(--text-mid);margin-top:12px;line-height:1.8;">Berbasis di Malang, Jawa Timur, SGI berkomitmen untuk menjadi pemimpin ekosistem perjalanan darat premium di Indonesia — menggabungkan kemewahan, kenyamanan, dan standar keselamatan kerja (K3) terbaik di kelasnya.</p>
        <div class="about-features">
          <?php foreach (['Beroperasi sejak 2024', 'Berbasis di Malang, Jatim', '50+ Unit Armada', '15+ Rute Aktif', '200+ Karyawan', 'Zero Fatality Record'] as $f): ?>
            <div class="about-feature-item">
              <div class="about-feature-dot"></div>
              <span><?= $f ?></span>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
      <div>
        <div style="background:var(--navy);border-radius:16px;padding:36px;color:var(--white);">
          <h3 style="font-family:'Barlow Condensed',sans-serif;font-size:1.6rem;color:var(--cyan);text-transform:uppercase;margin-bottom:20px;">
            Identitas Perusahaan
          </h3>

          <div style="display:flex;flex-direction:column;gap:16px;">
            <?php
            $company_info = [
              ['fa-clipboard-list', 'Nama Resmi', 'PT. Semar Gendut Indonesia'],
              ['fa-building', 'Bidang Usaha', 'Transportasi Darat — Bus Premium'],
              ['fa-location-dot', 'Kantor Pusat', 'Jl. Veteran No. 88, Malang, Jawa Timur'],
              ['fa-calendar', 'Tahun Berdiri', '2024'],
              ['fa-globe', 'Wilayah Operasi', 'Regional & Nasional (Pulau Jawa)'],
              ['fa-id-badge', 'Status', 'Perusahaan Swasta Nasional (PT)'],
            ];
            foreach ($company_info as $info): ?>

              <div style="display:flex;gap:12px;align-items:flex-start;padding-bottom:14px;border-bottom:1px solid rgba(255,255,255,0.07);">
                <span style="font-size:1.2rem;flex-shrink:0;margin-top:2px;">
                  <i class="fas <?= $info[0] ?>" style="color:#ffffff;"></i>
                </span>
                <div>
                  <div style="font-size:0.72rem;color:rgba(255,255,255,0.4);text-transform:uppercase;letter-spacing:0.06em;margin-bottom:2px;">
                    <?= $info[1] ?>
                  </div>
                  <div style="font-size:0.9rem;color:var(--white);font-weight:500;">
                    <?= $info[2] ?>
                  </div>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section section-gray" id="visi">
  <div class="container">
    <h2 class="section-title center" style="display:block;text-align:center;">
      Visi &amp; <span>Misi</span>
    </h2>

    <div class="vision-mission-grid">
      <div class="vm-card">
        <h3><i class="fas fa-bullseye" style="color:#ffffff;margin-right:8px;"></i> Visi</h3>
        <p>
          Menjadi pemimpin ekosistem perjalanan darat premium di Indonesia dengan menghadirkan kemewahan, kenyamanan,
          <em>hospitality</em> unggul, dan standar keselamatan terbaik yang diakui secara nasional.
        </p>
      </div>

      <div class="vm-card">
        <h3><i class="fas fa-rocket" style="color:#ffffff;margin-right:8px;"></i> Misi</h3>
        <ul>
          <li>Menyediakan armada dan layanan transportasi darat berstandar internasional dengan desain modern, privasi tinggi, dan kenyamanan setara perjalanan udara kelas satu</li>
          <li>Membangun budaya pelayanan yang ramah, profesional, dan personal melalui pelatihan berkelanjutan serta penyediaan pengalaman yang disesuaikan</li>
          <li>Mengembangkan ekosistem perjalanan darat melalui kolaborasi strategis, titik layanan eksklusif, dan adopsi teknologi untuk kemudahan dan keselamatan</li>
          <li>Menegakkan budaya Keselamatan dan Kesehatan Kerja (K3) sebagai nilai inti yang tidak dapat dikompromikan dalam setiap aspek operasional</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <h2 class="section-title center" style="display:block;text-align:center;">
      Nilai-Nilai <span>Perusahaan</span>
    </h2>

    <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(250px,1fr));gap:24px;margin-top:48px;">
      <?php
      $values = [
        ['fa-shield-halved', 'Keselamatan', 'Safety First — tidak ada target bisnis yang lebih penting dari keselamatan manusia'],
        ['fa-star', 'Integritas', 'Transparan, jujur, dan bertanggung jawab dalam setiap keputusan dan tindakan'],
        ['fa-handshake', 'Pelayanan Prima', 'Kepuasan pelanggan adalah tolak ukur keberhasilan kami, bukan sekadar keuntungan'],
        ['fa-leaf', 'Berkelanjutan', 'Operasional yang ramah lingkungan dan bertanggung jawab sosial kepada masyarakat'],
        ['fa-lightbulb', 'Inovasi', 'Terus belajar, beradaptasi, dan mengadopsi teknologi terbaik untuk kemajuan layanan'],
        ['fa-users', 'Kolaborasi', 'Membangun tim yang solid, saling mendukung, dan tumbuh bersama perusahaan'],
      ];

      foreach ($values as $v): ?>
        <div class="value-card">
          <div class="icon-box"><i class="fas <?= $v[0] ?>"></i></div>
          <h4><?= $v[1] ?></h4>
          <p><?= $v[2] ?></p>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <h2 class="section-title center" style="display:block;text-align:center;">Struktur Organisasi <span>K3 (P2K3)</span></h2>
    <p class="section-subtitle center" style="margin-top:12px;">Garis komando dan tanggung jawab Keselamatan & Kesehatan Kerja (SMK3) di PT. Semar Gendut Indonesia.</p>
    
    <div style="margin-top: 40px; text-align: center; background: var(--white); padding: 24px; border-radius: 12px; box-shadow: var(--shadow);">
      <img src="../assets/images/struktur_organisasi.png" alt="Struktur Organisasi K3 PT Semar Gendut Indonesia" style="max-width: 100%; height: auto; border-radius: 8px;">
      
      <p style="font-size: 0.85rem; color: var(--text-mid); margin-top: 20px; line-height: 1.6; max-width: 800px; margin-left: auto; margin-right: auto;">
        <i>*Komando Utama dipimpin oleh Direktur Utama sebagai Ketua P2K3, di mana pengawasan dipecah menjadi dua pilar utama: <strong>Pilar Pengawasan & Analisis</strong> (Audit & Evaluasi) dan <strong>Pilar Eksekusi Lapangan</strong> (Operasi K3) yang mengawasi kepatuhan prosedur harian.</i>
      </p>
    </div>
  </div>
</section>
<section class="section section-dark">
  <div class="container">
    <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(180px,1fr));gap:0;text-align:center;border:1px solid rgba(255,255,255,0.08);border-radius:12px;overflow:hidden;">
      <?php
      $stats = [['50+', 'Unit Armada', 'Beroperasi aktif'], ['15', 'Kota Tujuan', 'Rute aktif'], ['200+', 'Karyawan', 'Tim profesional'], ['2024', 'Berdiri', 'Tahun operasi'], ['0', 'Zero Fatality', 'Rekam jejak'], ['24/7', 'Layanan', 'Siaga setiap saat']];
      foreach ($stats as $i => $s): ?>
        <div style="padding:32px 20px;border-right:1px solid rgba(255,255,255,0.08);<?= ($i % 3 == 2) ? 'border-right:none;' : '' ?>">
          <div style="font-family:'Barlow Condensed',sans-serif;font-size:2.4rem;font-weight:800;color:var(--cyan);"><?= $s[0] ?></div>
          <div style="font-family:'Barlow Condensed',sans-serif;text-transform:uppercase;color:var(--white);font-size:1rem;font-weight:700;margin:4px 0 4px;"><?= $s[1] ?></div>
          <div style="font-size:0.75rem;color:rgba(255,255,255,0.4);"><?= $s[2] ?></div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="cta-banner">
  <div class="container">
    <div class="cta-inner">
      <div>
        <h2>Bergabunglah Bersama Kami</h2>
        <p>Kami selalu mencari individu yang berdedikasi untuk bergabung dalam tim SGI dan turut membangun transportasi Indonesia yang lebih aman.</p>
      </div>
      <div class="cta-actions">
        <a href="kontak.php" class="btn btn-primary btn-lg">Hubungi Kami</a>
        <a href="k3.php" class="btn btn-outline btn-lg">Komitmen K3</a>
      </div>
    </div>
  </div>
</section>

<?php require_once '../includes/footer.php'; ?>