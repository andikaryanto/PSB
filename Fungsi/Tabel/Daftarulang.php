<?php 
function simpandaftarulang($idpeserta, $selected){
    $tahunajaran = ambilhanyatahunajaran("WHERE Aktif = 1");
    $daftar = ambildaftarulang("AND Peserta_Id = {$idpeserta}");
    if($selected == "true"){
        if($daftar){
            // return false;
            database_query("DELETE FROM daftarulang WHERE Peserta_Id = {$idpeserta}");
            database_query("DELETE FROM siswa WHERE Peserta_Id = {$idpeserta}");
        }
        database_simpan("INSERT INTO daftarulang VALUES (null, {$idpeserta}, {$tahunajaran['Id']})");
        database_simpan("INSERT INTO siswa VALUES (null, {$idpeserta}, {$tahunajaran['Id']})");
        return true;
    } else {
        database_query("DELETE FROM daftarulang WHERE Peserta_Id = $idpeserta");
        database_query("DELETE FROM siswa WHERE Peserta_Id = {$idpeserta}");
        return true;
    }
}

function ambildaftarulang($where = ""){
    $tahunajaran = ambilhanyatahunajaran("WHERE Aktif = 1");
    $qry = "SELECT a.NoDaftar, a.NISN, a.NamaLengkap, a.Alamat 
    FROM peserta a
    INNER JOIN daftarulang b on b.Peserta_Id = a.Id
    WHERE a.Tahunajaran_Id = {$tahunajaran['Id']} {$where}";

    return database_select_daftar($qry);
}


function ambildafhanyatarulang($where = ""){
    $tahunajaran = ambilhanyatahunajaran("WHERE Aktif = 1");
    $qry = "SELECT a.NoDaftar, a.NISN, a.NamaLengkap, a.Alamat 
    FROM peserta a
    INNER JOIN daftarulang b on b.Peserta_Id = a.Id
    WHERE a.Tahunajaran_Id = {$tahunajaran['Id']} {$where}";

    return database_select($qry);
}
?>