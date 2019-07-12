<?php 
    include 'header.php';
    $key = "";
    $peserta;

    $pengaturan = ambilpengaturan();

    if(date_create(tanggalSekarang()) >= date_create($pengaturan['TglMulaiPendaftaran']) && 
        date_create(tanggalSekarang()) <= date_create($pengaturan['TglSelesaiPendaftaran'])){
            // include 'header.php';

    }
    else 
        die("Pendaftaran Belum dibuka");
    
    if(isset($_GET['key'])){
        $key = $_GET['key'];
        $decrypt = decrypt($key);
        $noregister = explode(".", $decrypt)[2];
        $peserta = ambilhanyapeserta("WHERE NoDaftar = '{$noregister}'");
    }
?>

<div class="container">
		<div class="row">
			<div class="col-md-8">
				<div class="box">
                    <!-- Custom Tabs -->
                    <div class="nav-tabs-custom">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#tab_1" data-toggle="tab">Peserta</a></li>
                            <li class=""><a href="#tab_2" data-toggle="tab">Orang Tua</a></li>
                            <li class=""><a href="#tab_3" data-toggle="tab">Sekolah Asal</a></li>
                            <li class=""><a href="#tab_4" data-toggle="tab">Nilai Ujian</a></li>
                            <li class=""><a href="#tab_5" data-toggle="tab">Prestasi</a></li>
                            <li class=""><a href="#tab_6" data-toggle="tab">Kartu Miskin</a></li>
                            
                            
                        </ul>
                        <form method="POST" action="../Fungsi/Aksi/Peserta_simpan.php" novalidate>
                            <div class="tab-content">
                            
                                <div class="tab-pane active" id="tab_1">
                                    
                                        <?php include 'daftar.php'?>
                                </div>
                                <!-- /.tab-pane -->
                                <div class="tab-pane" id="tab_2">
                                    <?php include 'dataortuwali.php'?>
                                </div>
                                <!-- /.tab-pane -->
                                <div class="tab-pane" id="tab_3">
                                    <?php include 'datasekolahasal.php'?>
                                </div>
                                <!-- /.tab-pane -->
                                <div class="tab-pane" id="tab_4">
                                    <?php include 'datanilaiujian.php'?>
                                </div>
                                <!-- /.tab-pane -->
                                <div class="tab-pane" id="tab_5">
                                    <?php include 'dataprestasi.php'?>
                                </div>
                                <!-- /.tab-pane -->
                                <div class="tab-pane" id="tab_6">
                                    <?php include 'konfirmasikkm.php'?>
                                </div>
                        <!-- /.tab-pane -->
                            </div>
                            
                        </form>
                        <!-- /.tab-content -->
                    </div>
                    <!-- nav-tabs-custom -->
                </div>
            </div>
            <div class="col-md-4">
				<div class="box">
					<div>Informasi Terkini</div>
						<ul>												
							<li><a href="#">Pendaftaran Siswa Baru Tahun Pelajaran 2016/2017 telah dibuka</a></li>
							<li><a href="#">Syarat Pendaftaran Siswa Baru Tahun Pelajaran 2016/2017</a></li>
							<li><a href="#">Seleksi Administrasi Siswa Baru Tahun Pelajaran 2016/2017</a></li>
						</ul>
					</div>
				</div>			
			</div>
    </div>
</div>
<?php 
    include 'footer.php';
    // include 'daftar.php'
?>

</body>
</html>