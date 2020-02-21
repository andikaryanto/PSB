<?php include 'header.php'; ?>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="box">
                <?php

                $pengaturan = ambilpengaturan();
                if (date_create(tanggalSekarang()) >= date_create($pengaturan['TglPengumuman'])) {

                    $peserta = ambilhanyapeserta("WHERE NoDaftar = '{$_POST['nomorpendaftaran']}'");
                    if ($peserta) {
                        $daftarulang = ambildafhanyatarulang("AND a.Daftarulang_Id = {$peserta['Peserta_Id']}");
                        $content = $url."Pages/daftartab.php?key=" . encrypt("edit." . $kuncirahasia . "." . $peserta['NoDaftar']);
                        $text = generateQR($url, $content, $peserta['NoDaftar'] . $qrcode['registrasi']);
                        if ($daftarulang && $daftarulang['DaftarUlang'] == 1) {
                            ?>

                            <h3 align="center">ANDA SUDAH DAFTAR ULANG </h3>

                        <?php

                                } else if ($daftarulang && $daftarulang['DaftarUlang'] == 0) {

                                    ?>
                            <h3 align="center">ANDA BELUM DAFTAR ULANG</h3>
                            <h4 align="center">SILAKAN LAKUKAN DAFTAR ULANG KE PANITIA DI SMP MUHAMMADIYAH 1 MLATI</h4>
                        <?php
                                } else {
                                    ?>
                            <h3 align="center">ANDA TIDAK DITERIMA </h3>
                        <?php
                                }
                                ?>
                        <div class="callout">

                            <div class="row">
                                <div class="col-md-2">
                                    <img src="<?= $url . $peserta['UrlPhoto'] ?>" style="height:166; width:120 !important">
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
                    } else {
                        ?>
                    <h3 align="center"> BELUM ADA PENGUMUMAN </h3>
                <?php } ?>


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
</div>
<?php
include 'footer.php';
// include 'daftar.php'
?>

</body>

</html>