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
        database_simpan("INSERT INTO daftarulang VALUES (null, {$idpeserta}, {$tahunajaran['Tahunajaran_Id']})");
        database_simpan("INSERT INTO siswa VALUES (null, {$idpeserta}, {$tahunajaran['Tahunajaran_Id']})");
        return true;
    } else {
        database_query("DELETE FROM daftarulang WHERE Peserta_Id = $idpeserta");
        database_query("DELETE FROM siswa WHERE Peserta_Id = {$idpeserta}");
        return true;
    }
}

function ambildaftarulang($where = ""){
    $tahunajaran = ambilhanyatahunajaran("WHERE Aktif = 1");
    $qry = "SELECT a.NoDaftar, a.NISN, a.NamaLengkap, a.Alamat , CASE WHEN b.Peserta_Id IS NOT NULL THEN 1 ELSE 0 END DaftarUlang
    FROM peserta a
    INNER JOIN pengumuman c on a.Peserta_Id = c.Peserta_Id 
    LEFT JOIN daftarulang b on b.Peserta_Id = a.Peserta_Id
    WHERE a.Tahunajaran_Id = {$tahunajaran['Tahunajaran_Id']} {$where}";

    return database_select_daftar($qry);
}


function ambildafhanyatarulang($where = ""){
    $tahunajaran = ambilhanyatahunajaran("WHERE Aktif = 1");
    $qry = "SELECT a.NoDaftar, a.NISN, a.NamaLengkap, a.Alamat , CASE WHEN b.Peserta_Id IS NOT NULL THEN 1 ELSE 0 END DaftarUlang
    FROM peserta a
    INNER JOIN pengumuman c on a.Peserta_Id = c.Peserta_Id 
    LEFT JOIN daftarulang b on b.Peserta_Id = a.Peserta_Id
    WHERE a.Tahunajaran_Id = {$tahunajaran['Tahunajaran_Id']} {$where}";

    return database_select($qry);
}
?>