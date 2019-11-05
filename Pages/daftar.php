<?php
$idpeserta = isset($peserta['Id']) ? $peserta['Id'] : "";
$nodaftar = isset($peserta['NoDaftar']) ? $peserta['NoDaftar'] : "";
$nisn = isset($peserta['NISN']) ? $peserta['NISN'] : "";
$namalengkap = isset($peserta['NamaLengkap']) ? $peserta['NamaLengkap'] : "";
$jenkel = isset($peserta['JenisKelamin']) ? $peserta['JenisKelamin'] : "Perempuan";
$tempatlahir = isset($peserta['TempatLahir']) ? $peserta['TempatLahir'] : "";
$tgllahir = isset($peserta['TglLahir']) ? $peserta['TglLahir'] : "";
$agama = isset($peserta['Agama']) ? $peserta['Agama'] : "";
$alamatasal = isset($peserta['Alamat']) ? $peserta['Alamat'] : "";
$rt = isset($peserta['RT']) ? $peserta['RT'] : "";
$rw = isset($peserta['RW']) ? $peserta['RW'] : "";
$kabupaten = isset($peserta['Kabupaten_Id']) ? $peserta['Kabupaten_Id'] : "";
$kecamatan = isset($peserta['Kecamatan_Id']) ? $peserta['Kecamatan_Id'] : "";
$kodepos = isset($peserta['KodePos']) ? $peserta['KodePos'] : "";
$domisili = isset($peserta['Domisili']) ? $peserta['Domisili'] : "";
$notelp = isset($peserta['NoTelp']) ? $peserta['NoTelp'] : "";
?>

<h3 align="center">DATA CALON SISWA BARU</h3>
<h4 align="center">( HARAP MENGISI DATA DENGAN LENGKAP DAN BENAR ! )</h4>
<div class="well">
	<input hidden name="idpeserta" value="<?= $idpeserta ?>">
	<input hidden name="nodaftar" value="<?= $nodaftar ?>">
	<div class="form-group">
		<label>NISN</label>
		<input type="number" class="form-control" name="nisn" placeholder="Nomor Induk Siswa Nasional" value="<?= $nisn ?>" required>
	</div>
	<div class="form-group">
		<label>Nama Lengkap (Sesuai Ijazah)</label>
		<input type="text" class="form-control stringonly" name="namalengkap" placeholder="Nama Lengkap" value="<?= $namalengkap ?>" required>
	</div>
	<div class="form-group">
		<label>Jenis Kelamin<br>
			<input type="radio" name="jeniskelamin" value="Perempuan" <?php if ($jenkel == "Perempuan") echo "checked" ?>> Perempuan<br>
			<input type="radio" name="jeniskelamin" value="Laki - Laki" <?php if ($jenkel == "Laki - laki") echo "checked" ?>> Laki - laki
		</label>
	</div>
	<div class="form-group">
		<label>Tempat Lahir</label>
		<input type="text" class="form-control stringonly" name="tempatlahir" placeholder="Tempat Lahir" value="<?= $tempatlahir ?>" required>
	</div>
	<div class="form-group">
		<label>Tanggal Lahir</label>
		<input type="date" class="form-control" name="tanggallahir" placeholder="Tanggal Lahir" value="<?= $tgllahir ?>" required>
	</div>
	<div class="form-group">
		<label>Agama</label>
		<select class="form-control" name="agama" required>
			<option <?php if ($agama == "Islam") echo "selected" ?> value="Islam">Islam</option>
			<option <?php if ($agama == "Kristen") echo "selected" ?> value="Kristen">Kristen</option>
			<option <?php if ($agama == "Katolik") echo "selected" ?> value="Katolik">Katolik</option>
			<option <?php if ($agama == "Hindu") echo "selected" ?> value="Hindu">Hindu</option>
			<option <?php if ($agama == "Budha") echo "selected" ?> value="Budha">Budha</option>
			<option <?php if ($agama == "Konghucu") echo "selected" ?> value="Konghucu">Konghucu</option>
		</select>
	</div>
	<div class="form-group">
		<label>Alamat Asal</label>
		<textarea class="form-control" name="alamatasal" rows="5" required><?= $alamatasal ?></textarea>
	</div>
	<div class="form-group">
		<label>Alamat di DIY</label>
		<textarea class="form-control" name="alamatdiy" rows="5" required><?= $domisili ?></textarea>
	</div>
	<div class="form-group">
		<label>Kabupaten</label>
		<select id="kabupaten" class="form-control" name="kabupaten" required>
			<?php $kabupaten = ambilkabupaten();
			// echo json_encode($kabupaten);
			foreach ($kabupaten as $kab) :
			?>
				<option value="<?= $kab['Id'] ?>" <?php if($kab['Id'] == $kabupaten) echo "selected" ?>><?= $kab['Nama'] ?></option>
			<?php endforeach; ?>
		</select>
	</div>
	<div class="form-group">
		<label>Kecamatan</label>
		<select id="kecamatan" class="form-control" name="kecamatan" required>

		</select>
	</div>
	<div class="form-group">
		<label>Kode Pos</label>
		<input type="number" class="form-control" name="kodepos" value="<?= $kodepos ?>" required>
	</div>
	<div class="form-group">
		<label>Nomor Telepon / HP</label>
		<input type="number" class="form-control" name="nohpsiswa" placeholder="Nomor Telepon / HP Calon Siswa Baru" value="<?= $notelp ?>" required>
	</div>
	<div class="form-group">
		<label>Pas Foto</label>
		<input type="file" class="form-control" name="file" accept="image/png, image/jpeg" required>
	</div>
	<a onclick = "loadTab('tab_1','tab_2')" class="btn btn-success" data-toggle="tab">SELANJUTNYA</a>
</div>
<div class="footer">
	<div class="container">
		<p>Copyright &copy Panitia PSB MUSATI 2019</p>
	</div>
</div>

<script>
	$(document).ready(function() {
		loadKecamatan();
	});
	

	$("#kabupaten").on("change", function() {
		loadKecamatan();
	});

	function loadKecamatan() {
		var kecamatan = '<?= $kecamatan?>';
		$.ajax({
			url: "<?= $url . 'Fungsi/Aksi/Kecamatan_json.php' ?>",
			type: "POST",
			data: {
				kabupaten: $("#kabupaten").val()
			},
			success: function(d) {
				var kecamatan = JSON.parse(d);
				$('#kecamatan option[value!="a"]').remove();
				for (var i = 0; i < kecamatan.length; i++) {
					var selected = "";
					if(kecamatan == kecamatan[i].Id)
						selected = "selected";

					$('#kecamatan').append(`<option value='${kecamatan[i].Id} ${selected}'> 
                                       ${kecamatan[i].Nama} 
                                  </option>`);
				}
			}

		})
	}
</script>