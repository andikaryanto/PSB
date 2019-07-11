<?php include APP_PATH.'Pages/headeradmin.php';
    $pengguna = ambilhanyapengguna("WHERE Id = {$_GET['id']}");
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
                    <form role = "form" action = "<?= $url?>Fungsi/Aksi/Pengguna_edit.php" method = "POST">
                    <div class="box-body">
                        <input hidden name = "id" value = "<?= $pengguna['Id']?>">
                        <div class="form-group">
                            <label for="pengguna">Pengguna</label>
                            <input type="text" class="form-control" id="pengguna" placeholder="Pengguna" name = "pengguna" value="<?= $pengguna['Pengguna']?>" required>
                        </div>
                        <div class="form-group">
                            <label>Level</label>
                            <select class="form-control" name = "level" required>
                                <option value = "1" <?= $pengguna['Level'] == 1 ? "selected" : "" ?>>Sekertaris</option>
                                <option value = "2" <?= $pengguna['Level'] == 2 ? "selected" : "" ?>>Tata Usaha</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" placeholder="Password" name = "password" value="<?= $pengguna['Password']?>" required>
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