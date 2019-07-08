<?php

$load = [
    'Database' => [ 'Config', 'Koneksi' ],
    'Fungsi/Tabel' => ['Peserta', 'Orangtua', 'Nilaiujian', 'Prestasi'],
    'Fungsi/Global' => ['QR', 'Encrypt']
];

/**
 * include smua file yang d butuhkan
 */

include APP_PATH."3rdParty/phpqrcode/qrlib.php";
include APP_PATH."3rdParty/fpdf/fpdf.php";
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