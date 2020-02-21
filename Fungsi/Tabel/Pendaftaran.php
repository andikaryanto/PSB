<?php
function ambilpendaftaran($where = "" ){
    $nilai = database_select("SELECT * FROM pendaftaran {$where}");
    return $nilai;
}

function simpanpendaftaran($idpeserta){
        $mapel = ambilpendaftaran("WHERE Peserta_Id = {$idpeserta} ");
        if($mapel){
            database_query("UPDATE pendaftaran SET Nilai = {$nilai} WHERE  Peserta_Id = {$idpeserta} ");
            return $mapel['Pendaftaran_Id'];
        }

        return database_simpan("INSERT INTO pendaftaran VALUES (null,  NOW(), {$idpeserta})");
        
}
?>