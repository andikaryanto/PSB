<?php
//mengaktifkan session
// session_start();

// header("Content-type: image/png");

// // menentukan session
// $_SESSION["Captcha"]="";

// // membuat gambar dengan menentukan ukuran
// $gbr = imagecreate(200, 50);

// //warna background captcha
// imagecolorallocate($gbr, 69, 179, 157);

// // pengaturan font captcha
// $color = imagecolorallocate($gbr, 253, 252, 252);
// $font = "Allura-Regular.ttf"; 
// $ukuran_font = 20;
// $posisi = 32;
// // membuat nomor acak dan ditampilkan pada gambar
// for($i=0;$i<=5;$i++) {
// 	// jumlah karakter
// 	$angka=rand(0, 9);

// 	$_SESSION["Captcha"].=$angka;

// 	$kemiringan= rand(20, 20);

// 	imagettftext($gbr, $ukuran_font, $kemiringan, 8+15*$i, $posisi, $color, $font, $angka);	
// }
// //untuk membuat gambar 
// imagepng($gbr); 
// imagedestroy($gbr);
function createCaptcha()
{
    //mengaktifkan session
    // session_start();


    // menentukan session
    if(isset($_SESSION["Captcha"]))
        unset($_SESSION["Captcha"]);

    // membuat gambar dengan menentukan ukuran
    $gbr = imagecreate(200, 50);

    //warna background captcha
    imagecolorallocate($gbr, 69, 179, 157);

    // pengaturan font captcha
    $color = imagecolorallocate($gbr, 253, 252, 252);
    $font = dirname(__FILE__) . "/Allura-Regular.ttf";
    $ukuran_font = 20;
    $posisi = 32;
    // membuat nomor acak dan ditampilkan pada gambar
    $ses = "";
    for ($i = 0; $i <= 5; $i++) {
        // jumlah karakter
        $angka = rand(0, 9);

        $ses .= $angka;

        $kemiringan = rand(20, 20);
        echo "<script>console.log(".$angka.")</script>";

        imagettftext($gbr, $ukuran_font, $kemiringan, 8 + 15 * $i, $posisi, $color, $font, $angka);
    }
    $_SESSION["Captcha"] = $ses;
    //untuk membuat gambar 
    imagepng($gbr, 
        "assets/img/image.png");
    imagedestroy($gbr);
}

