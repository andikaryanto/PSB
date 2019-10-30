<?php include 'header.php'; ?>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="box">
                <?php

                $pengaturan = ambilpengaturan();

                if(date_create(tanggalSekarang()) >= date_create($pengaturan['TglPengumuman'])){

                    $peserta = cekpesertaditerima($_POST['nomorpendaftaran']);
                    
                    if ($peserta){
                     ?>
                        
                        <h3 align="center">SELAMAT ANDA DITERIMA </h3>
                     <?php   
                    } else {
                        
                    ?>
                        <h3 align="center">TERIMAKASIH ANDA SUDAH MENGIKUT HASIL SELEKSI, ANDA TIDAK LOLOS </h3>
                    <?php
                    } 
                } else {
                    ?>
                     <h3 align="center">BELUM ADA PENGUMUMAN </h3>
                    <?php
                }
                ?>
                

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