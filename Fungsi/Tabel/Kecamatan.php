<?php

function ambilkecamatan($where = "" ){
    $nilai = database_select_daftar("SELECT * FROM kecamatan {$where}");
    return $nilai;
}