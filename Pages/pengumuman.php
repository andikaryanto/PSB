
<!DOCTYPE>
<html>
<head>
<title>SELAMAT DATANG CALON SISWA BARU</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link media="all" type="text/css" rel="stylesheet" href="assets/css/bootstrap.min.css">
<link media="all" type="text/css" rel="stylesheet" href="assets/css/style.css">
</head>
<body>
	<?php include 'header.php';?>
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
					<div class="panel-heading">
					<div class="box">
					<h3 align="center">PENGUMUMAN</h3>
					<h4 align="center">( HARAP ISI DENGAN NOMER PENDAFTARAN UNTUK MELIHAT PENGUMUMAN DITERIMA ATAU TIDAKNYA ! )</h4>
					<form class="well" method="POST" action="pengumumanpeserta.php">
						<div class="form-group">
							<label>NOMOR PENDAFTARAN</label>
							<input type="text" class="form-control" name="nomorpendaftaran" placeholder="Nomor Pendaftaran" required>
						</div>
							<button type="submit" class="btn btn-success">CEK</button>
							<a class="btn btn-primary" href="index.php">KEMBALI</a>
					</form>    
				</div>
			</div>
			</div>
		</div>
	<div class="footer">
		<div class="container">
			<p align="center"><strong>Copyright &copy Panitia PSB MUSATI 2019</strong></p>
		</div>
	</div> 
</body>
</html>