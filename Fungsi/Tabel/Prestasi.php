<?php

function ambilprestasi($where){
    $nilai = database_select("SELECT * FROM prestasi {$where}");
    return $nilai;
}

function simpanprestasi($idpeserta, $namaprestasi, $nilai){
        $prestasi = ambilprestasi("WHERE Peserta_Id = {$idpeserta}");
        if($prestasi){
            database_query("UPDATE prestasi SET NamaPrestasi = '{$namaprestasi}',
                                                Nilai = {$nilai}
                            ");
            return $prestasi['Id'];
        }
        return database_simpan("INSERT INTO prestasi VALUES (null, {$idpeserta},'{$namaprestasi}', {$nilai})");
        
}
?>