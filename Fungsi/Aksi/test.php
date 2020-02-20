<?php
$content = "{$url}Pages/daftartab.php?key=".encrypt("edit.mlatipsb.REG0060WQ");
$text = generateQR(null, $content, "REG0060WQRegistQrCode.JPEG");
$enctext = encrypt($text);
header("Location: {$url}Pages/daftarberhasil.php?idpeserta=60&content={$enctext}");
?>