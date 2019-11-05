<?php 

include APP_PATH.'Pages/header.php';?>
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<div class="box">
				<img src="<?= $url ?>/assets/images/front-img.jpg">
				</div>
			</div>
			<div class="col-md-4">
				<div class="box">
					<form role="form" method="POST" action="../../Fungsi/Aksi/Login.php">
						<div class="form-group">
						<label>Username</label>
							<input type="text" class="form-control" name="username" value="" placeholder="Username">
						</div>
						<div class="form-group">
						<label>Password</label>
							<input type="password" class="form-control" name="password" placeholder="Password">
						</div>
						<div class="form-group">	
							<button class="btn btn-primary" type="submit">Masuk</button>
							<!-- <a class="btn btn-primary" href="daftarakun.php">Daftar Baru</a> -->
						</div>
					</form>	
					<div>Informasi Terkini</div>
						<ul>												
							<li><a href="#">Pendaftaran Siswa Baru Tahun Pelajaran 2019/2020 telah dibuka</a></li>
							<li><a href="#">Syarat Pendaftaran Siswa Baru Tahun Pelajaran 2019/2020</a></li>
							<li><a href="#">Seleksi Administrasi Siswa Baru Tahun Pelajaran 2019/2020</a></li>
						</ul>
				</div>			
			</div>
		</div>
	</div>
	<div class="footer">
		<div class="container">
			<p>Copyright &copy Panitia PSB MUSATI 2019</p>
		</div>
	</div> 
	<?php include APP_PATH.'Pages/footer.php';?>
</body>
</html>