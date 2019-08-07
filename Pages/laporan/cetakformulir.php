<?php

$mpdf = new \Mpdf\Mpdf();

$pesertaid = $_GET['pesertaid'];
$peserta = ambilhanyapeserta("WHERE Id=$pesertaid");
// echo json_encode($peserta);

$mpdf->WriteHTML('
<div style="text-align: Center;">
    PENERIMAAN SISWA BARU SMP MUHAMMADIYAH 1 MLATI
</div>

<div style="text-align: Center;">
Jl. Magelang Km 7,5 Sendangadi, Mlati, Sleman, Yogyakarta
</div>
<div style="text-align: Center;">
Telp. ( 0274 ) 869879
</div>
<hr>');


//header
$mpdf->WriteHTML('<div style="text-align: Center;">
FORMULIR BUKTI REGISTRASI
</div>');

//content
$ttl = $peserta['TempatLahir'].", ".$peserta['TglLahir'];
$mpdf->WriteHTML("<table style='autosize:2.4; padding:30px 0;'>
    <tr>
        <td style='padding:10px'>No. Pendaftaran</td>
        <td>:</td>
        <td>{$peserta['NoDaftar']}</td>
    </tr>
    <tr>
        <td style='padding:10px'>Nama Lengkap</td>
        <td>:</td>
        <td>{$peserta['NamaLengkap']}</td>
    </tr>
    
    <tr>
        <td style='padding:10px'>Tempat/Tgl Lahir</td>
        <td>:</td>
        <td>{$ttl}</td>
    </tr>
    
    <tr>
        <td style='padding:10px'>Jenis Kelamin</td>
        <td>:</td>
        <td>{$peserta['JenisKelamin']}</td>
    </tr>
    
    <tr>
        <td style='padding:10px'>Agama</td>
        <td>:</td>
        <td>{$peserta['Agama']}</td>
    </tr>
    
    <tr>
        <td style='padding:10px'>Alamat</td>
        <td>:</td>
        <td>{$peserta['Alamat']}</td>
    </tr>
    
    <tr>
        <td style='padding:10px'>Asal Sekolah</td>
        <td>:</td>
        <td>{$peserta['AsalSekolah']}</td>
    </tr>
</table>");

//header
$sekarang = date("d-m-Y");
$mpdf->WriteHTML("<div style='text-align: Right;>
{$peserta['TempatLahir']}, {$sekarang}
</div>");


$mpdf->WriteHTML("<table style='autosize:2.4; padding:30px 0;'>
    <tr >
        <td style='padding:10px 50% 10px 10px'>Orang Tua</td>
        <td>Calon Siswa</td>
    </tr>
    <tr >
        <td style='padding:50px 50% 10px 10px'>(................)</td>
        <td style='padding:50px 0 10px 0px'>(......................)</td>
    </tr>
    <tr >
        <td style='padding:10px 50% 10px 10px'>Nama Terang</td>
        <td>Nama Terang</td>
    </tr>
    
    
</table>");


$mpdf->WriteHTML('
<div style="text-align: Left;">
    *Syarat berkas yang harus d penuhi
</div>

<div style="text-align: Left;">
1. Foto Kopi Iajzah yang sudah dilegalisir
</div>
<div style="text-align: left;">
2. Foto Kopi SKHUN yang sudah dilegalisir
</div>
<div style="text-align: left;">
3. Pas Foto
</div>');





$mpdf->Output();
