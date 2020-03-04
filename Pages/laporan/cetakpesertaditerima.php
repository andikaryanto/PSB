<?php

$mpdf = new \Mpdf\Mpdf();
// echo json_encode($peserta);
$peserta = pesertaditerima();
$pengaturan = ambilpengaturan();
$mpdf->AddPage('L');
$mpdf->WriteHTML('');
$mpdf->Image('assets/images/logomusati.png', 5, 5, 25, 25, 'jpg', '', true, false);
$mpdf->WriteHTML('
<div style="text-align: Center; margin-top:-50px">
    PENERIMAAN SISWA BARU SMP MUHAMMADIYAH 1 MLATI
</div>

<div style="text-align: Center;">
Jl. Magelang Km 7,5 Sendangadi, Mlati, Sleman, Yogyakarta
</div>
<div style="text-align: Center;">
Telp. ( 0274 ) 869879
</div>
<hr>');

$detail;
$i = 1;
foreach ($peserta as $p) {
    $detail .=
        "<tr >
        <td style='padding:0 5px; border:1x solid;'>{$i}</td>
<td style='padding:0 5px; border:1x solid;'>{$p['NoDaftar']}</td>
<td style='padding:0 5px; border:1x solid;'>{$p['NISN']}</td>
<td style='padding:0 5px; border:1x solid;'>{$p['NamaLengkap']}</td>
<td style='padding:0 5px; border:1x solid;'>{$p['JenisKelamin']}</td>
<td style='padding:0 5px; border:1x solid;'>{$p['TempatLahir']}</td>
<td style='padding:0 5px; border:1x solid;'>{$p['Agama']}</td>
<td style='padding:0 5px; border:1x solid;'>{$p['Alamat']}</td>
<td style='padding:0 5px; border:1x solid;'>{$p['AsalSekolah']}</td>
</tr>
";
$i++;
}

$content = "<table style='autosize:2.4; margin:30px 0; border:1x solid;'>
<tr >
    <td style='font-weight:bold;padding:0 5px; border:1x solid;'>No.</td>
    <td style='font-weight:bold;padding:0 5px; border:1x solid;'>No. Daftar</td>
    <td style='font-weight:bold;padding:0 5px; border:1x solid;'>NISN</td>
    <td style='font-weight:bold;padding:0 5px; border:1x solid;'>Nama Lengkap</td>
    <td style='font-weight:bold;padding:0 5px; border:1x solid;'>Jenis Kelamin</td>
    <td style='font-weight:bold;padding:0 5px; border:1x solid;'>Tempat Lahir</td>
    <td style='font-weight:bold;padding:0 5px; border:1x solid;'>Agama</td>
    <td style='font-weight:bold;padding:0 5px; border:1x solid;'>Alamat Asal</td>
    <td style='font-weight:bold;padding:0 5px; border:1x solid;'>Asal Sekolah</td>
</tr>
" . $detail . "


</table>";


//header
$mpdf->WriteHTML('<div style="text-align: Center;">
PESERTA DITERIMA PENDAFTARAN SELEKSI MASUK
</div>
<div style="text-align: Center;">
TAHUN AJARAN 2019/2020
</div>');

//content

$mpdf->WriteHTML($content);
$mpdf->WriteHTML("<table style='autosize:2.4; padding:30px 0;'>
    <tr >
        <td style='padding:10px 70% 20px 10px'></td>
        <td>Kepala Sekolah</td>
    </tr>
    <tr >
        <td style='padding:50px 70% 20px 10px'></td>
        <td style='padding:50px 0 20px 0px'>{$pengaturan['KepalaSekolah']}</td>
    </tr>
    <tr >
        <td style='padding:5px 70% 20px 10px'></td>
        
    </tr>
    
    
</table>");
$mpdf->Output();
