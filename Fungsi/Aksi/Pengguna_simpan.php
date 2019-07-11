<?php
    $pengguna = $_POST['pengguna'];
    $level = $_POST['level'];
    $password = $_POST['password'];

    simpanpengguna($pengguna, $password, $level);
    header("location:{$url}Pages/admin/pengguna/daftar.php");
?>