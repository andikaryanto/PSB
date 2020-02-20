<?php include 'header.php'; ?>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="box">
                <?php

                $pengaturan = ambilpengaturan();

                if (date_create(tanggalSekarang()) >= date_create($pengaturan['TglPengumuman'])) {

                    $peserta = cekpesertaditerima($_POST['nomorpendaftaran']);

                    if ($peserta && $peserta['Diterima'] == 1) {

                        $content = $url . "Pages/daftartab.php?key=" . encrypt("edit." . $kuncirahasia . "." . $peserta['NoDaftar']);
                        $text = generateQR(null, $content, $peserta['NoDaftar'] . $qrcode['registrasi']);
                        // $enctext = encrypt($text);  
                        // $content = decrypt($_GET['content']);
                        ?>

                        <h3 align="center">SELAMAT ANDA DITERIMA </h3>
                        <h4 align="center">SEGERA LAKUKAN DAFTAR ULANG KE PANITIA DI SMP MUHAMMADIYAH 1 MLATI</h4>
                        <div class="callout">

                            <div class="row">
                                <div class="col-md-2">
                                    <img src="<?= "../" . $peserta['UrlPhoto'] ?>" style="height:160; width:120 !important">
                                </div>
                                <div class="col-md-8">
                                    <div class="box-body">
                                        <p> No Registrasi : <b><?= $peserta['NoDaftar'] ?></b></p>
                                        <p> Nama Peserta : <b><?= $peserta['NamaLengkap'] ?></b></p>
                                        <p> TTL : <b><?= $peserta['TempatLahir'] . ", " . $peserta['TglLahir'] ?></b></p>
                                        <p> Jenis Kelamin : <b><?= $peserta['JenisKelamin'] ?></b></p>
                                        <p> Sekolah Asal : <b><?= $peserta['AsalSekolah'] ?></b></p>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <img src="<?= $text ?>" style="height:120; width:120 !important">
                                </div>
                            </div>
                        </div>
                        <?php
                            } else {

                                $semuapeserta = ambilhanyapeserta("WHERE NoDaftar = '{$_POST['nomorpendaftaran']}'");
                                if ($semuapeserta) {
                                    $content = $url . "Pages/daftartab.php?key=" . encrypt("edit." . $kuncirahasia . "." . $semuapeserta['NoDaftar']);
                                    $text = generateQR(null, $content, $semuapeserta['NoDaftar'] . $qrcode['registrasi']);
                                    ?>
                            <h3 align="center">TERIMAKASIH ANDA SUDAH MENGIKUTI SELEKSI ONLINE</h3>
                            <h4 align="center">ANDA TIDAK LOLOS</h4>
                            <div class="callout">

                                <div class="row">
                                    <div class="col-md-2">
                                        <img src="<?= "/" . $peserta['UrlPhoto'] ?>" style="height:160; width:120 !important">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="box-body">
                                            <p> No Registrasi : <b><?= $peserta['NoDaftar'] ?></b></p>
                                            <p> Nama Peserta : <b><?= $peserta['NamaLengkap'] ?></b></p>
                                            <p> TTL : <b><?= $peserta['TempatLahir'] . ", " . $peserta['TglLahir'] ?></b></p>
                                            <p> Jenis Kelamin : <b><?= $peserta['JenisKelamin'] ?></b></p>
                                            <p> Sekolah Asal : <b><?= $peserta['AsalSekolah'] ?></b></p>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <img src="<?= $text ?>" style="height:120; width:120 !important">
                                    </div>
                                </div>
                            </div>
                        <?php
                                } else {
                                    ?>
                            <h3 align="center">NOMOR REGISTRASI SALAH </h3>
                    <?php
                            }
                        }
                    } else {
                        ?>
                    <h3 align="center">BELUM ADA PENGUMUMAN </h3>
                <?php
                }
                ?>


            </div>
        </div>
        <div class="col-md-4">
            <div class="box">
                <div>Informasi Terkini</div>
                <ul>
                    <li><a href="#">Pendaftaran Siswa Baru Tahun Pelajaran 2019/2020 telah dibuka</a></li>
                    <li><a href="#">Syarat Pendaftaran Siswa Baru Tahun Pelajaran 2019/2020</a></li>
                    <li><a href="#">Seleksi Administrasi Siswa Baru Tahun Pelajaran 2019/2020</a></li>
                </ul>
                <center><a class="btn btn-primary" href="index.php">KEMBALI KE BERANDA</a></center>
            </div>
        </div>
    </div>
</div>
<?php
include 'footer.php';
// include 'daftar.php'
?>

</body>

</html>