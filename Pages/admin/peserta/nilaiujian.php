
	<?php
		$pesertaid = isset($peserta['Id']) ? $peserta['Id'] : "";
		$nilai;
		if($pesertaid)
			$nilai = ambilnilaiujian("WHERE Peserta_Id = {$idpeserta} ");
		
		$bahasiindonesia = isset($nilai[0]['Nilai']) ? $nilai[0]['Nilai']: 0;
		$matik = isset($nilai[1]['Nilai']) ? $nilai[1]['Nilai'] : 0;
		$ipa = isset($nilai[2]['Nilai']) ? $nilai[2]['Nilai'] : 0;
	?>
	<h3 align="center">DATA NILAI UJIAN NASIONAL / UASBN</h3>
		<div class = "well">
			<div class="form-group">
				<label>BAHASA INDONESIA</label>
				<input type="number" class="form-control" name="bahasaindonesia" value = "<?= $bahasiindonesia?>" placeholder="" required>
			</div>
			<div class="form-group">
				<label>MATEMATIKA</label>
				<input type="number" class="form-control" name="matematika" value = "<?= $matik?>" placeholder="" required>
			</div>
			<div class="form-group">
				<label>ILMU PENGETAHUAN ALAM</label>
				<input type="number" class="form-control" name="ipa" value = "<?= $ipa?>" placeholder="" required>
			</div>
			<!-- <a class="btn btn-success" href="dataprestasi.php">SELANJUTNYA</a> -->
		</div>
	<div class="footer">
		<div class="container">
			<p>Copyright &copy Panitia PSB MUSATI 2019</p>
		</div>
	</div> 