<?php
include APP_PATH.'Pages/header.php';
?>
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<div class="box">
					<h3>Daftar Akun Baru</h3>
					<form class="well" method="POST" action="#">
						<div class="form-group">
							<label>Username</label>
							<input type="text" class="form-control" name="username" placeholder="Username" required>
						</div>
						<div class="form-group">
							<label>Password</label>
							<input type="password" class="form-control" name="password" placeholder="Password" required>
						</div>
						<div class="form-group">
							<label>Nama Lengkap</label>
							<input type="text" class="form-control" name="namalengkap" placeholder="Nama Lengkap" required>
						</div>
						 <div class="form-group">
							<label>Email</label>
							<input type="email" class="form-control" name="email" placeholder="Email jika ada">
						</div>							  
							<input type="submit" class="btn btn-primary" value="Daftar">
							<a class="btn btn-success" href="index.php">Halaman Depan</a>
						<input type="hidden" name="form_daftar" value="daftar">
					</form>    
				</div>
			</div>
			<div class="col-md-4">
				<div class="box">
					<form role="form" method="POST" action="adminarea.php">
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
							<a class="btn btn-primary" href="daftarakun.php">Daftar Baru</a>
						</div>
					</form>	
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
	<div class="footer">
		<div class="container">
			<p>Copyright &copy Panitia PSB MUSATI 2019</p>
		</div>
	</div> 
</body>
</html>