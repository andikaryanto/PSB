<?php

function ambiltahunajaran($where = ""){
    $peserta = database_select_daftar("SELECT * FROM tahunajaran {$where}");
    return $peserta;
}
    
function ambilhanyatahunajaran($where = ""){
    $pengguna = database_select("SELECT * FROM tahunajaran {$where}");
    return $pengguna;
}

function simpantahunajaran($nama, $deskripsi, $tahun, $aktif){
        if($aktif == 1){
            nonaktiftahunajaran();
        }
        return database_simpan("INSERT INTO tahunajaran VALUES (null, '{$nama}','{$deskripsi}', '{$tahun}',  {$aktif})");
        
}

function updatetahunajaran($id, $nama, $deskripsi, $tahun, $aktif){
    if($aktif == 1){
        nonaktiftahunajaran();
    }
    return database_query("UPDATE tahunajaran set Nama = '{$nama}', Deskripsi = '{$deskripsi}', Tahun = '{$tahun}', Aktif = {$aktif} WHERE Id = {$id}");
}

function deletetahunajaran($id){
    database_query("DELETE FROM tahunajaran WHERE Id = {$id}");
}


function nonaktiftahunajaran(){
        database_query("UPDATE tahunajaran set Aktif = 0");
}

?>