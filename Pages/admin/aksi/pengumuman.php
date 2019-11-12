<?php 

$menuactive = "pengumuman";
include APP_PATH.'Pages/headeradmin.php';
 
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
                        <h3 class="box-title">Lakukan Pengumuman</h3>
                    </div>
                    <form role = "form" action = "<?= $url?>Fungsi/Aksi/Pengumuman.php" method = "POST">
                        
                        <?php
                        $pengaturan = ambilpengaturan();
                        if($pengaturan && ( date_create(tanggalSekarang())) >= date_create($pengaturan['TglPengumuman'])){

                            if(isset($_GET['sukses']) && $_GET['sukses'] == "true"){
                                echo "<h3 >Berhasil</h3>" ;
                            } else {
                                if(isset($_GET['pesan']))
                                    echo "<h3 >Gagal, Belum Tanggal Pengumuman</h3>" ;
                                // else 
                                //     echo "<h3 >Gagal</h3>" ;
                            }
                        } else if ($pengaturan && ( date_create(tanggalSekarang())) < date_create($pengaturan['TglPengumuman'])) {

                            if(isset($_GET['pesan']))
                                echo "<h3 >Gagal, Belum Tanggal Pengumuman</h3>" ;
                        }
                        ?>
                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Pengumuman</button>
                        </div>
                    </form>
                <!-- /.box -->
                </div>
            </div>
        </div>
      <!-- /.row -->
    </section>
</div>
<?php include APP_PATH.'Pages/footeradmin.php';?>