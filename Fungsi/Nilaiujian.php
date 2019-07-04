<?php

function ambilnilaiujian($idpeserta){
    $nilai = database_select("SELECT * FROM nilaiujian where Peserta_id = {$idpeserta}");
    return $nilai;
}

function simpannilaiujian($idpeserta, $idmapel, $nilai){
        return database_simpan("INSERT INTO nilaiujian VALUES (null, {$idpeserta},{$idmapel}, {$nilai}");
        
}
?>