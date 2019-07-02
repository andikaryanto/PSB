<?php

$load = [
    'Database' => [ 'Koneksi' ]
];

foreach($load as $key => $value){
    foreach ($value as $v){
        // echo APP_PATH.$key."\\".$v.".php";
        include APP_PATH.$key."\\".$v.".php";

    }
}

include APP_PATH.$_SERVER['PATH_INFO'];