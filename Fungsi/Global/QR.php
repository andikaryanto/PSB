<?php
function generateQR($url, $text, $filename = null){
    if(!is_null($filename)){
        QRcode::png($text, $filename);
        
        return $url."".$filename;
    }
    else 
        return QRcode::png($text);
}
?>