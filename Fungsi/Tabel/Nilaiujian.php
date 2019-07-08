<?php

function ambilnilaiujian($where = "" ){
    $nilai = database_select("SELECT * FROM nilaiujian {$where}");
    return $nilai;
}

function simpannilaiujian($idpeserta, $idmapel, $nilai){
        $mapel = ambilnilaiujian("WHERE Peserta_Id = {$idpeserta} AND Mapel_Id = {$idmapel}");
        if($mapel){
            database_query("UPDATE nilaiujian SET Nilai = {$nilai} WHERE WHERE Peserta_Id = {$idpeserta} AND Mapel_Id = {$idmapel}");
            return $mapel['Id'];
        }
        return database_simpan("INSERT INTO nilaiujian VALUES (null, {$idpeserta}, {$idmapel}, {$nilai})");
        
}
?>