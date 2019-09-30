<?php 
function simpansiswa($idpeserta){
    $tahunajaran = ambilhanyatahunajaran("WHERE Aktif = 1");
    $siswa = ambilsiswa("WHERE Peserta_Id = {$idpeserta}");
    if($siswa){
        return false;
        // return $siswa['Id'];
    }

    database_simpan("INSERT INTO siswa VALUES (null,  $idpeserta, {$tahunajaran})");
    return true;
}
?>