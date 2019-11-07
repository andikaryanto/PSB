
	<?php
		$pesertaid = isset($peserta['Id']) ? $peserta['Id'] : "";
		$nilai;
		if($pesertaid)
			$nilai = ambilnilaiujian("WHERE Peserta_Id = {$idpeserta} ");
		
		$bahasiindonesia = isset($nilai[0]['Nilai']) ? $nilai[0]['Nilai']: NULL;
		$matik = isset($nilai[1]['Nilai']) ? $nilai[1]['Nilai'] : NULL;
		$ipa = isset($nilai[2]['Nilai']) ? $nilai[2]['Nilai'] : NULL;
	?>
	<h3 align="center">DATA NILAI UJIAN NASIONAL / UASBN</h3>
	<h4 align="center">( HARAP MENGISI DATA DENGAN LENGKAP DAN BENAR ! )</h4>
		<div class = "well">
			<div class="form-group">
				<label>BAHASA INDONESIA</label>
				<input type="text" class="form-control nilai" data-mask="9,99" name="bahasaindonesia" value = "<?= $bahasiindonesia?>" placeholder="" required>
			</div>
			<div class="form-group">
				<label>MATEMATIKA</label>
				<input type="text" class="form-control nilai" data-mask="9,99" name="matematika" value = "<?= $matik?>" placeholder="" required>
			</div>
			<div class="form-group">
				<label>ILMU PENGETAHUAN ALAM</label>
				<input type="text" class="form-control nilai" data-mask="9,99" name="ipa" value = "<?= $ipa?>" placeholder="" required>
			</div>
	<a onclick = "loadTab('tab_4','tab_5')" class="btn btn-success" data-toggle="tab">SELANJUTNYA</a>
		</div>
	<div class="footer">
		<div class="container">
			<p>Copyright &copy Panitia PSB MUSATI 2019</p>
		</div>
	</div> 