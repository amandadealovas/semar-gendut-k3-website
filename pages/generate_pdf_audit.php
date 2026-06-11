<?php
require_once '../vendor/autoload.php';

use Dompdf\Dompdf;
use Dompdf\Options;

$audit_metadata = [
    'judul'    => 'Check list Penerapan SMK3 di PT Semar Gendut Indonesia (PP No. 50 2012)',
    'tingkat'  => 'Transisi (122 Kriteria Kepatuhan)',
    'regulasi' => 'Peraturan Pemerintah (PP) Nomor 50 Tahun 2012',
    'auditi'   => 'PT Semar Gendut Indonesia',
    'auditor'  => 'Tim Audit Internal PT Semar Gendut Indonesia'
];

// DATA SINKRONISASI 12 ELEMEN UTAMA LAPORAN KELOMPOK 5
$audit_elements = [
    '1. Pembangunan dan Pemeliharaan Komitmen' => [
        ['1.1.1', 'Terdapat kebijakan K3 yang tertulis bertanggal, ditandatangani oleh pengusaha atau pengurus, secara jelas menyatakan tujuan dan sasaran K3 serta komitmen terhadap peningkatan K3.', 'V', 'Sesuai dengan kebijakan, program, SOP, dan implementasi SMK3 PT Semar Gendut Indonesia.'],
        ['1.1.2', 'Kebijakan disusun oleh pengusaha dan/atau pengurus setelah melali proses konsultasi dengan wakil tenaga kerja.', 'V', 'Sesuai dengan kebijakan, program, SOP, dan implementasi SMK3 PT Semar Gendut Indonesia.'],
        ['1.1.3', 'Perusahaan mengkomunikasikan, kebijakan, K3 kepada seluruh tenaga kerja, tamu, kontraktor, pelanggan, dan pemasok dengan tata cara yang tepat.', 'V', 'Kebijakan K3 telah terpasang di papan informasi pool utama, workshop, dan disosialisasikan via web.'],
        ['1.4.3', 'Perusahaan telah membentuk P2K3 sesuai dengan peraturan perundang-undangan.', 'V', 'P2K3 SGI resmi dibentuk dan disahkan oleh Disnaker setempat.']
    ],
    '2. Pembuatan dan Pendokumentasian Rencana K3' => [
        ['2.1.1', 'Terdapat prosedur terdokumentasi untuk identifikasi potensi bahaya, penelitian, dan pengendalian risiko K3.', 'V', 'Prosedur HIRADC tercantum lengkap di BAB II Rencana K3 Perusahaan.'],
        ['2.2.1', 'Manual SMK3 meliputi kebijakan, tujuan, rencana, prosedur SMK3, instruksi kerja, formulir, catatan dan tanggung jawab serta wewenang tanggung jawab K3 untuk semua tingkatan dalam perusahaan.', 'V', 'Sesuai dengan kebijakan, program, SOP, dan i mplementasi SMK3 PT Semar Gendut Indonesia.']
    ],
    '3. Pengendalian Perancangan dan Peninjauan Kontrak' => [
        ['3.1.1', 'Prosedur yang terdokumentasi mempertimbangkan identifikasi potensi bahaya, penilaian, dan pengendalian risiko yang dilakukan pada tahap perancangan dan modifikasi.', 'V', 'Sesuai dengan kebijakan, program, SOP, dan implementasi SMK3 PT Semar Gendut Indonesia.']
    ],
    '4. Pengendalian Dokumen' => [
        ['4.1.1', 'Dokumen K3 Mempunyai identifikasi status, wewenang, tanggal pengeluaran dan tanggal modifikasi.', 'V', 'Sesuai dengan kebijakan, program, SOP, dan implementasi SMK3 PT Semar Gendut Indonesia.']
    ],
    '5. Penilaian dan Pengendalian Produk' => [
        ['5.1.1', 'Terdapat prosedur yang terdokumentasi yang dapat menjamin bahwa spesifikasi teknik dan informasi lain yang relevan dengan K3 telah diperiksa sebelum keputusan untuk membeli.', 'V', 'Sesuai dengan kebijakan, program, SOP, dan air pemeriksaan pra-pembelian barang logistik.']
    ],
    '6. Keamanan Bekerja Berdasarkan SMK3' => [
        ['6.1.7', 'Alat pelindung diri disediakan sesuai kebutuhan dan digunakan secara benar serta selalu dipelihara dalam kondisi layak pakai.', 'V', 'Penyediaan APD mekanik dan rompi reflektif awak bus terpenuhi 100% dan terawat.'],
        ['6.5.8', 'Apabila diperlukan dilakukan penerapan sistem penguncian pengoperasian (lock out system) untuk mencegah agar sarana produksi tidak dihidupkan sebelum saatnya.', 'V', 'SOP LOTO wajib diterapkan saat perbaikan mekanikal berat di bawah kolong bus (pit service).'],
        ['6.7.1', 'Keadaan darurat yang potensial di dalam dan/atau di luar tempat kerja telah diidentifikasi dan prosedur keadaan darurat telah didokumentasikan dan diinformasikan agar diketahui oleh seluruh orang yang ada di tempat kerja.', 'V', 'Sesuai dengan kebijakan, program, SOP, dan implementasi SMK3 PT Semar Gendut Indonesia.']
    ],
    '7. Standar Pemantauan' => [
        ['7.2.1', 'Pemantauan/ pengukuran lingkungan kerja dilaksanakan secara teratur dan hasilnya didokumentasikan, dipelihara dan digunakan untuk penilaian dan pengendalian risiko.', 'V', 'Pengukuran kebisingan, getaran forklift, dan kadar lux cahaya tanggap kerja dilakukan tiap 6 bulan sekali.'],
        ['7.4.1', 'Dilakukan pemantauan kesehatan tenaga kerja yang bekerja pada tempat kerja yang mengandung potensi bahaya tinggi sesuai dengan peraturan perundang-undangan.', 'V', 'Sesuai dengan kebijakan, program, SOP, dan i mplementasi SMK3 PT Semar Gendut Indonesia.']
    ],
    '8. Pelaporan dan Perbaikan Kekurangan' => [
        ['8.1.1', 'Terdapat prosedur pelaporan bahaya yang berhubungan dengan K3 dan prosedur ini diketahui oleh tenaga kerja.', 'V', 'Alur pelaporan insiden & near miss wajib dilaporkan dalam waktu maksimal 1x24 jam.']
    ],
    '9. Pengelolaan Material dan Perpindahannya' => [
        ['9.3.1', 'Perusahaan telah mendokumentasikan dan menerapkan prosedur mengenai penyimpanan, penanganan dan pemindahan BKB sesuai dengan persyaratan peraturan perundang-undangan, standar dan pedoman teknis yang relevan.', 'V', 'Sesuai dengan kebijakan, program, SOP, dan implementasi SMK3 PT Semar Gendut Indonesia.']
    ],
    '10. Pengumpulan Dan Penggunaan Data' => [
        ['10.1.1', 'Pengusaha atau pengurus telah mendokumentasikan dan menerapkan prosedur pelaksanaan identifikasi, pengumpulan, pengarsipan, pemeliharaan, penyimpanan dan penggantian catatan K3.', 'V', 'Sesuai dengan kebijakan, program, SOP, dan penyimpanan berkas kontrol arsip K3.']
    ],
    '11. Pemeriksaan SMK3' => [
        ['11.1.1', 'Audit internal SMK3 yang terjadwal dilaksanakan untuk memeriksa kesesuaian kegiatan perencanaan dan untuk menentukan efektifitas kegiatan tersebut.', 'V', 'Audit internal SMK3 dijadwalkan secara berkala minimal 2 kali dalam satu tahun.']
    ],
    '12. Pengembangan Keterampilan dan Kemampuan' => [
        ['12.3.2', 'Pelatihan K3 diberikan kepada tenaga kerja termasuk tenaga kerja baru dan yang dipindahkan agar mereka dapat melaksanakan tugasnya secara aman.', 'V', 'Terselenggara terstruktur melalui program orientasi lapangan kerja (Safety Induction) bagi mekanik dan pramuniaga baru.'],
        ['12.4.1', 'Terdapat prosedur yang menetapkan persyaratan untuk memberikan taklimat (briefing) kepada pengunjung dan mitra kerja guna menjamin K3.', 'V', 'SOP taklimat keselamatan aktif dijalankan oleh petugas sekuriti di pos gerbang masuk pool utama.'],
        ['12.5.1', 'Perusahaan mempunyai sistem yang menjamin kepatuhan terhadap persyaratan lisensi atau kualifikasi sesuai dengan peraturan perundangan untuk melaksanakan tugas khusus, melaksanakan pekerjaan atau mengoperasikan peralatan.', 'V', 'Seluruh pengemudi wajib memiliki SIM BI/BII Umum aktif dan operator forklift memiliki SIO resmi Disnaker.']
    ]
];

date_default_timezone_set('Asia/Jakarta');
$tanggal_cetak = date('d F Y - H:i');

$options = new Options();
$options->set('isHtml5ParserEnabled', true);
$options->set('isRemoteEnabled', true); 
$dompdf = new Dompdf($options);

$html = '
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Checklist Penerapan SMK3 PT SGI</title>
    <style>
        @page {
            margin: 20px 25px;
        }
        body {
            font-family: "Helvetica", "Arial", sans-serif;
            color: #1a2433;
            line-height: 1.4;
            font-size: 10px;
        }
        .kop-surat {
            text-align: center;
            border-bottom: 2px solid #0a1628;
            padding-bottom: 10px;
            margin-bottom: 15px;
        }
        .kop-surat h1 {
            font-size: 20px;
            font-weight: bold;
            color: #0a1628;
            margin: 0 0 3px 0;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        .text-cyan {
            color: #00b4d8;
        }
        .kop-surat p {
            margin: 2px 0;
            font-size: 9.5px;
            color: #4a5568;
        }
        .judul-dokumen {
            text-align: center;
            font-size: 13px;
            font-weight: bold;
            color: #0a1628;
            margin-top: 10px;
            margin-bottom: 2px;
            text-transform: uppercase;
        }
        .tanggal {
            text-align: right;
            font-style: italic;
            color: #8898aa;
            margin-bottom: 12px;
            font-size: 8.5px;
        }
        .meta-box {
            background-color: #f4f6f9;
            border: 1px solid #e2e8f0;
            border-radius: 6px;
            padding: 10px 15px;
            margin-bottom: 15px;
        }
        .meta-box table {
            width: 100%;
        }
        .meta-box td {
            padding: 3px 4px;
            vertical-align: top;
            font-size: 9.5px;
            color: #1a2433;
        }
        .meta-label {
            font-weight: bold;
            color: #0a1628;
            width: 140px;
        }
        .element-header {
            background-color: #f4f6f9;
            color: #0a1628;
            font-weight: bold;
            font-size: 10px;
            padding: 8px 10px;
            margin-top: 20px;
            margin-bottom: 6px;
            border-left: 4px solid #00b4d8;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        table.audit-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 15px;
        }
        table.audit-table th {
            background-color: #0a1628;
            color: #ffffff;
            text-align: left;
            padding: 6px 8px;
            font-weight: bold;
            font-size: 9px;
            text-transform: uppercase;
            border: 1px solid #0a1628;
        }
        table.audit-table td {
            padding: 6px 8px;
            border: 1px solid #e2e8f0;
            vertical-align: top;
            font-size: 8.5px;
            color: #334155;
            line-height: 1.35;
        }
        .center {
            text-align: center;
        }
        .kode {
            font-weight: bold;
            color: #0a1628;
        }
        .status-badge {
            display: inline-block;
            background-color: #e8f8f0;
            color: #2ecc71;
            padding: 2px 6px;
            border-radius: 4px;
            font-weight: bold;
            font-size: 8px;
            border: 1px solid rgba(46,204,113,0.15);
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="kop-surat">
        <h1>PT. SEMAR GENDUT <span class="text-cyan">INDONESIA</span></h1>
        <p>Jl. Raya Transportasi No. 123, Kota Malang, Jawa Timur</p>
        <p>Telp: (0341) 123-456 | Email: info@semargendut.co.id</p>
    </div>

    <div class="judul-dokumen">' . $audit_metadata['judul'] . '</div>
    <div class="tanggal">Dicetak pada: ' . $tanggal_cetak . ' WIB</div>

    <div class="meta-box">
        <table cellspacing="0" cellpadding="0" style="width:100%;">
            <tr>
                <td class="meta-label">Auditi</td>
                <td style="width:10px;">:</td>
                <td>' . $audit_metadata['auditi'] . '</td>
            </tr>
            <tr>
                <td class="meta-label">Auditor</td>
                <td>:</td>
                <td>' . $audit_metadata['auditor'] . '</td>
            </tr>
            <tr>
                <td class="meta-label">Tingkat Evaluasi</td>
                <td>:</td>
                <td>' . $audit_metadata['tingkat'] . '</td>
            </tr>
            <tr>
                <td class="meta-label">Dasar Regulasi</td>
                <td>:</td>
                <td>' . $audit_metadata['regulasi'] . '</td>
            </tr>
        </table>
    </div>';

    // PENCETAKAN MULTI-TABLE BERDASARKAN ELEMEN SECARA OTOMATIS
    foreach ($audit_elements as $element_name => $criteria_rows) {
        $html .= '<div class="element-header">' . $element_name . '</div>';
        $html .= '<table class="audit-table">
            <thead>
                <tr>
                    <th style="width: 12%; text-align: center;">No. Kriteria</th>
                    <th style="width: 48%;">Kriteria Audit SMK3</th>
                    <th style="width: 12%; text-align: center;">Penilaian</th>
                    <th style="width: 28%;">Keterangan</th>
                </tr>
            </thead>
            <tbody>';
            foreach ($criteria_rows as $row) {
                $html .= '
                <tr>
                    <td class="center kode">' . $row[0] . '</td>
                    <td>' . $row[1] . '</td>
                    <td class="center"><span class="status-badge">✔ SESUAI</span></td>
                    <td style="color: #475569; font-style: italic;">' . $row[3] . '</td>
                </tr>';
            }
        $html .= '</tbody>
        </table>';
    }

$html .= '
</body>
</html>';

$dompdf->loadHtml($html);
$dompdf->setPaper('A4', 'landscape'); // Tetap Landscape agar tata letak sub-tabel 12 elemen longgar dan presisi
$dompdf->render();

ob_clean();
$dompdf->stream("Laporan_Checklist_Audit_SMK3.pdf", array("Attachment" => false));
?>