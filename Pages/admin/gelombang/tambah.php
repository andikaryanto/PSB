<?php 

$menuactive = "tahunajaran";
include APP_PATH.'Pages/headeradmin.php';?>
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
                        <h3 class="box-title">Tambah Gelombang</h3>
                    </div>
                    <form role = "form" action = "<?= $url ?>Fungsi/Aksi/Gelombang_simpan.php" method = "POST">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="pengguna">Nama</label>
                                <input type="text" class="form-control" id="nama" placeholder="Nama" name = "nama" required>
                            </div>
                            <div class="form-group">
                                <label for="deskripsi">Tanggal Mulai</label>
                                <input type="date" class="form-control" id="tanggalmulai" placeholder="Tanggal Mulai" name = "tanggalmulai" required>
                            </div>
                            <div class="form-group">
                                <label for="deskripsi">Tanggal Selesai</label>
                                <input type="date" class="form-control" id="tanggalselesai" placeholder="Tanggal Selesai" name = "tanggalselesai" required>
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
<?php include APP_PATH.'Pages/footeradmin.php';?>