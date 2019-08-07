<?php
    
if($peserta){
    header("Location: $url"."pages/pesertaditerima.php");
} else {
    header("Location: $url"."pages/pesertaditolak.php");
}

?>