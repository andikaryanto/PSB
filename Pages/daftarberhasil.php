<?php 
    include 'header.php';
    // include 'daftar.php'
    $peserta = ambilhanyapeserta("WHERE a.Id = {$_GET['idpeserta']}");
    $content = decrypt($_GET['content']);
?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="callout callout-info">
                    <h4>Selamat!</h4>
                    <p>Anda telah berhasil melakukan pendaftaran di website penerimaan siswa baru SMP Muh 1 Mlati.</p>
                </div>
                <div class="callout">
                    <div class="row">
                        <div class="col-md-12">
                            <div class = "box-body">
                                <p style = "color:red;">PENTING!! SEGEREA PRINT / TANGKAP LAYAR HALAMAN  INI</p>
                                <p style = "color:red;"> JAGALAH INFORMASI INI, JANGAN SAMPAI ORANG LAIN MENGETAHUINYA</p>
                                <p>GUNAKAN QR CODE DIBAWAH UNTUK MENGEDIT DATA PRIBADI ANDA</p>
                            </div>
                            </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-2">
                            <img src= "<?= "/".$peserta['UrlPhoto'] ?>" style = "height:200; width:150 !important">
                        </div>
                        <div class="col-md-8">
                            <div class = "box-body">
                                <p> No Registrasi : <b><?= $peserta['NoDaftar']?></b></p>
                                <p> Nama Peserta : <b><?= $peserta['NamaLengkap']?></b></p>
                                <p> TTL : <b><?= $peserta['TempatLahir'].", ". $peserta['TglLahir']?></b></p>
                                <p> Jenis Kelamin : <b><?= $peserta['JenisKelamin']?></b></p>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <p align="left"><img src= "<?= $content ?>" style = "height:150; width:150 !important"></p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <p><b>Untuk langkah selanjutnya</b></p>
                        <p>1. Cetak Formulir Pendaftaran</p>
                        <p>2. Lengkapi Persyaratan Pendaftaran</p>
                        <p>- Fotokopi Ijazah</p>
                        <p>- Fotokopi SKHUN</p>
                        <p>- Pas Foto 3 x 4</p>
                        <p>3. Serahkan bukti formulir pendaftaran dan berkas persyaratan ke panitia</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <a href = "laporan/cetakformulir.php?pesertaid=<?=$_GET['idpeserta']?>&content=<?= $_GET['content'] ?>" type="button" class="btn btn-block btn-primary btn-lg">Cetak Formulir</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>