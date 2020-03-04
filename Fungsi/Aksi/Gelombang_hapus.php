<?php

    $tahun = ambilhanyagelombang("WHERE Id = {$_GET['id']}");
    if($tahun['Aktif'])
        die('Tidak bisa hapus tahun ajaran yang aktif');
    
    
    deletegelombang($_GET['id']);
    header("location:{$url}Pages/admin/gelombang/daftar.php");
?>