<?php

$menuactive = "gelombangajaran";
include APP_PATH . 'Pages/headeradmin.php';
$gelombang = ambilhanyagelombang("WHERE Gelombang_Id = {$_GET['id']}");
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
                        <h3 class="box-title">Edit Gelombang</h3>
                    </div>
                    <form role="form" action="<?= $url ?>Fungsi/Aksi/Gelombang_edit.php" method="POST">
                        <input hidden id="id" name="id" value="<?= $gelombang['Gelombang_Id'] ?>">
                        <div class="box-body">
                        <div class="form-group">
                                <label for="pengguna">Nama</label>
                                <input type="text" class="form-control" id="nama" placeholder="Nama" name = "nama" required value = "<?= $gelombang['Nama']?>">
                            </div>
                            <div class="form-group">
                                <label for="deskripsi">Tanggal Mulai</label>
                                <input type="date" class="form-control" id="tanggalmulai" placeholder="Tanggal Mulai" name = "tanggalmulai" required value = "<?= formattanggal($gelombang['TanggalMulai'], "Y-m-d")?>">
                            </div>
                            <div class="form-group">
                                <label for="deskripsi">Tanggal Selesai</label>
                                <input type="date" class="form-control" id="tanggalselesai" placeholder="Tanggal Selesai" name = "tanggalselesai" required value = "<?=  formattanggal($gelombang['TanggalSelesai'], "Y-m-d", ["-","P1D"])?>">
                            </div>
                            <!-- /.box-body -->
                        </div>

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                    <!-- /.box -->
                </div>
            </div>
        </div>
        <!-- /.row -->
    </section>
</div>
<?php include APP_PATH . 'Pages/footeradmin.php'; ?>