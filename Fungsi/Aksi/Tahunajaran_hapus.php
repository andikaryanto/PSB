<?php

    $tahun = ambilhanyatahunajaran("WHERE Id = {$_GET['id']}");
    if($tahun['Aktif'])
        die('Tidak bisa hapus tahun ajaran yang aktif');
    
    
    deletetahunajaran($_GET['id']);
    header("location:{$url}Pages/admin/tahunajaran/daftar.php");
?>