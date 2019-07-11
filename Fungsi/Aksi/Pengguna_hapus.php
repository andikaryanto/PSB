<?php
    deletepengguna($_GET['id']);
    header("location:{$url}Pages/admin/pengguna/daftar.php");
?>