
	<?php 
		$pesertaid = isset($peserta['Id']) ? $peserta['Id'] : "";
		$ortu;
		if($pesertaid)
			$ortu = ambilorangtua($pesertaid);
		
		$namaortu = isset($ortu['NamaLengkap']) ? $ortu['NamaLengkap'] : "";
		$pekerjaan = isset($ortu['Pekerjaan']) ? $ortu['Pekerjaan'] : "";
		$agamaortu = isset($ortu['Agama']) ? $ortu['Agama'] : "";
		$alamatortu = isset($ortu['Alamat']) ? $ortu['Alamat'] : "";
		$namawali = isset($ortu['NamaWali']) ? $ortu['NamaWali'] : "";
		$rtwali = isset($ortu['RT']) ? $ortu['RT'] : "";
		$rwwali = isset($ortu['RW']) ? $ortu['RW'] : "";
		$kabupatenwali = isset($ortu['Kabupaten']) ? $ortu['Kabupaten'] : "";
		$kecamatanwali = isset($ortu['Kecamatan']) ? $ortu['Kecamatan'] : "";
		$kodeposwali = isset($ortu['KodePos']) ? $ortu['KodePos'] : "";
		$notelpwali = isset($ortu['NoTelp']) ? $ortu['NoTelp'] : "";
	?>
	<h3 align="center">ORANG TUA / WALI</h3>
		<div class = "well">
			<div class="form-group">
				<label>Nama Orang Tua</label>
				<input type="text" class="form-control" name="namaortu" placeholder="Nama Lengkap Ayah atau Ibu" value = "<?= $namaortu ?>" required>
			</div>
			<div class="form-group">
				<label>Pekerjaan</label>
				<input type="text" class="form-control" name="pekerjaan" placeholder="Pekerjaan Ayah atau Ibu" value = "<?= $pekerjaan?>" required>
			</div>
			<div class="form-group">
				<label>Agama</label>
					<select class="form-control" name="agamaortu">
						<option <?php if($agamaortu == "Islam") echo "selected"?> value="Islam">Islam</option>
						<option <?php if($agamaortu == "Kristen") echo "selected"?> value="Kristen">Kristen</option>
						<option <?php if($agamaortu == "Katolik") echo "selected"?> value="Katolik">Katolik</option>
						<option <?php if($agamaortu == "Hindu") echo "selected"?> value="Hindu">Hindu</option>
						<option <?php if($agamaortu == "Budha") echo "selected"?> value="Budha">Budha</option>
						<option <?php if($agamaortu == "Konghucu") echo "selected"?> value="Konghucu">Konghucu</option>
					</select>
			</div>
			<div class="form-group">
				<label>Alamat Asal</label>
					<textarea class="form-control" name="alamatasalortu" rows="5"><?= $alamatortu ?></textarea>
			</div>
			<div class="form-group">
				<label>Nama Wali</label>
				<input type="text" class="form-control" name="namawali" placeholder="Nama Wali" value = "<?= $namawali ?>" required>
			</div>
			<div class="form-group">
				<label>Kabupaten</label>
					<input class="form-control" name="kabupatenwali"  value = "<?= $kabupatenwali ?>">
			</div>
			<div class="form-group">
				<label>Kecamatan</label>
					<input class="form-control" name="kecamatanwali" value = "<?= $kecamatanwali ?>">
			</div>
			<div class="form-group">
				<label>Kode Pos</label>
					<input class="form-control" name="kodeposwali" value = "<?= $kodeposwali ?>">
			</div>
			<div class="form-group">
				<label>Nomor Telepon / HP</label>
				<input type="number" class="form-control" name="nohportuwali" placeholder="Nomor Telepon / HP Orang Tua / Wali" value = "<?= $notelpwali ?>" required>
			</div>
			<!-- <a class="btn btn-success" href="datasekolahasal.php">SELANJUTNYA</a> -->
		</div>
	<div class="footer">
		<div class="container">
			<p>Copyright &copy Panitia PSB MUSATI 2019</p>
		</div>
	</div> 