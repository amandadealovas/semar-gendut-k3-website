<?php
$page_title = 'Kontak';
$base_path = '../';

// Simple form handler
$submitted = false;
$errors = [];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name    = trim($_POST['name'] ?? '');
    $email   = trim($_POST['email'] ?? '');
    $phone   = trim($_POST['phone'] ?? '');
    $subject = trim($_POST['subject'] ?? '');
    $message = trim($_POST['message'] ?? '');
    if (!$name)    $errors[] = 'Nama harus diisi.';
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = 'Email tidak valid.';
    if (!$message) $errors[] = 'Pesan harus diisi.';
    if (empty($errors)) {
        // In production: send email or save to DB
        $submitted = true;
    }
}

require_once '../includes/header.php';
?>

<section class="page-hero">
  <div class="container page-hero-inner">
    <div class="breadcrumb">
      <a href="../index.php">Beranda</a>
      <span>›</span>
      <span class="current">Kontak</span>
    </div>
    <h1><span>Hubungi</span> Kami</h1>
    <p>Tim kami siap membantu Anda. Kirim pesan, hubungi langsung, atau kunjungi kantor kami di Malang.</p>
  </div>
</section>

<!-- CONTACT CARDS -->
<section class="section-sm" style="padding:50px 0;">
  <div class="container">
    <div class="contact-grid">
      <div class="contact-card">
        <div class="contact-icon">
          <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12 19.79 19.79 0 0 1 1.61 3.18 2 2 0 0 1 3.6 1h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 8.56a16 16 0 0 0 6 6l.96-.96a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
        </div>
        <h4>Kontak Umum</h4>
        <a href="tel:+62341123456">(0341) 123-456</a>
      </div>
      <div class="contact-card">
        <div class="contact-icon">
          <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
        </div>
        <h4>Tim K3 &amp; Keselamatan</h4>
        <a href="mailto:k3@semargendut.co.id">k3@semargendut.co.id</a>
      </div>
      <div class="contact-card">
        <div class="contact-icon">
          <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
        </div>
        <h4>Kantor Pusat</h4>
        <p>Jl. Veteran No. 88, Malang, Jawa Timur 65145</p>
      </div>
      <div class="contact-card">
        <div class="contact-icon">
          <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
        </div>
        <h4>Jam Operasional</h4>
        <p>Sen–Sab: 07.00–21.00 WIB<br>Reservasi: 24 jam</p>
      </div>
    </div>

    <!-- Emergency line -->
    <div style="background:var(--red);border-radius:10px;padding:18px 24px;margin-top:20px;display:flex;align-items:center;justify-content:space-between;flex-wrap:wrap;gap:12px;">
      <div style="display:flex;align-items:center;gap:12px;">
        <svg width="28" height="28" fill="none" stroke="#fff" stroke-width="2" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>
        <div>
          <strong style="color:#fff;display:block;">Hotline Darurat K3 (24 Jam)</strong>
          <span style="color:rgba(255,255,255,0.8);font-size:0.85rem;">Untuk melaporkan insiden, kecelakaan, atau situasi darurat</span>
        </div>
      </div>
      <a href="tel:+628001234567" style="background:#fff;color:var(--red);font-family:'Barlow Condensed',sans-serif;font-weight:700;font-size:1.1rem;padding:10px 24px;border-radius:6px;text-transform:uppercase;letter-spacing:0.04em;">0800-123-4567</a>
    </div>
  </div>
</section>

<!-- CONTACT FORM + MAP -->
<section class="section" style="padding-top:20px;">
  <div class="container">
    <div style="display:grid;grid-template-columns:1fr 1fr;gap:48px;align-items:flex-start;">

      <!-- Form -->
      <div>
        <h2 class="section-title">Kirim <span>Pesan</span></h2>
        <p style="color:var(--text-mid);margin-top:10px;margin-bottom:28px;">Isi formulir di bawah ini dan tim kami akan merespons dalam waktu maksimal 1 x 24 jam kerja.</p>

        <?php if ($submitted): ?>
        <div style="background:#f0fdf4;border:2px solid #16a34a;border-radius:10px;padding:20px;display:flex;gap:12px;align-items:flex-start;">
          <svg width="24" height="24" fill="none" stroke="#16a34a" stroke-width="2" viewBox="0 0 24 24"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
          <div>
            <strong style="color:#16a34a;display:block;margin-bottom:4px;">Pesan Berhasil Dikirim!</strong>
            <p style="font-size:0.875rem;color:var(--text-mid);">Terima kasih <?= htmlspecialchars($name) ?>, pesan Anda telah kami terima. Tim SGI akan menghubungi Anda segera.</p>
          </div>
        </div>
        <?php else: ?>

        <?php if (!empty($errors)): ?>
        <div style="background:#fef2f2;border:1px solid #dc2626;border-radius:8px;padding:14px 18px;margin-bottom:20px;">
          <?php foreach ($errors as $e): ?>
          <p style="color:#dc2626;font-size:0.875rem;">• <?= htmlspecialchars($e) ?></p>
          <?php endforeach; ?>
        </div>
        <?php endif; ?>

        <form method="POST" action="" style="display:flex;flex-direction:column;gap:16px;">
          <div style="display:grid;grid-template-columns:1fr 1fr;gap:16px;">
            <div>
              <label style="font-size:0.8rem;font-weight:600;color:var(--navy);display:block;margin-bottom:6px;text-transform:uppercase;letter-spacing:0.04em;">Nama Lengkap *</label>
              <input type="text" name="name" value="<?= htmlspecialchars($_POST['name'] ?? '') ?>" placeholder="Budi Santoso" style="width:100%;padding:12px 14px;border:1.5px solid rgba(10,22,40,0.15);border-radius:6px;font-family:'Barlow',sans-serif;font-size:0.9rem;outline:none;transition:border-color 0.2s;" onfocus="this.style.borderColor='var(--cyan)'" onblur="this.style.borderColor='rgba(10,22,40,0.15)'">
            </div>
            <div>
              <label style="font-size:0.8rem;font-weight:600;color:var(--navy);display:block;margin-bottom:6px;text-transform:uppercase;letter-spacing:0.04em;">Email *</label>
              <input type="email" name="email" value="<?= htmlspecialchars($_POST['email'] ?? '') ?>" placeholder="budi@email.com" style="width:100%;padding:12px 14px;border:1.5px solid rgba(10,22,40,0.15);border-radius:6px;font-family:'Barlow',sans-serif;font-size:0.9rem;outline:none;transition:border-color 0.2s;" onfocus="this.style.borderColor='var(--cyan)'" onblur="this.style.borderColor='rgba(10,22,40,0.15)'">
            </div>
          </div>
          <div style="display:grid;grid-template-columns:1fr 1fr;gap:16px;">
            <div>
              <label style="font-size:0.8rem;font-weight:600;color:var(--navy);display:block;margin-bottom:6px;text-transform:uppercase;letter-spacing:0.04em;">Nomor Telepon</label>
              <input type="tel" name="phone" value="<?= htmlspecialchars($_POST['phone'] ?? '') ?>" placeholder="08xxxxxxxxxx" style="width:100%;padding:12px 14px;border:1.5px solid rgba(10,22,40,0.15);border-radius:6px;font-family:'Barlow',sans-serif;font-size:0.9rem;outline:none;transition:border-color 0.2s;" onfocus="this.style.borderColor='var(--cyan)'" onblur="this.style.borderColor='rgba(10,22,40,0.15)'">
            </div>
            <div>
              <label style="font-size:0.8rem;font-weight:600;color:var(--navy);display:block;margin-bottom:6px;text-transform:uppercase;letter-spacing:0.04em;">Keperluan</label>
              <select name="subject" style="width:100%;padding:12px 14px;border:1.5px solid rgba(10,22,40,0.15);border-radius:6px;font-family:'Barlow',sans-serif;font-size:0.9rem;outline:none;background:white;color:var(--text-dark);">
                <option value="Pemesanan Tiket">Pemesanan Tiket</option>
                <option value="Charter/Sewa Bus">Charter / Sewa Bus</option>
                <option value="Pertanyaan K3">Pertanyaan Seputar K3</option>
                <option value="Kerjasama Korporat">Kerjasama Korporat</option>
                <option value="Pengaduan">Pengaduan / Keluhan</option>
                <option value="Lainnya">Lainnya</option>
              </select>
            </div>
          </div>
          <div>
            <label style="font-size:0.8rem;font-weight:600;color:var(--navy);display:block;margin-bottom:6px;text-transform:uppercase;letter-spacing:0.04em;">Pesan *</label>
            <textarea name="message" rows="5" placeholder="Tuliskan pesan, pertanyaan, atau kebutuhan Anda di sini..." style="width:100%;padding:12px 14px;border:1.5px solid rgba(10,22,40,0.15);border-radius:6px;font-family:'Barlow',sans-serif;font-size:0.9rem;outline:none;resize:vertical;transition:border-color 0.2s;" onfocus="this.style.borderColor='var(--cyan)'" onblur="this.style.borderColor='rgba(10,22,40,0.15)'"><?= htmlspecialchars($_POST['message'] ?? '') ?></textarea>
          </div>
          <button type="submit" class="btn btn-primary" style="align-self:flex-start;">
            <svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><line x1="22" y1="2" x2="11" y2="13"/><polygon points="22 2 15 22 11 13 2 9 22 2"/></svg>
            Kirim Pesan
          </button>
        </form>
        <?php endif; ?>
      </div>

      <!-- Info + Map placeholder -->
      <div>
        <h2 class="section-title">Lokasi <span>Kami</span></h2>
        <p style="color:var(--text-mid);margin-top:10px;margin-bottom:24px;">Kunjungi kantor pusat dan pool bus kami di Malang untuk informasi lebih lanjut.</p>

        <!-- Map placeholder -->
        <div style="background:var(--navy);border-radius:12px;overflow:hidden;margin-bottom:20px;">
          <div style="background:linear-gradient(135deg,var(--navy),var(--navy-light));padding:40px;text-align:center;min-height:220px;display:flex;flex-direction:column;align-items:center;justify-content:center;gap:12px;border:2px solid rgba(0,180,216,0.2);border-radius:12px;">
            <svg width="48" height="48" fill="none" stroke="var(--cyan)" stroke-width="1.5" viewBox="0 0 24 24"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
            <div>
              <div style="font-family:'Barlow Condensed',sans-serif;font-size:1.2rem;color:var(--white);font-weight:700;">PT. Semar Gendut Indonesia</div>
              <div style="font-size:0.85rem;color:rgba(255,255,255,0.6);margin-top:4px;">Jl. Veteran No. 88, Malang, Jawa Timur 65145</div>
            </div>
            <a href="https://maps.google.com/?q=Malang+Jawa+Timur" target="_blank" class="btn btn-primary btn-sm" style="margin-top:8px;">
              <svg width="14" height="14" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
              Buka di Google Maps
            </a>
          </div>
        </div>

        <!-- Quick Links -->
        <div style="background:var(--gray-light);border-radius:10px;padding:20px;">
          <h4 style="font-family:'Barlow Condensed',sans-serif;font-size:1rem;text-transform:uppercase;color:var(--navy);margin-bottom:14px;">Tautan Berguna</h4>
          <?php
          $links = [
            ['📋','Formulir Reservasi Charter','Unduh formulir untuk pemesanan bus charter'],
            ['📖','Panduan Keselamatan Penumpang','Informasi keselamatan yang wajib diketahui'],
            ['🔖','Syarat &amp; Ketentuan Layanan','Kebijakan pemesanan dan pembatalan'],
            ['📊','Laporan K3 Tahunan','Rekam jejak keselamatan dan statistik insiden'],
          ];
          foreach ($links as $l): ?>
          <div style="display:flex;align-items:center;justify-content:space-between;padding:10px 0;border-bottom:1px solid rgba(10,22,40,0.07);">
            <div style="display:flex;align-items:center;gap:10px;">
              <span style="font-size:1.1rem;"><?=$l[0]?></span>
              <div>
                <div style="font-size:0.875rem;color:var(--navy);font-weight:600;"><?=$l[1]?></div>
                <div style="font-size:0.75rem;color:var(--text-mid);"><?=$l[2]?></div>
              </div>
            </div>
            <svg width="16" height="16" fill="none" stroke="var(--cyan)" stroke-width="2" viewBox="0 0 24 24"><polyline points="9 18 15 12 9 6"/></svg>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</section>

<?php require_once '../includes/footer.php'; ?>
