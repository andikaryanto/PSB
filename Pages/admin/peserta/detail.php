<?php
include APP_PATH . 'Pages/headeradmin.php';

$noregister = $_GET['NoRegist'];
$peserta = ambilhanyapeserta("WHERE NoDaftar = '{$noregister}'");
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            BERANDA
            <small>CONTROL PANEL</small>
        </h1>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">No Registrasi : <?= $_GET['NoRegist'] ?></h3>


                    </div>
                    <!-- Custom Tabs -->
                    <div class="nav-tabs-custom">
                        <ul class="nav nav-tabs">
                            <li class="active"><a onclick="changetab('tab_1');" href="#tab_1" data-toggle="tab">Peserta</a></li>
                            <li class=""><a onclick="changetab('tab_2');" href="#tab_2" data-toggle="tab">Orang Tua / Wali</a></li>
                            <li class=""><a onclick="changetab('tab_3');" href="#tab_3" data-toggle="tab">Sekolah Asal</a></li>
                            <li class=""><a onclick="changetab('tab_4');" href="#tab_4" data-toggle="tab">Nilai Ujian</a></li>
                            <li class=""><a onclick="changetab('tab_5');" href="#tab_5" data-toggle="tab">Prestasi</a></li>
                            <li class=""><a onclick="changetab('tab_6');" href="#tab_6" data-toggle="tab">Kartu Miskin</a></li>


                        </ul>
                        <div class="tab-content">

                            <div class="tab-pane active" id="tab_1">

                                <?php include 'peserta.php' ?>
                            </div>
                            <div class="tab-pane" id="tab_2">
                                <?php include 'ortuwali.php' ?>
                            </div>
                            <div class="tab-pane" id="tab_3">
                                <?php include 'sekolahasal.php' ?>
                            </div>
                            <div class="tab-pane" id="tab_4">
                                <?php include 'nilaiujian.php' ?>
                            </div>
                            <div class="tab-pane" id="tab_5">
                                <?php include 'prestasi.php' ?>
                            </div>
                            <div class="tab-pane" id="tab_6">
                                <?php include 'kkm.php' ?>
                            </div>
                            <!-- /.tab-pane -->
                        </div>
                        <!-- /.tab-content -->
                    </div>
                    <!-- nav-tabs-custom -->
                </div>
            </div>
        </div>

    </section>
</div>
<?php
include APP_PATH . 'Pages/footeradmin.php';
// include 'daftar.php'
?>
<script>
    function changetab(selected) {
        var selectedpar;
        $('.nav-tabs a').each(function() {
            var par = this.parentElement;
            par.removeAttribute("class");
            if (this.href.split("#")[1] === selected)
                selectedpar = this.parentElement;
        })
        selectedpar.setAttribute("class","active");
    }
</script>

</body>

</html>