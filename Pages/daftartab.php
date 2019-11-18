<?php
include 'header.php';
$key = "";
$peserta;

$pengaturan = ambilpengaturan();

if (
    date_create(tanggalSekarang()) >= date_create($pengaturan['TglMulaiPendaftaran']) &&
    date_create(tanggalSekarang()) <= date_create($pengaturan['TglSelesaiPendaftaran'])
) {
    // include 'header.php';

} else {
    // die("PENDAFTARAN BELUM DIBUKA");
?>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="box">


                <h3 align="center">PENDAFTARAN BELUM DIBUKA </h3>
                <!-- <div class="callout">

                    <div class="row">
                        <div class="col-md-2">
                            <img src="<?= $text ?>" style="height:120; width:120 !important">
                        </div>
                        <div class="col-md-2">
                            <img src="<?= "../" . $peserta['UrlPhoto'] ?>" style="height:120; width:120 !important">
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
                    </div>
                </div> -->



            </div>
        </div>
        <div class="col-md-4">
            <div class="box">
                <div>Informasi Terkini</div>
                <ul>
                    <li><a href="#">Pendaftaran Siswa Baru Tahun Pelajaran 2016/2017 telah dibuka</a></li>
                    <li><a href="#">Syarat Pendaftaran Siswa Baru Tahun Pelajaran 2016/2017</a></li>
                    <li><a href="#">Seleksi Administrasi Siswa Baru Tahun Pelajaran 2016/2017</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<?php
die();
}


if (isset($_GET['key'])) {
    $key = $_GET['key'];
    $decrypt = decrypt($key);
    $noregister = explode(".", $decrypt)[2];
    $peserta = ambilhanyapeserta("WHERE NoDaftar = '{$noregister}'");
}
?>

<div class="container" id="taball">
    <div class="row">
        <div class="col-md-8">
            <div class="box">
                <!-- Custom Tabs -->
                <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#tab_1" data-toggle="tab">Peserta</a></li>
                        <li class=""><a href="#tab_2" data-toggle="tab">Orang Tua / Wali</a></li>
                        <li class=""><a href="#tab_3" data-toggle="tab">Sekolah Asal</a></li>
                        <li class=""><a href="#tab_4" data-toggle="tab">Nilai Ujian</a></li>
                        <li class=""><a href="#tab_5" data-toggle="tab">Prestasi</a></li>
                        <li class=""><a href="#tab_6" data-toggle="tab">Kartu Miskin</a></li>
                        <!-- <li class=""><a href="#tab_7" data-toggle="tab">Tahun Lulus</a></li> -->


                    </ul>
                    <form id="formdaftar" method="POST" action="../Fungsi/Aksi/Peserta_simpan.php" enctype="multipart/form-data">
                        <div class="tab-content">

                            <div class="tab-pane active" id="tab_1">

                                <?php include 'daftar.php' ?>
                            </div>
                            <!-- /.tab-pane -->
                            <div class="tab-pane" id="tab_2">
                                <?php include 'dataortuwali.php' ?>
                            </div>
                            <!-- /.tab-pane -->
                            <div class="tab-pane" id="tab_3">
                                <?php include 'datasekolahasal.php' ?>
                            </div>
                            <!-- /.tab-pane -->
                            <div class="tab-pane" id="tab_4">
                                <?php include 'datanilaiujian.php' ?>
                            </div>
                            <!-- /.tab-pane -->
                            <div class="tab-pane" id="tab_5">
                                <?php include 'dataprestasi.php' ?>
                            </div>
                            <!-- /.tab-pane -->
                            <div class="tab-pane" id="tab_6">
                                <?php include 'konfirmasikkm.php' ?>
                            </div>
                            <!-- <div class="tab-pane" id="tab_7">
                                <?php include 'konfirmasikkm.php' ?>
                            </div> -->
                            <!-- /.tab-pane -->
                        </div>
                        <!-- <button id = "btntest"></button> -->
                    </form>
                    <!-- /.tab-content -->
                </div>
                <!-- nav-tabs-custom -->
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
<!-- <script src="https://www.google.com/recaptcha/api.js?render=_reCAPTCHA_site_key"></script>
<script>
grecaptcha.ready(function() {
    grecaptcha.execute('_reCAPTCHA_site_key_', {action: 'homepage'}).then(function(token) {
       ...
    });
});
</script> -->
<script>
    $("#btndaftar").on('click', function() {

        $("input").each(function() {
            if (this.name != "nodaftar" && this.name != "idpeserta" && this.name != "namaprestasi" && this.name != "nilaiprestasi" && (this.value === "" || this.value === null || this.value === undefined)) {
                alert(this.name + " Masih Kosong"); // This is the jquery object of the input, do what you will
                // console.log(this.name + " Masih Kosong");
                return false;
            }
        });

        $("textarea").each(function() {
            if (this.name != "nodaftar" && this.name != "idpeserta" && this.name != "namaprestasi" && this.name != "nilaiprestasi" && (this.value === "" || this.value === null || this.value === undefined)) {
                alert(this.name + " Masih Kosong"); // This is the jquery object of the input, do what you will
                // console.log(this.name + " Masih Kosong");
                return false;
            }
        });

        $("select").each(function() {
            if (this.name != "nodaftar" && this.name != "idpeserta" && this.name != "namaprestasi" && this.name != "nilaiprestasi" && (this.value === "" || this.value === null || this.value === undefined)) {
                // console.log(this.name + " Masih Kosong");
                alert(this.name + " Masih Kosong"); // This is the jquery object of the input, do what you will
                return false;
            }
        });
    });

    function loadTab(tabbefore, tabafter) {

        var before = document.querySelectorAll("a[href='#" + tabbefore + "']");
        before.forEach(function(t) {
            t.setAttribute("aria-expanded", "false");
            var par = t.parentElement;
            par.removeAttribute("class");
            tab = document.getElementById(tabbefore);
            tab.setAttribute("class", "tab-pane");

        });
        var after = document.querySelectorAll("a[href='#" + tabafter + "']");
        after.forEach(function(t) {
            t.setAttribute("aria-expanded", "true");
            var par = t.parentElement;
            par.setAttribute("class", 'active');
            tab = document.getElementById(tabafter);
            tab.setAttribute("class", "tab-pane active");
        });
        document.getElementById('taball').scrollIntoView();
    }
</script>
</body>

</html>