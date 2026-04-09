# PT. Semar Gendut Indonesia — Website K3

## Struktur Folder

```
sgi/
├── index.php                  ← Halaman Beranda
├── includes/
│   ├── header.php             ← Header & Navbar (reusable)
│   └── footer.php             ← Footer & Scripts (reusable)
├── pages/
│   ├── layanan.php            ← Halaman Layanan
│   ├── k3.php                 ← Halaman K3 (lengkap)
│   ├── tentang.php            ← Halaman Tentang Kami
│   └── kontak.php             ← Halaman Kontak + Form
└── assets/
    ├── css/
    │   └── style.css          ← Stylesheet utama
    ├── js/
    │   └── main.js            ← JavaScript interaksi
    └── images/
        └── favicon.svg        ← Ikon browser

```

## Cara Menjalankan

### Dengan PHP Built-in Server
```bash
cd /path/to/sgi
php -S localhost:8000
```
Buka: http://localhost:8000

### Dengan XAMPP/Laragon
Letakkan folder `sgi/` di dalam `htdocs/` (XAMPP) atau `www/` (Laragon),
lalu akses: http://localhost/sgi/

## Fitur Website

### Halaman Beranda (index.php)
- Hero section dengan animasi counter statistik
- Bagian "Mengapa Memilih SGI"
- Preview 4 layanan utama
- Highlight Komitmen K3 + Tabel APD per divisi
- Preview armada & fitur
- CTA Banner

### Halaman K3 (pages/k3.php)
- APD per divisi (Operasional, Mekanik, Logistik)
- Accordion spesifikasi & cara penggunaan 7 jenis APD
- Safety Map — 4 zona warna internasional
- Fasilitas keselamatan interior bus
- Identifikasi 5 kategori bahaya (Fisik, Kimia, Biologi, Ergonomi, Psikososial)
- Tabel HIRARC lengkap (15 baris risiko)
- Hierarki pengendalian risiko 5 level
- Prosedur darurat 5 langkah
- 6 landasan hukum K3

### Halaman Layanan (pages/layanan.php)
- Detail 5 layanan utama
- Spesifikasi 4 tipe armada
- Keunggulan vs kompetitor

### Halaman Tentang (pages/tentang.php)
- Sejarah perusahaan
- Identitas resmi perusahaan
- Visi & Misi
- Nilai-nilai perusahaan
- Struktur organisasi visual
- Statistik perusahaan

### Halaman Kontak (pages/kontak.php)
- 4 kartu kontak
- Hotline darurat K3
- Form kontak dengan validasi PHP
- Peta lokasi
- Tautan berguna

## Teknologi
- PHP Native (tanpa framework, tanpa database)
- HTML5 + CSS3 (Custom Properties, Grid, Flexbox)
- JavaScript vanilla (accordion, counter, scroll-to-top, mobile menu)
- Google Fonts: Barlow Condensed + Barlow
- Responsif: Mobile, Tablet, Desktop
