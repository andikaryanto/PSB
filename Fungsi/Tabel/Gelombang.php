
<?php

function ambilaktifgelombang(){
    $sekarang = tanggalSekarang();
    // echo $sekarang;
    $result = ambilhanyagelombang("WHERE TanggalMulai <= '$sekarang' AND TanggalSelesai >= '$sekarang'");
    if($result)
        return $result;
    return null;
}

function ambilhanyagelombang($where = ""){ 
    $pengguna = database_select("SELECT * FROM gelombang {$where}");
    return $pengguna;
}


function ambilgelombang(){

    $qry = "SELECT * FROM gelombang";
    $result = database_select_daftar($qry);
    return $result;
}

function simpangelombang($id, $nama, $tanggalmulai, $tanggalselesai){

    $qry = "";
    if(is_null($id))
        $qry = "INSERT INTO gelombang VALUES(null, '$nama', '$tanggalmulai', '$tanggalselesai')";
    else 
        $qry = "UPDATE gelombang SET Nama = '$nama', TanggalMulai='$tanggalmulai', TanggalSelesai='$tanggalselesai' WHERE Gelombang_Id=$id";

    return database_simpan($qry);

}
function deletegelombang($id){
    database_query("DELETE FROM gelombang WHERE Gelombang_Id = {$id}");
}
