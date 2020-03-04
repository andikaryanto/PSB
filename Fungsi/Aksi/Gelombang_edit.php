<?php
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $tglmulai = formattanggal($_POST['tanggalmulai'], "Y-m-d"). " 00:00:00";
    $tglselesai = formattanggal($_POST['tanggalselesai'], "Y-m-d")." 23:59:59";


    // echo $tahun;
    simpangelombang($id,$nama, $tglmulai, $tglselesai);
    
    $_SESSION['alert'] = 'data terupdate';
    header("location:{$url}Pages/admin/gelombang/daftar.php");
?>