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
<section class="section" id="sejarah">
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

                <!-- ICON DIGANTI -->
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

<!-- VISION MISSION -->
<section class="section section-gray" id="visi">
  <div class="container">
    <h2 class="section-title center" style="display:block;text-align:center;">
      Visi &amp; <span>Misi</span>
    </h2>

    <div class="vision-mission-grid">

      <!-- VISI -->
      <div class="vm-card">
        <h3>
          <i class="fas fa-bullseye" style="color:#ffffff;margin-right:8px;"></i>
          Visi
        </h3>
        <p>
          Menjadi pemimpin ekosistem perjalanan darat premium di Indonesia dengan menghadirkan kemewahan, kenyamanan,
          <em>hospitality</em> unggul, dan standar keselamatan terbaik yang diakui secara nasional.
        </p>
      </div>

      <!-- MISI -->
      <div class="vm-card">
        <h3>
          <i class="fas fa-rocket" style="color:#ffffff;margin-right:8px;"></i>
          Misi
        </h3>

        <ul>
          <li>
            <i class="fas fa-check-circle" style="color:#ffffff;margin-right:8px;"></i>
            Menyediakan armada dan layanan transportasi darat berstandar internasional dengan desain modern, privasi tinggi, dan kenyamanan setara perjalanan udara kelas satu
          </li>

          <li>
            <i class="fas fa-check-circle" style="color:#ffffff;margin-right:8px;"></i>
            Membangun budaya pelayanan yang ramah, profesional, dan personal melalui pelatihan berkelanjutan serta penyediaan pengalaman yang disesuaikan
          </li>

          <li>
            <i class="fas fa-check-circle" style="color:#ffffff;margin-right:8px;"></i>
            Mengembangkan ekosistem perjalanan darat melalui kolaborasi strategis, titik layanan eksklusif, dan adopsi teknologi untuk kemudahan dan keselamatan
          </li>

          <li>
            <i class="fas fa-check-circle" style="color:#ffffff;margin-right:8px;"></i>
            Menegakkan budaya Keselamatan dan Kesehatan Kerja (K3) sebagai nilai inti yang tidak dapat dikompromikan dalam setiap aspek operasional
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- VALUES -->
<section class="section">
  <div class="container">
    <h2 class="section-title center" style="display:block;text-align:center;">
      Nilai-Nilai <span>Perusahaan</span>
    </h2>

    <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(200px,1fr));gap:20px;margin-top:40px;">

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

        <div class="value-card"
          style="text-align:center;padding:24px 16px;background:var(--gray-light);border-radius:10px;transition:all 0.3s;"
          onmouseover="this.style.background='var(--navy)';this.style.color='white'"
          onmouseout="this.style.background='var(--gray-light)';this.style.color=''">

          <!-- ICON -->
          <div class="icon-box" style="font-size:2.2rem;margin-bottom:10px;">
            <i class="fas <?= $v[0] ?>"></i>
          </div>

          <h4 style="font-family:'Barlow Condensed',sans-serif;font-size:1rem;text-transform:uppercase;margin-bottom:8px;color:inherit;">
            <?= $v[1] ?>
          </h4>

          <p style="font-size:0.8rem;line-height:1.6;color:inherit;opacity:0.7;">
            <?= $v[2] ?>
          </p>

        </div>

      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ORGANIZATIONAL STRUCTURE -->
<section class="section section-gray" id="struktur">
  <div class="container">
    <h2 class="section-title center" style="display:block;text-align:center;">Struktur <span>Organisasi</span></h2>
    <div style="max-width:800px;margin:40px auto 0;">
      <!-- Visual org chart -->
      <div style="display:flex;flex-direction:column;align-items:center;gap:0;">
        <!-- Top -->
        <div style="background:var(--navy);color:var(--white);border-radius:8px;padding:14px 28px;text-align:center;border:2px solid var(--cyan);min-width:200px;">
          <div style="font-family:'Barlow Condensed',sans-serif;font-size:1rem;text-transform:uppercase;color:var(--cyan);">Dewan Direksi</div>
          <div style="font-size:0.75rem;color:rgba(255,255,255,0.5);">Board of Directors</div>
        </div>
        <div style="width:2px;height:24px;background:var(--cyan);"></div>
        <!-- Level 2 -->
        <div style="background:var(--navy-mid);color:var(--white);border-radius:8px;padding:12px 24px;text-align:center;border:1px solid rgba(0,180,216,0.4);min-width:200px;">
          <div style="font-family:'Barlow Condensed',sans-serif;font-size:0.95rem;text-transform:uppercase;color:var(--cyan);">Direktur Utama</div>
        </div>
        <div style="width:2px;height:20px;background:var(--navy-light);"></div>
        <!-- Level 3 - Two branches -->
        <div style="display:flex;gap:60px;align-items:flex-start;position:relative;">
          <div style="position:absolute;top:0;left:calc(50% - 30px);width:60px;height:2px;background:var(--navy-light);"></div>
          <div style="display:flex;flex-direction:column;align-items:center;">
            <div style="width:2px;height:20px;background:var(--navy-light);"></div>
            <div style="background:var(--gray-light);border-radius:8px;padding:12px 20px;text-align:center;border:1px solid rgba(10,22,40,0.1);min-width:160px;">
              <div style="font-family:'Barlow Condensed',sans-serif;font-size:0.9rem;text-transform:uppercase;color:var(--navy);">Dir. Operasional</div>
            </div>
            <div style="width:2px;height:16px;background:var(--navy-light);"></div>
            <div style="display:flex;gap:12px;">
              <?php foreach (['Manajer Pool', 'Manajer Armada', 'Manajer Rute'] as $m): ?>
                <div style="background:var(--white);border-radius:6px;padding:8px 12px;text-align:center;border:1px solid rgba(10,22,40,0.1);min-width:100px;">
                  <div style="font-size:0.72rem;color:var(--navy);font-weight:600;"><?= $m ?></div>
                </div>
              <?php endforeach; ?>
            </div>
          </div>
          <div style="display:flex;flex-direction:column;align-items:center;">
            <div style="width:2px;height:20px;background:var(--navy-light);"></div>
            <div style="background:var(--gray-light);border-radius:8px;padding:12px 20px;text-align:center;border:1px solid rgba(10,22,40,0.1);min-width:160px;">
              <div style="font-family:'Barlow Condensed',sans-serif;font-size:0.9rem;text-transform:uppercase;color:var(--navy);">Dir. K3 &amp; SDM</div>
            </div>
            <div style="width:2px;height:16px;background:var(--navy-light);"></div>
            <div style="display:flex;gap:12px;">
              <?php foreach (['Ka. K3', 'Ka. SDM', 'Ka. Pelatihan'] as $m): ?>
                <div style="background:var(--white);border-radius:6px;padding:8px 12px;text-align:center;border:1px solid rgba(10,22,40,0.1);min-width:100px;">
                  <div style="font-size:0.72rem;color:var(--navy);font-weight:600;"><?= $m ?></div>
                </div>
              <?php endforeach; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- STATS -->
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