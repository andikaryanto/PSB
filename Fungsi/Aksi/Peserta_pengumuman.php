<?php
    
if($peserta){
    header("Location: {$url}Pages/pesertaditerima.php");
} else {
    header("Location: {$url}Pages/pesertaditolak.php");
}

?>