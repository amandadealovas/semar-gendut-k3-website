<?php
$page_title = 'Beranda';
$base_path = '';
require_once 'includes/header.php';
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<!-- ===================== HERO ===================== -->
<section class="hero">
  <div class="hero-bg"></div>
  <div class="hero-diagonal"></div>
  <div class="hero-image-side">
    <img
      src="<?php echo $base_path ?? ''; ?>assets/images/bus.png"
      alt="Armada Bus Double Decker PT. Semar Gendut Indonesia"
      width="797"
      height="399">
  </div>
  <div class="container" style="position:relative;z-index:2;width:100%;">
    <div class="hero-content">
      <div class="hero-badge">
        <svg width="14" height="14" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
        </svg>
        Transportasi Bus Premium Berstandar K3
      </div>

      <h1 class="hero-title">
        Mengantarkan<br>
        <span>Lebih dari</span><br>
        Sekedar Perjalanan
      </h1>

      <p class="hero-desc">
        PT. Semar Gendut Indonesia menyediakan layanan transportasi bus antar kota, wisata, dan logistik dengan standar keselamatan dan kesehatan kerja (K3) tertinggi di Malang.
      </p>

      <div class="hero-actions">
        <a href="pages/layanan.php" class="btn btn-primary btn-lg">
          <svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <circle cx="12" cy="12" r="10" />
            <polyline points="12 8 16 12 12 16" />
            <line x1="8" y1="12" x2="16" y2="12" />
          </svg>
          Lihat Layanan
        </a>
        <a href="pages/k3.php" class="btn btn-outline btn-lg">
          <svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
          </svg>
          Info K3
        </a>
      </div>
</section>

<section class="stats-section">
  <div class="container">
    <div class="stats-wrapper">
      <div class="stat-item">
        <div class="stat-num" data-target="50" data-suffix="+">0+</div>
        <div class="stat-label">Unit Armada</div>
      </div>
      <div class="stat-item">
        <div class="stat-num" data-target="15" data-suffix=" Kota">0 Kota</div>
        <div class="stat-label">Rute Perjalanan</div>
      </div>
      <div class="stat-item">
        <div class="stat-num" data-target="200" data-suffix="+">0+</div>
        <div class="stat-label">Karyawan</div>
      </div>
      <div class="stat-item">
        <div class="stat-num" data-target="0" data-suffix=" Fatality">0</div>
        <div class="stat-label">Zero Fatality</div>
      </div>
    </div>
  </div>
</section>

<!-- ===================== WHY CHOOSE ===================== -->
<section class="section">
  <div class="container">
    <div style="display:grid;grid-template-columns:1fr 2fr;gap:60px;align-items:flex-start;">
      <div>
        <h2 class="section-title">Mengapa Memilih<br><span>SGI?</span></h2>
        <p class="section-subtitle" style="margin-top:16px;">Kami membangun kepercayaan melalui keselamatan, profesionalisme, dan layanan prima setiap hari.</p>
        <a href="pages/tentang.php" class="btn btn-navy" style="margin-top:28px;">Pelajari Lebih Lanjut</a>
      </div>
      <div class="why-grid" style="margin-top:0;">
        <div class="why-card fade-in">
          <div class="why-icon">
            <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
              <path d="M5 17H3a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11a2 2 0 0 1 2 2v3" />
              <rect x="9" y="11" width="14" height="10" rx="2" />
              <path d="M13 15h.01M17 15h.01M13 19h.01M17 19h.01" />
            </svg>
          </div>
          <h4>Armada Modern</h4>
          <p>Seluruh armada dilengkapi teknologi terkini, AC premium, kursi reclining, dan sistem keselamatan canggih untuk kenyamanan maksimal.</p>
        </div>
        <div class="why-card fade-in">
          <div class="why-icon">
            <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
              <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
            </svg>
          </div>
          <h4>Keselamatan Prioritas</h4>
          <p>Sistem K3 komprehensif, pengemudi bersertifikat, dan pemeriksaan rutin memastikan setiap perjalanan berlangsung aman dan terjamin.</p>
        </div>
        <div class="why-card fade-in">
          <div class="why-icon">
            <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
              <circle cx="12" cy="12" r="10" />
              <polyline points="12 6 12 12 16 14" />
            </svg>
          </div>
          <h4>Tepat Waktu</h4>
          <p>Kami beroperasi dengan jadwal terstruktur dan sistem monitoring real-time, memastikan ketepatan waktu keberangkatan dan kedatangan.</p>
        </div>
        <div class="why-card fade-in">
          <div class="why-icon">
            <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
              <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
              <circle cx="9" cy="7" r="4" />
              <path d="M23 21v-2a4 4 0 0 0-3-3.87" />
              <path d="M16 3.13a4 4 0 0 1 0 7.75" />
            </svg>
          </div>
          <h4>Tim Profesional</h4>
          <p>Pengemudi dan kru terlatih yang ramah, berpengalaman, dan memiliki sertifikasi resmi dari lembaga yang berwenang.</p>
        </div>
        <div class="why-card fade-in">
          <div class="why-icon">
            <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
              <polyline points="22 12 18 12 15 21 9 3 6 12 2 12" />
            </svg>
          </div>
          <h4>Pemantauan Real-Time</h4>
          <p>Sistem GPS tracking memungkinkan pemantauan posisi armada secara langsung untuk keamanan penumpang dan efisiensi operasional.</p>
        </div>
        <div class="why-card fade-in">
          <div class="why-icon">
            <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
              <line x1="12" y1="1" x2="12" y2="23" />
              <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6" />
            </svg>
          </div>
          <h4>Harga Kompetitif</h4>
          <p>Tarif transparan dan bersaing tanpa biaya tersembunyi. Tersedia berbagai paket layanan yang fleksibel untuk semua kebutuhan.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ===================== SERVICES PREVIEW ===================== -->
<section class="section section-gray">
  <div class="container">
    <div style="text-align:center;margin-bottom:48px;">
      <h2 class="section-title center">Layanan <span>Unggulan</span></h2>
      <p class="section-subtitle center" style="margin-top:12px;">Solusi transportasi lengkap untuk berbagai kebutuhan perjalanan dan distribusi Anda</p>
    </div>
    <div class="services-grid">
      <div class="service-card" id="antar-kota">
        <div class="service-img">
          <div style="width:100%;height:100%;background:linear-gradient(135deg,#112240,#0077a8);display:flex;align-items:center;justify-content:center;">
            <svg width="80" height="80" viewBox="0 0 80 80" fill="none">
              <rect x="5" y="25" width="65" height="35" rx="6" fill="#00b4d8" opacity="0.4" />
              <rect x="5" y="35" width="65" height="15" rx="0" fill="#00b4d8" opacity="0.2" />
              <circle cx="20" cy="62" r="8" fill="#48cae4" opacity="0.8" />
              <circle cx="60" cy="62" r="8" fill="#48cae4" opacity="0.8" />
              <rect x="5" y="27" width="65" height="4" rx="2" fill="#00b4d8" />
            </svg>
          </div>
        </div>
        <div class="service-overlay"></div>
        <div class="service-body">
          <span class="service-tag">Antar Kota</span>
          <h3>Transportasi Antar Kota</h3>
          <p>Layanan bus reguler Malang–Surabaya, Malang–Jakarta, Malang–Yogyakarta, dan 12+ rute lainnya setiap hari.</p>
        </div>
      </div>

      <div class="service-card" id="pariwisata">
        <div class="service-img">
          <div style="width:100%;height:100%;background:linear-gradient(135deg,#0a1628,#1a3a5c);display:flex;align-items:center;justify-content:center;">
            <svg width="80" height="80" viewBox="0 0 80 80" fill="none">
              <circle cx="40" cy="30" r="14" fill="#00b4d8" opacity="0.5" />
              <path d="M40 44 L25 65 L55 65 Z" fill="#48cae4" opacity="0.4" />
              <circle cx="40" cy="30" r="6" fill="#fff" opacity="0.7" />
            </svg>
          </div>
        </div>
        <div class="service-overlay"></div>
        <div class="service-body">
          <span class="service-tag">Pariwisata</span>
          <h3>Wisata &amp; Charter Bus</h3>
          <p>Sewa bus fullday dan multiday untuk perjalanan wisata, study tour, outbound, dan kegiatan kelompok lainnya.</p>
        </div>
      </div>

      <div class="service-card" id="logistik">
        <div class="service-img">
          <div style="width:100%;height:100%;background:linear-gradient(135deg,#112240,#0a1628);display:flex;align-items:center;justify-content:center;">
            <svg width="80" height="80" viewBox="0 0 80 80" fill="none">
              <rect x="10" y="30" width="40" height="30" rx="4" fill="#00b4d8" opacity="0.4" />
              <rect x="50" y="40" width="20" height="20" rx="4" fill="#48cae4" opacity="0.4" />
              <circle cx="22" cy="62" r="6" fill="#fff" opacity="0.7" />
              <circle cx="58" cy="62" r="6" fill="#fff" opacity="0.7" />
            </svg>
          </div>
        </div>
        <div class="service-overlay"></div>
        <div class="service-body">
          <span class="service-tag">Logistik</span>
          <h3>Distribusi Logistik</h3>
          <p>Layanan pengiriman barang dan distribusi logistik dengan armada berpendingin ke seluruh kota di Pulau Jawa.</p>
        </div>
      </div>

      <div class="service-card" id="korporat">
        <div class="service-img">
          <div style="width:100%;height:100%;background:linear-gradient(135deg,#0077a8,#112240);display:flex;align-items:center;justify-content:center;">
            <svg width="80" height="80" viewBox="0 0 80 80" fill="none">
              <rect x="20" y="15" width="40" height="50" rx="4" fill="#00b4d8" opacity="0.4" />
              <rect x="28" y="25" width="10" height="10" rx="2" fill="#fff" opacity="0.6" />
              <rect x="42" y="25" width="10" height="10" rx="2" fill="#fff" opacity="0.6" />
              <rect x="28" y="40" width="10" height="10" rx="2" fill="#fff" opacity="0.6" />
              <rect x="42" y="40" width="10" height="10" rx="2" fill="#fff" opacity="0.6" />
              <rect x="33" y="55" width="14" height="10" rx="0" fill="#fff" opacity="0.4" />
            </svg>
          </div>
        </div>
        <div class="service-overlay"></div>
        <div class="service-body">
          <span class="service-tag">Korporat</span>
          <h3>Layanan Korporat</h3>
          <p>Solusi transportasi karyawan, shuttle kantor, dan mobilisasi tim korporat dengan armada eksklusif dan pengemudi profesional.</p>
        </div>
      </div>
    </div>
    <div style="text-align:center;margin-top:36px;">
      <a href="pages/layanan.php" class="btn btn-navy">Lihat Semua Layanan →</a>
    </div>
  </div>
</section>

<!-- ===================== K3 HIGHLIGHT ===================== -->
<section class="k3-highlight" id="k3-home">
  <div class="container">
    <div class="k3-grid">
      <div>
        <h2 class="section-title white">Komitmen <span>K3</span><br>Kami</h2>
        <p class="section-subtitle white" style="margin-top:14px;">Keselamatan dan Kesehatan Kerja bukan hanya kewajiban hukum — ini adalah nilai inti PT. Semar Gendut Indonesia yang tertanam dalam setiap aspek operasional.</p>
        <div class="k3-items">
          <div class="k3-item">
            <div class="k3-item-icon">
              <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
              </svg>
            </div>
            <div>
              <h4>Standar APD Wajib</h4>
              <p>Seluruh tenaga kerja diwajibkan menggunakan Alat Pelindung Diri (APD) sesuai zona dan jenis pekerjaan masing-masing divisi.</p>
            </div>
          </div>
          <div class="k3-item">
            <div class="k3-item-icon">
              <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <circle cx="12" cy="12" r="10" />
                <line x1="12" y1="8" x2="12" y2="12" />
                <line x1="12" y1="16" x2="12.01" y2="16" />
              </svg>
            </div>
            <div>
              <h4>Identifikasi &amp; Pengendalian Bahaya</h4>
              <p>Sistem HIRARC (Hazard Identification, Risk Assessment &amp; Risk Control) diterapkan di seluruh area operasional perusahaan.</p>
            </div>
          </div>
          <div class="k3-item">
            <div class="k3-item-icon">
              <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z" />
                <polyline points="14 2 14 8 20 8" />
                <line x1="16" y1="13" x2="8" y2="13" />
                <line x1="16" y1="17" x2="8" y2="17" />
                <polyline points="10 9 9 9 8 9" />
              </svg>
            </div>
            <div>
              <h4>SOP &amp; Prosedur Darurat</h4>
              <p>Setiap pekerjaan berisiko tinggi memiliki SOP tertulis. Latihan evakuasi darurat dilakukan secara rutin dua kali setahun.</p>
            </div>
          </div>
          <div class="k3-item">
            <div class="k3-item-icon">
              <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14" />
                <polyline points="22 4 12 14.01 9 11.01" />
              </svg>
            </div>
            <div>
              <h4>Zero Accident Target</h4>
              <p>Manajemen berkomitmen mencapai target zero fatality dan zero major accident melalui pembudayaan keselamatan berkelanjutan.</p>
            </div>
          </div>
        </div>
        <a href="pages/k3.php" class="btn btn-primary" style="margin-top:28px;">Pelajari Sistem K3 Kami →</a>
      </div>

      <div class="k3-visual">
        <div class="k3-visual-card">
          <h3>Standar APD Per Divisi</h3>

          <div class="apd-grid">
            <div class="apd-item">
              <div class="apd-emoji"><i class="fas fa-hard-hat" style="font-size:28px;color:#ffffff;"></i></div>
              <div class="apd-name">Safety Helmet</div>
            </div>

            <div class="apd-item">
              <div class="apd-emoji"><i class="fas fa-shoe-prints" style="font-size:28px;color:#ffffff;"></i></div>
              <div class="apd-name">Safety Shoes</div>
            </div>

            <div class="apd-item">
              <div class="apd-emoji"><i class="fas fa-vest" style="font-size:28px;color:#ffffff;"></i></div>
              <div class="apd-name">Rompi Reflektif</div>
            </div>

            <div class="apd-item">
              <div class="apd-emoji"><i class="fas fa-glasses" style="font-size:28px;color:#ffffff;"></i></div>
              <div class="apd-name">Safety Glasses</div>
            </div>

            <div class="apd-item">
              <div class="apd-emoji"><i class="fas fa-mask-face" style="font-size:28px;color:#ffffff;"></i></div>
              <div class="apd-name">Masker/Respirator</div>
            </div>

            <div class="apd-item">
              <div class="apd-emoji"><i class="fas fa-mitten" style="font-size:28px;color:#ffffff;"></i></div>
              <div class="apd-name">Safety Gloves</div>
            </div>

            <div class="apd-item">
              <div class="apd-emoji"><i class="fas fa-headphones" style="font-size:28px;color:#ffffff;"></i></div>
              <div class="apd-name">Earplug/Earmuff</div>
            </div>

            <div class="apd-item">
              <div class="apd-emoji"><i class="fas fa-user-shield" style="font-size:28px;color:#ffffff;"></i></div>
              <div class="apd-name">Full Body Harness</div>
            </div>
          </div>

          <div style="margin-top:20px;padding-top:16px;border-top:1px solid rgba(255,255,255,0.1);">
            <p style="font-size:0.8rem;color:rgba(255,255,255,0.5);text-align:center;">
              Semua APD memenuhi standar SNI / ANSI / ISO
            </p>
          </div>
        </div>

        <div style="background:rgba(255, 255, 255, 0.1);border:1px solid rgba(0,180,216,0.2);border-radius:10px;padding:16px;margin-top:16px;display:flex;align-items:center;gap:12px;">

          <!-- ICON DIGANTI DARI SVG KE FONT AWESOME -->
          <i class="fas fa-shield-alt" style="font-size:28px;color:#00b4d8;"></i>

          <div>
            <div style="font-family:'Barlow Condensed',sans-serif;color:#fff;font-weight:700;text-transform:uppercase;font-size:0.95rem;">
              Landasan Hukum
            </div>
            <div style="font-size:0.78rem;color:rgba(255,255,255,0.6);margin-top:2px;">
              UU No.1/1970 • Permenaker K3 • UU LLAJ No.22/2009 • Permenhub PM14/2016
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="fleet-section">
  <div class="container">
    <div style="display:grid;grid-template-columns:1fr 1fr;gap:60px;align-items:center;">
      <div>
        <h2 class="section-title">Armada <span>Kami</span></h2>
        <p style="color:var(--text-mid);margin-top:14px;line-height:1.7;">Di PT. Semar Gendut Indonesia, kami merancang armada dengan mengutamakan keselamatan dan kenyamanan penumpang. Seluruh unit bus dilengkapi teknologi keselamatan terkini.</p>
        <p style="color:var(--text-mid);margin-top:12px;line-height:1.7;">Tim mekanik bersertifikat kami melakukan perawatan berkala dan inspeksi pra-perjalanan (pre-trip inspection) untuk memastikan setiap bus dalam kondisi prima sebelum beroperasi.</p>
        <a href="pages/layanan.php#armada" class="btn btn-primary" style="margin-top:24px;">Lihat Detail Armada</a>
      </div>

      <div class="fleet-features">
        <div class="fleet-feature">
          <div class="fleet-feature-icon">
            <i data-lucide="bus"></i>
          </div>
          <h4>Bus Premium</h4>
          <p>Double decker & single deck AC premium</p>
        </div>

        <div class="fleet-feature">
          <div class="fleet-feature-icon">
            <i data-lucide="satellite-dish"></i>
          </div>
          <h4>GPS Tracker</h4>
          <p>Monitoring posisi real-time 24/7</p>
        </div>

        <div class="fleet-feature">
          <div class="fleet-feature-icon">
            <i data-lucide="settings-2"></i>
          </div>
          <h4>Servis Berkala</h4>
          <p>Maintenance terjadwal di bengkel sendiri</p>
        </div>

        <div class="fleet-feature">
          <div class="fleet-feature-icon">
            <i data-lucide="flame-kindling"></i>
          </div>
          <h4>APAR Terintegrasi</h4>
          <p>Pemadam api tersedia di setiap unit</p>
        </div>

        <div class="fleet-feature">
          <div class="fleet-feature-icon">
            <i data-lucide="life-buoy"></i>
          </div>
          <h4>Kit Darurat</h4>
          <p>Kotak P3K & palu pemecah kaca</p>
        </div>

        <div class="fleet-feature">
          <div class="fleet-feature-icon">
            <i data-lucide="snowflake"></i>
          </div>
          <h4>AC Premium</h4>
          <p>Sistem pendingin suhu 18–24°C stabil</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ===================== CTA BANNER ===================== -->
<section class="cta-banner">
  <div class="container">
    <div class="cta-inner">
      <div>
        <h2>Siap Memesan<br>Layanan Kami?</h2>
        <p>Hubungi tim kami sekarang untuk mendapatkan penawaran terbaik. Kami siap melayani kebutuhan transportasi Anda.</p>
      </div>
      <div class="cta-actions">
        <a href="pages/kontak.php" class="btn btn-primary btn-lg">Hubungi Kami</a>
        <a href="tel:+62341123456" class="btn btn-outline btn-lg">
          <svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12 19.79 19.79 0 0 1 1.61 3.18 2 2 0 0 1 3.6 1h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 8.56a16 16 0 0 0 6 6l.96-.96a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z" />
          </svg>
          (0341) 123-456
        </a>
      </div>
    </div>
  </div>
</section>

<script>
  lucide.createIcons();
</script>

<?php require_once 'includes/footer.php'; ?>