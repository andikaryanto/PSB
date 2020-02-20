<?php
    $nama = $_POST['nama'];
    $deskripsi = $_POST['deskripsi'];
    $tahun = formattanggal($_POST['tahun'], "Y-m-d h:i:s");
    $aktif = isset($_POST['aktif']) ? 1 : 0;

    // echo $tahun;

    simpantahunajaran($nama, $deskripsi, $tahun, $aktif);
    $_SESSION['alert'] = 'data tersimpan';
    header("location:{$url}Pages/admin/tahunajaran/daftar.php");
?>