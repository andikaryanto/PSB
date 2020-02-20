<?php
function generateQR($url, $text, $filename = null){
    if(!is_null($filename)){
        QRcode::png($text, APP_PATH."assets/img/".$filename);
        
        return $url."/assets/img/".$filename;
    }
    else 
        return QRcode::png($text);
}
?>