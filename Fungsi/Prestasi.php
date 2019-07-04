<?php

function ambilprestasi($idpeserta){
    $nilai = database_select("SELECT * FROM prestasi where Peserta_id = {$idpeserta}");
    return $nilai;
}

function simpanprestasi($idpeserta, $namaprestasi, $nilai){
        return database_simpan("INSERT INTO prestasi VALUES (null, {$idpeserta},{$namaprestasi}, {$nilai}");
        
}
?>