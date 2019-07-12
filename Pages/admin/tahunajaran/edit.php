<?php include APP_PATH.'Pages/headeradmin.php';
    $tahun = ambilhanyatahunajaran("WHERE Id = {$_GET['id']}");
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
                        <h3 class="box-title">Tambah Pengguna</h3>
                    </div>
                    <form role = "form" action = "<?= $url?>Fungsi/Aksi/Tahunajaran_edit.php" method = "POST">
                        <input hidden id="id" name = "id" value = "<?= $tahun['Id'] ?>">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="pengguna">Nama</label>
                                <input type="text" class="form-control" id="nama" placeholder="Nama" name = "nama" value = "<?= $tahun['Nama'] ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="deskripsi">Deskripsi</label>
                                <input type="text" class="form-control" id="deskripsi" placeholder="Deskripsi" name = "deskripsi" value = "<?= $tahun['Deskripsi'] ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="deskripsi">Tahun</label>
                                <input type="date" class="form-control" id="tahun" placeholder="Tahun" name = "tahun" value = "<?= formatTanggal($tahun['Tahun'], "Y-m-d") ?>" required>
                            </div>
                            <div class="form-group">
                                <label>
                                    <input type="checkbox" class="minimal" name = "aktif" <?php if($tahun['Aktif'] == 1) echo "checked" ?>>
                                    Aktif
                                </label>
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