<?php
$content = $url."pages/daftartab.php?key=".encrypt("edit.mlatipsb.REG0001");
$text = generateQR($url, $content, "REG0001RegistQrCode.JPEG");
$enctext = encrypt($text);
header("Location: $url"."pages/daftarberhasil.php?idpeserta=1&content={$enctext}");
?>