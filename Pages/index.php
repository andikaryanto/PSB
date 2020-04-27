<?php 
include 'header.php';
?>
<!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-green">
                    <div class="inner">
                        <h3></h3>
                        <p align="center"><strong>INFORMASI TATA CARA PENDAFTARAN</p></strong>
                    </div>
                    <div class="icon">
                        <i class=""></i>
                    </div>
                    <a href="<?= $url ?>Pages/tatacara.php" class="small-box-footer">INFO SELENGKAPNYA <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-blue">
                    <div class="inner">
                        <h3></h3>
                        <p align="center"><strong>PENDAFTARAN CALON SISWA BARU</strong></p>
                    </div>
                    <div class="icon">
                        <i class=""></i>
                    </div>
                    <a href="<?= $url ?>Pages/daftartab.php" class="small-box-footer">DAFTAR <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-red">
                    <div class="inner">
                        <h3></h3>
                        <p align="center"><strong>PENGUMUMAN </p></strong>
                    </div>
                    <div class="icon">
                        <i class=""></i>
                    </div>
                    <a href="<?= $url ?>Pages/pengumuman.php" class="small-box-footer">INFO SELENGKAPNYA <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-yellow">
                    <div class="inner">
                        <h3></h3>
                        <p align="center"><strong>DAFTAR ULANG </p></strong>
                    </div>
                    <div class="icon">
                        <i class=""></i>
                    </div>
                    <a href="<?= $url ?>Pages/daftarulang.php" class="small-box-footer">INFO SELENGKAPNYA <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div><!-- ./col -->
            <br>
        <div class="col-md-6 col-xs-6">
            <div class="box">
                <div><strong>Informasi Terkini</strong></div>
                    <ul>       
                        <li><a href="#"><?= $pengaturan['Info']?></a></li>
                    </ul>
                </div>
            </div>          
        </div>
        </div><!-- /.row -->
</body>
</html>