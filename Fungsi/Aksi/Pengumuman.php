<?php
    hapusPengumuman();
    $sukses = pengumuman();
    if($sukses == true){
        header("Location: $url"."pages/admin/aksi/pengumuman.php?sukses=true");
    } else {
        header("Location: $url"."pages/admin/aksi/pengumuman.php?sukses=false");
    }
?>