<?php
    $pengguna = $_POST['pengguna'];
    $level = $_POST['level'];
    $password = $_POST['password'];

    simpanpengguna($pengguna, $password, $level);
    $_SESSION['alert'] = "data tersimpan";
    header("location:{$url}Pages/admin/pengguna/daftar.php");
?>