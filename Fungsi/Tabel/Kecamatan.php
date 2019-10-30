<?php

function ambilkecamatan($where = "" ){
    $nilai = database_select("SELECT * FROM kecamatan {$where}");
    return $nilai;
}