<?php

/**
 * include smua file yang d butuhkan
 */
include APP_PATH."3rdParty/phpqrcode/qrlib.php";
// include APP_PATH."3rdParty/fpdf/fpdf.php";
include APP_PATH."3rdParty/TCPDF/tcpdf.php";

$load = [
    'Database' => [ 'Config', 'Koneksi' ],
    'Fungsi/Tabel' => ['Peserta', 'Orangtua', 'Nilaiujian', 'Prestasi', 'Pengguna', 'Tahunajaran', 'Pengaturan'],
    'Fungsi/Global' => ['QR', 'Encrypt', 'Helper'],
    // 'Classes' => ['PDF']
];


foreach($load as $key => $value){
    foreach ($value as $v){
        // echo APP_PATH.$key."\\".$v.".php";
        include APP_PATH.$key."\\".$v.".php";

    }
}

/**
 * load QR lib
 */

/**
 * load page
 */
if($_SERVER['PATH_INFO'] != "/")
    include APP_PATH.$_SERVER['PATH_INFO'];
    
mysqli_close($conn);