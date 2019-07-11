<?php

$pdf = new TCPDF();
// $pdf->AddPage();
// $pdf->Headers(null, "SMP MUHAMMADIYAH 1 MLATI", APP_PATH."assets/images/logomusati.png");
// $pdf->Output();
// $pdf->SetXY(110, 200);
// $img = base64_encode(decrypt($_GET['content']));
// $imagedata = file_get_contents(APP_PATH."assets/img/REG0075RegistQrCode.JPEG");
//              // alternatively specify an URL, if PHP settings allow
// $base64 = base64_encode($imagedata);
// $kkk = base64_decode($base64);
$pdf->Image(APP_PATH."assets/images/logomusati.png");
$pdf->Output();
