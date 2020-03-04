<?php
    $nama = $_POST['nama'];
    $tglmulai = formattanggal($_POST['tanggalmulai'], "Y-m-d"). " 00:00:00";
    $tglselesai = formattanggal($_POST['tanggalselesai'], "Y-m-d")." 23:59:59";

    simpangelombang(null, $nama, $tglmulai, $tglselesai);
    $_SESSION['alert'] = 'data tersimpan';
    header("location:{$url}Pages/admin/gelombang/daftar.php");
?>