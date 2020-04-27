<?php
    
    $tglmulai = formattanggal($_POST['tglmulai'], "Y-m-d"). " 00:00:00";
    $tglselesai = formattanggal($_POST['tglselesai'], "Y-m-d")." 23:59:59";
    $tglpengumuman = formattanggal($_POST['tglpengumuman'], "Y-m-d")." 00:00:00";
    $jmlditerima = $_POST['jmlditerima'];
    $info = $_POST['info'];
    $kepsek = $_POST['kepsek'];

    simpanpengaturan($tglmulai, $tglselesai, $tglpengumuman, $jmlditerima, $kepsek, $info);
    $_SESSION['alert'] = "data tersimpan";
    header("location:{$url}Pages/admin/pengaturan/pengaturan.php");
?>