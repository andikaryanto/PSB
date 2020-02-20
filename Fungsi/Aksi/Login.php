<?php
    if($_POST['username'] && $_POST['password']){
        $pengguna = loginadmin($_POST['username'], $_POST['password']);
        if($pengguna){
             $_SESSION['pengguna'] = $_POST['username'];
             $_SESSION['level'] = $pengguna['Level'];
            header("Location: {$url}Pages/admin/pengaturan/pengaturan.php");
        }
        else {
            
            header("Location: {$url}Pages/admin/index.php");
        }
    } else {
        header("Location: {$url}Pages/admin/index.php");
    }
?>