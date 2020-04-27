	<?php
	$pesertaid = isset($peserta['Peserta_Id']) ? $peserta['Peserta_Id'] : "";
	$presatasi;
	if ($pesertaid)
		$presatasi = ambilprestasi("WHERE Peserta_Id = {$idpeserta} ");


	$namaprestasi = isset($presatasi['NamaPrestasi']) ? $presatasi['NamaPrestasi'] : (isset($_SESSION['data']['namaprestasi']) ? $_SESSION['data']['namaprestasi'] : "");
	$nilaiprestasi = isset($presatasi['Nilai']) ? $presatasi['Nilai'] : (isset($_SESSION['data']['nilaiprestasi']) ? $_SESSION['data']['nilaiprestasi'] : "");
	?>
	<h3 align="center">DATA NILAI PRESTASI BIDANG AKADEMIK / NON AKADEMIK (JIKA MEMILIKI)</h3>
	<h4 align="center">( HARAP MENGISI DATA DENGAN LENGKAP DAN BENAR ! )</h4>

	<div class="well">
		<div class="form-group">
			<label>PRESTASI / LOMBA</label>
			<input type="text" class="form-control" name="namaprestasi" placeholder="" value="<?= $namaprestasi ?>">
			<label>DIAKUI NILAI / JUARA </label><br>
			<select name="nilaiprestasi">
				<option value = "1">Juara 1</option>
				<option value = "2">Juara 2</option>
				<option value = "3">Juara 3</option>
			</select>
			<!-- <input type="number" class="form-control" name="nilaiprestasi" placeholder="" value="<?= $nilaiprestasi ?>"> -->
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