
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
					<h3 align="center">DAFTAR ULANG</h3>
					<h4 align="center">( HARAP ISI DENGAN NOMOR PENDAFTARAN UNTUK MELIHAT TELAH TERDAFTAR ULANG ATAU BELUM  ! )</h4>
					<form class="well" method="POST" action="#">
						<div class="form-group">
							<label>NOMOR PENDAFTARAN</label>
							<input type="number" class="form-control" name="nomorpendaftaran" placeholder="Nomor Pendaftaran" required>
						</div>
							<a class="btn btn-success" href="#">CEK</a>
							<a class="btn btn-primary" href="index.php">KEMBALI</a>
					</form>    
				</div>
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