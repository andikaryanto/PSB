<?php
    $id = $_POST['id'];
    $pengguna = $_POST['pengguna'];
    $level = $_POST['level'];
    $password = $_POST['password'];

    udatepengguna($id, $pengguna, $password, $level);
    $_SESSION['alert'] = "data tersimpan";
    header("location:{$url}Pages/admin/pengguna/daftar.php");
?>