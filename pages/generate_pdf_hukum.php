<?php
require_once '../vendor/autoload.php';

use Dompdf\Dompdf;
use Dompdf\Options;

$laws = [
    ['UU No.1 Tahun 1970', 'Keselamatan Kerja', 'Undang-undang induk keselamatan kerja yang mewajibkan setiap perusahaan menerapkan standar K3 untuk melindungi tenaga kerja.'],
    ['UU No.22 Tahun 2009', 'Lalu Lintas & Angkutan Jalan', 'Mengatur keselamatan kendaraan bermotor, batas kecepatan, izin mengemudi, tanggung jawab penyelenggara angkutan.'],
    ['Permenaker K3', 'Keselamatan & Kesehatan Kerja', 'Peraturan Menteri Ketenagakerjaan sebagai payung perlindungan pekerja di semua sektor industri termasuk transportasi.'],
    ['Permenhub PM 14/2016', 'K3 Bidang Transportasi', 'Secara khusus menegaskan penerapan K3 di sektor transportasi untuk meminimalisir risiko kecelakaan kerja dan operasional.'],
    ['PP No.50 Tahun 2012', 'SMK3 (Sistem Manajemen K3)', 'Peraturan pemerintah yang mewajibkan penerapan Sistem Manajemen K3 bagi perusahaan dengan risiko tinggi.'],
    ['Kepmenaker No.187/1999', 'Pengendalian Bahan Kimia Berbahaya', 'Mengatur penyimpanan dan penanganan B3 di tempat kerja, khususnya relevan untuk area BBM dan bahan kimia bengkel.'],
];

date_default_timezone_set('Asia/Jakarta');
$tanggal_cetak = date('d F Y - H:i');

$css_content = file_get_contents('../assets/css/style_pdf.css');

$html = '
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Laporan Landasan Hukum K3</title>
    <style>
        /* Sisipkan isi file CSS ke sini secara otomatis */
        ' . $css_content . '
    </style>
</head>
<body>
    <div class="kop-surat">
        <h1>PT. SEMAR GENDUT <span class="text-cyan">INDONESIA</span></h1>
        <p>Jl. Raya Transportasi No. 123, Kota Malang, Jawa Timur</p>
        <p>Telp: (0341) 123-456 | Email: info@semargendut.co.id</p>
    </div>

    <div class="judul-dokumen">Daftar Landasan Hukum K3</div>
    <div class="tanggal">Dicetak pada: ' . $tanggal_cetak . ' WIB</div>

    <table>
        <thead>
            <tr>
                <th>Peraturan / Undang-Undang</th>
                <th>Tentang</th>
                <th>Deskripsi</th>
            </tr>
        </thead>
        <tbody>';

        foreach ($laws as $law) {
            $html .= '
            <tr>
                <td class="kode">' . $law[0] . '</td>
                <td class="nama">' . $law[1] . '</td>
                <td>' . $law[2] . '</td>
            </tr>';
        }

$html .= '
        </tbody>
    </table>
</body>
</html>
';

// 4. Render PDF
$options = new Options();
$options->set('isHtml5ParserEnabled', true);
$dompdf = new Dompdf($options);
$dompdf->loadHtml($html);
$dompdf->setPaper('A4', 'portrait');
$dompdf->render();
ob_clean();
$dompdf->stream("Landasan_Hukum_K3_SGI.pdf", ["Attachment" => 0]);
// echo $html; 