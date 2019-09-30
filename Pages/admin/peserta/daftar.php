<?php include APP_PATH.'Pages/headeradmin.php';
    $pengaturan = ambilpengaturan();
        
?>

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
                    <h3 class="box-title">Daftar Peserta</h3>
              
                </div>
            <!-- /.box-header -->
                <div class="box-body">
                
                    <table id="tablepengguna" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No Daftar</th>
                                <th>NISN</th>
                                <th>Nama Lengkap</th>
                                <th>JenKel</th>
                                <th>No Telp</th>
                                <th>Asal Sekolah</th>
                                <?php if(isset($_GET['halaman']) && $_GET['halaman'] == "siswaditerima"){
                                    echo "<th>Daftar Ulang?</th>";
                                }?>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody> 
                            <?php
                                $peserta = array();

                                if(isset($_GET['halaman'])){

                                
                                    switch($_GET['halaman']){

                                        case "siswaditerima" : 
                                            if(date_create(tanggalSekarang()) >= date_create($pengaturan['TglPengumuman']))
                                                $peserta = pesertaditerima();
                                            break;
                                        case "siswaditolak" :
                                            if(date_create(tanggalSekarang()) >= date_create($pengaturan['TglPengumuman']))
                                                $peserta = pesertaditolak();
                                            break;
                                        default : 
                                            $peserta = ambilpeserta();
                                            break;

                                    }
                                }

                                foreach($peserta as $p){
                            ?>
                            <tr>
                                <td><?= $p['NoDaftar']?></a></td>
                                <td><?= $p['NISN']?></a></td>
                                <td><?= $p['NamaLengkap'] ?></td>
                                <td><?= $p['JenisKelamin'] ?></td>
                                <td><?= $p['NoTelp'] ?></td>
                                <td><?= $p['AsalSekolah'] ?></td>
                                <?php if(isset($_GET['halaman']) && $_GET['halaman'] == "siswaditerima"){
                                    // echo "<th>{$p['Daftarulang']}</th>";
                                    if( $p['Daftarulang'] == 1)
                                        echo "<td><input id='{$p['Id']}' type='checkbox' class='minimal' checked></td>";
                                    else 
                                        echo "<td><input id='{$p['Id']}' type='checkbox' class='minimal'></td>";
                                }?>
                                <td><a href="<?= $url."Pages/admin/peserta/detail.php?NoRegist={$p['NoDaftar']}"?>"><i class = "fa fa-info"></i></a></td>
                            </tr>
                            <?php
                                }
                            ?>

                        </tbody>
                        <tfoot>
                            <tr>
                            <th>No Daftar</th>
                                <th>NISN</th>
                                <th>Nama Lengkap</th>
                                <th>JenKel</th>
                                <th>No Telp</th>
                                <th>Asal Sekolah</th>
                                <?php if(isset($_GET['halaman']) && $_GET['halaman'] == "siswaditerima"){
                                    echo "<th>Daftar Ulang?</th>";
                                }?>
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

    $(':checkbox').change(function() {
    // this will contain a reference to the checkbox   
    if (this.checked) {
        console.log(this.checked);
    
    } else {
        console.log(this.checked);
    }

    $.ajax({
        url: '<?= $url."Fungsi/Aksi/Daftarulang.php" ?>',
        type : "POST",
        data : {
            Id : this.id,
            Selected : this.checked
        },
        success : function(result){
            var res = JSON.parse(result)
            console.log(res);
        }
    })
});

    // }
</script>
<?php include APP_PATH.'Pages/footeradmin.php';?>