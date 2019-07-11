<?php
    $id = $_POST['id'];
    $pengguna = $_POST['pengguna'];
    $level = $_POST['level'];
    $password = $_POST['password'];

    udatepengguna($id, $pengguna, $password, $level);
    header("location:{$url}Pages/admin/pengguna/daftar.php");
?>