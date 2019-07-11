<?php
    if($_POST['username'] && $_POST['password']){
        $pengguna = loginadmin($_POST['username'], $_POST['password']);
        if($pengguna)
            header("Location: $url"."pages/admin/adminarea.php");
        else 
            header("Location: $url"."pages/admin/index.php");
    } else {
        header("Location: $url"."pages/admin/index.php");
    }
?>