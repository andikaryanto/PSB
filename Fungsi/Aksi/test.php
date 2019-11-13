<?php
$content = $url."pages/daftartab.php?key=".encrypt("edit.mlatipsb.REG0038");
$text = generateQR($url, $content, "REG0038RegistQrCode.JPEG");
$enctext = encrypt($text);
header("Location: $url"."pages/daftarberhasil.php?idpeserta=38&content={$enctext}");
?>