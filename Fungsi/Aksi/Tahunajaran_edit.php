<?php
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $deskripsi = $_POST['deskripsi'];
    $tahun = formattanggal($_POST['tahun'], "Y-m-d h:i:s");
    $aktif = isset($_POST['aktif']) ? 1 : 0;

    // echo $tahun;
    updatetahunajaran($id, $nama, $deskripsi, $tahun, $aktif);
    
    $_SESSION['alert'] = 'data terupdate';
    header("location:{$url}Pages/admin/tahunajaran/daftar.php");
?>