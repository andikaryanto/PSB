<?php
session_start();
?>
<!DOCTYPE>
<html>
<head>
<title>Sekretariat PSB Online MUSATI</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link media="all" type="text/css" rel="stylesheet" href="../assets/css/bootstrap.min.css">
<link media="all" type="text/css" rel="stylesheet" href="../assets/css/style.css">
</head>

<body>
	<div class="top">
		<div class="container">

			<div class="pull-left image">
          	<center><img src="../assets/images/logomusati.png" style="width: 10%"></center>
			<h3 align="center">SEKRETARIAT PENDAFTARAN SISWA BARU ONLINE</h3>
			<h4 align="center">SMP MUHAMMADIYAH 1 MLATI</h4>
			<h5 align="center">Jl. Magelang Km 7,5 Sendangadi, Mlati, Sleman, Yogyakarta</h5>
			<h5 align="center">Telp. ( 0274 ) 869879</h5>
		</div>
	</div>
</div>
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<div class="box">
				<img src="../assets/images/front-img.jpg">
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
</body>
</html>