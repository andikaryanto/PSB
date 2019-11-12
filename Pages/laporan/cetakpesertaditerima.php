<?php

$mpdf = new \Mpdf\Mpdf();
// echo json_encode($peserta);
$peserta = pesertaditerima();
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
foreach ($peserta as $p) {
    $detail .=
        "<tr >
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
}

$content = "<table style='autosize:2.4; margin:30px 0; border:1x solid;'>
<tr >
    <td style='font-weight:bold;padding:0 5px; border:1x solid;'>No. Daftar</td>
    <td style='font-weight:bold;padding:0 5px; border:1x solid;'>NISN</td>
    <td style='font-weight:bold;padding:0 5px; border:1x solid;'>Nama Lengkap</td>
    <td style='font-weight:bold;padding:0 5px; border:1x solid;'>Jenis Kelamin</td>
    <td style='font-weight:bold;padding:0 5px; border:1x solid;'>Tempat Lahir</td>
    <td style='font-weight:bold;padding:0 5px; border:1x solid;'>Agama</td>
    <td style='font-weight:bold;padding:0 5px; border:1x solid;'>Alamat</td>
    <td style='font-weight:bold;padding:0 5px; border:1x solid;'>Asal Sekolah</td>
</tr>
" . $detail . "


</table>";


//header
$mpdf->WriteHTML('<div style="text-align: Center;">
PESERTA DITERIMA
</div>');

//content

$mpdf->WriteHTML($content);
$mpdf->Output();
