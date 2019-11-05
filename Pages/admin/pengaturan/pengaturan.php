<?php 
    $menuactive = "pengaturan";
    include APP_PATH.'Pages/headeradmin.php';
    $tglmulai = "";
    $tglselesai = "";
    $tglpengumuman = "";
    $jmlditerima = 0;
    $pengaturan = ambilpengaturan();
    if(!empty($pengaturan)){
        $tglmulai = formatTanggal($pengaturan['TglMulaiPendaftaran'], "Y-m-d");
        $tglselesai = formatTanggal($pengaturan['TglSelesaiPendaftaran'], "Y-m-d", ["-","P1D"] );
        $tglpengumuman = formatTanggal($pengaturan['TglPengumuman'], "Y-m-d");
        $jmlditerima = $pengaturan['JumlahDiterima'];
    }
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
                        <h3 class="box-title">Pengaturan</h3>
                    </div>
                    <form role = "form" action = "<?= $url?>Fungsi/Aksi/Pengaturan_simpan.php" method = "POST">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="tgmulai">Tgl Mulai Daftar</label>
                                <input type="date" class="form-control" id="tgmulai" placeholder="Tgl Mulai Daftar" name = "tglmulai" value = "<?= $tglmulai?>" required>
                            </div>
                            <div class="form-group">
                                <label for="tgselesai">Tgl Selesai Daftar</label>
                                <input type="date" class="form-control" id="tgselesai" placeholder="Tgl Mulai Daftar" name = "tglselesai" value = "<?= $tglselesai?>" required>
                            </div>
                            <div class="form-group">
                                <label for="tglpengumuman">Tgl Pengumuman</label>
                                <input type="date" class="form-control" id="tglpengumuman" placeholder="Tgl Pengumuman" name = "tglpengumuman" value = "<?= $tglpengumuman?>" required>
                            </div>
                            <div class="form-group">
                                <label for="jmlditerima">Jumlah Diterima</label>
                                <input type="number" class="form-control" id="jmlditerima" placeholder="Jumlah Diterima" name = "jmlditerima" value = "<?= $jmlditerima?>" required>
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