<?php

function ambilnilaiujian($where = "" ){
    $nilai = database_select("SELECT * FROM nilaiujian {$where}");
    return $nilai;
}

function simpannilaiujian($idpeserta, $idmapel, $nilai){
        $nilai = str_replace(",", ".", $nilai);
        $mapel = ambilnilaiujian("WHERE Peserta_Id = {$idpeserta} AND Mapel_Id = {$idmapel}");
        if($mapel){
            database_query("UPDATE nilaiujian SET Nilai = {$nilai} WHERE WHERE Peserta_Id = {$idpeserta} AND Mapel_Id = {$idmapel}");
            return $mapel['Mapel_Id'];
        }
        return database_simpan("INSERT INTO nilaiujian VALUES (null, {$idpeserta}, {$idmapel}, {$nilai})");
        
}
?>