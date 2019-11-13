<?php
    if($_POST['username'] && $_POST['password']){
        $pengguna = loginadmin($_POST['username'], $_POST['password']);
        if($pengguna){
             $_SESSION['pengguna'] = $_POST['username'];
            header("Location: $url"."Pages/admin/pengaturan/pengaturan.php");
        }
        else {
            
            header("Location: $url"."pages/admin/index.php");
        }
    } else {
        header("Location: $url"."pages/admin/index.php");
    }
?>