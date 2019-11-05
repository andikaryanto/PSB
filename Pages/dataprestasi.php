	<?php
	$pesertaid = isset($peserta['Id']) ? $peserta['Id'] : "";
	$presatasi;
	if ($pesertaid)
		$presatasi = ambilprestasi("WHERE Peserta_Id = {$idpeserta} ");


	$namaprestasi = isset($presatasi['NamaPrestasi']) ? $presatasi['NamaPrestasi'] : "";
	$nilaiprestasi = isset($presatasi['Nilai']) ? $presatasi['Nilai'] : "";
	?>
	<h3 align="center">DATA NILAI PRESTASI BIDANG AKADEMIK / NON AKADEMIK (JIKA MEMILIKI)</h3>
	<h4 align="center">( HARAP MENGISI DATA DENGAN LENGKAP DAN BENAR ! )</h4>

	<div class="well">
		<div class="form-group">
			<label>PRESTASI / LOMBA</label>
			<input type="text" class="form-control" name="namaprestasi" placeholder="" value="<?= $namaprestasi ?>">
			<label>DIAKUI NILAI / JUARA </label>
			<input type="number" class="form-control" name="nilaiprestasi" placeholder="" value="<?= $nilaiprestasi ?>">
		</div>
		<a onclick="loadTab('tab_5','tab_6')" class="btn btn-success" data-toggle="tab">SELANJUTNYA</a>
	</div>
	<div class="footer">
		<div class="container">
			<p>Copyright &copy Panitia PSB MUSATI 2019</p>
		</div>
	</div>
	</body>

	</html>