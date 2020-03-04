<?php

function ambilprestasi($where){
    $nilai = database_select("SELECT * FROM prestasi {$where}");
    return $nilai;
}

function simpanprestasi($idpeserta, $namaprestasi, $nilai){

        $prestasi = ambilprestasi("WHERE Peserta_Id = {$idpeserta}");
        $valnilai = convertprestasi($nilai);
        if($prestasi){
            database_query("UPDATE prestasi SET NamaPrestasi = '{$namaprestasi}',
                                                Nilai = {$valnilai}
                            ");
            return $prestasi['Prestasi_Id'];
        }
        return database_simpan("INSERT INTO prestasi VALUES (null, {$idpeserta},'{$namaprestasi}', {$valnilai})");
        
}

function convertprestasi($nilai){
    if($nilai == 1)
        return 3;
    elseif($nilai == 2)
        return 2;
    else 
        return 1;
}
?>