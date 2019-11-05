<?php
    $idpeserta = simpanpeseta($_POST['idpeserta'], $_POST['nodaftar'], $_POST['nisn'], $_POST['namalengkap'], $_POST['jeniskelamin'], $_POST['tempatlahir'], $_POST['tanggallahir'], 
                $_POST['agama'], $_POST['alamatasal'], $_POST['rt'], $_POST['rw'], $_POST['kabupaten'], $_POST['kecamatan'],
                $_POST['kodepos'],$_POST['alamatdiy'],$_POST['nohpsiswa'],$_POST['namasekolahasal'],$_POST['alamatasalsekolah'],
                $_POST['statussekolah'], $_POST['kartumiskin']);
    $uploadedpath = uploadFotoPath($_FILES);
    uploadFoto($idpeserta, $uploadedpath);

    simpanorangtua($idpeserta, $_POST['namaortu'],$_POST['pekerjaan'],$_POST['agamaortu'],$_POST['alamatasalortu'], $_POST['namawali'],
                $_POST['rtwali'], $_POST['rwwali'], $_POST['kabupatenwali'], $_POST['kecamatanwali'],
                $_POST['kodeposwali'],$_POST['nohportuwali']);
    
    simpannilaiujian($idpeserta, 1, $_POST['bahasaindonesia']);
    simpannilaiujian($idpeserta, 2, $_POST['matematika']);
    simpannilaiujian($idpeserta, 3, $_POST['ipa']);

    simpanprestasi($idpeserta, $_POST['namaprestasi'], $_POST['nilaiprestasi']); 
    
    $noreg = buatnoreg($idpeserta);

    $content = $url."Pages/daftartab.php?key=".encrypt("edit.".$kuncirahasia.".".$noreg);
    $text = generateQR($url, $content, $noreg.$qrcode['registrasi']);
    $enctext = encrypt($text);  
    // echo $idpeserta;
    header("Location: $url"."Pages/daftarberhasil.php?idpeserta={$idpeserta}&content={$enctext}");

    
?>