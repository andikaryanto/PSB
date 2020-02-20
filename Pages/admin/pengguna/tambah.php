<?php 
$menuactive = "pengguna";
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
                        <h3 class="box-title">Tambah Pengguna</h3>
                    </div>
                    <form role = "form" action = "/Fungsi/Aksi/Pengguna_simpan.php" method = "POST" enctype="multipart/form-data">
                        <div class="box-body">
                        <div class="form-group">
                            <label for="pengguna">Pengguna</label>
                            <input type="text" class="form-control" id="pengguna" placeholder="Pengguna" name = "pengguna" required>
                        </div>
                        <div class="form-group">
                            <label>Level</label>
                            <select class="form-control" name = "level" required>
                                <option value = "1">Sekertaris</option>
                                <option value = "2">Tata Usaha</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="password">Password (10 karakter maksimal):</label>
                            <input type="password" class="form-control" id="password" placeholder="Password" name = "password" maxlength = "10" required>
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