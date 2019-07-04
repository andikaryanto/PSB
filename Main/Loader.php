<?php

$load = [
    'Database' => [ 'Config', 'Koneksi' ],
    'Fungsi' => ['Peserta', 'Orangtua', 'Nilaiujian', 'Prestasi']
];

foreach($load as $key => $value){
    foreach ($value as $v){
        // echo APP_PATH.$key."\\".$v.".php";
        include APP_PATH.$key."\\".$v.".php";

    }
}

if($_SERVER['PATH_INFO'] != "/")
    include APP_PATH.$_SERVER['PATH_INFO'];
    
mysqli_close($conn);