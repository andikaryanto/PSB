<?php
/**
 * alamat url aplikasi, ganti sesuai direktori anda ex: http://localhost/Direktori_Anda/
 */
$url = "http://localhost:8889/PSB/";

/**
 * digunakan untuk generate QR Code
 */
$kuncirahasia = "mlatipsb";

/**
 * setting database 
 */
$db['default'] = array(
    'host' => 'localhost',
    'user' => 'root',
    'password' => '',
    'dbname' => 'psb',
    'port' => '',
    'charset' => ''
);

/**
 * format no registrasi PSB
 */
$reg['prefix'] = "REG";
$reg['sekuens'] = "0000"; // 4 digit nomor setelah REG, ganti sesuai keinginan anda

/**
 * qr code name regiatrasi
 */
$qrcode['registrasi'] = "RegistQrCode.jpg";