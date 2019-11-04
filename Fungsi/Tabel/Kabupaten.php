<?php
function ambilkabupaten($where = "" ){
    $nilai = database_select_daftar("SELECT * FROM kabupaten {$where}");
    return $nilai;
}