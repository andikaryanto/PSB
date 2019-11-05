<?php 

$menuactive = "tahunajaran";
include APP_PATH.'Pages/headeradmin.php';?>

    <!-- Left side column. contains the logo and sidebar -->

    <!-- Content Wrapper. Contains page content -->
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
                    <h3 class="box-title">Daftar Tahun Ajaran</h3>
              
                    <div class="row">
                        <div class="col-xs-12 text-right">
                            <a href = "<?= $url?>Pages/admin/tahunajaran/tambah.php" class = "btn btn-primary">+</a>
                        </div>
                    </div>
                </div>
            <!-- /.box-header -->
                <div class="box-body">
                
                    <table id="tablepengguna" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Deskripsi</th>
                                <th>Aktif</th>
                                <th class = "disabled-sorting text-right">Aksi</th>
                            </tr>
                        </thead>
                        <tbody> 
                            <?php
                                $tahunajaran = ambiltahunajaran();
                                foreach($tahunajaran as $tahun){
                            ?>
                            <tr>
                                <td><a href= "<?= $url."Pages/admin/tahunajaran/edit.php?id={$tahun['Id']}"?>"><?= $tahun['Nama']?></a></td>
                                <td><?= $tahun['Deskripsi'] ?></td>
                                <td><?= $tahun['Aktif'] == 1 ?  "Ya" : "Tidak"?></td>
                                <td class = "text-right">
                                    <a href = "<?= $url."Fungsi/Aksi/Tahunajaran_hapus.php?id={$tahun['Id']}"?>"><i class='fa fa-trash'></i></a>
                                </td>
                            </tr>
                            <?php
                                }
                            ?>

                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Nama</th>
                                <th>Deskripsi</th>
                                <th>Aktif</th>
                                <th class = "disabled-sorting text-right">Aksi</th>
                            </tr>
                        </tfoot>
                    </table>
            <!-- /.box-body -->
                </div>
            </div>
          <!-- /.box -->
        </div>
      <!-- /.row -->
    </section>
</div>
    
<script type = "text/javascript">
    var table;
    // function datatable(){
    $('#tablepengguna').DataTable({
        "columnDefs": [ 
            {
            targets: 'disabled-sorting', 
            orderable: false
            }
        ],
    }); 

    // }
</script>
<?php include APP_PATH.'Pages/footeradmin.php';?>