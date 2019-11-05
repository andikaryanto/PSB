<?php
$pesertaid = isset($peserta['Id']) ? $peserta['Id'] : "";
$ortu;
if ($pesertaid)
	$ortu = ambilorangtua($pesertaid);

$namaortu = isset($ortu['NamaLengkap']) ? $ortu['NamaLengkap'] : "";
$pekerjaan = isset($ortu['Pekerjaan']) ? $ortu['Pekerjaan'] : "";
$agamaortu = isset($ortu['Agama']) ? $ortu['Agama'] : "";
$alamatortu = isset($ortu['Alamat']) ? $ortu['Alamat'] : "";
$namawali = isset($ortu['NamaWali']) ? $ortu['NamaWali'] : "";
$rtwali = isset($ortu['RT']) ? $ortu['RT'] : "";
$rwwali = isset($ortu['RW']) ? $ortu['RW'] : "";
$kecamatanwali = isset($ortu['Kelurahan']) ? $ortu['Kelurahan'] : "";
$kabupatenwali = isset($ortu['Kabupoa']) ? $ortu['Kecamatan'] : "";
$kodeposwali = isset($ortu['KodePos']) ? $ortu['KodePos'] : "";
$notelpwali = isset($ortu['NoTelp']) ? $ortu['NoTelp'] : "";
?>
<h3 align="center">DATA ORANG TUA / WALI</h3>
<h4 align="center">( HARAP MENGISI DATA DENGAN LENGKAP DAN BENAR ! )</h4>
<div class="well">
	<div class="form-group">
		<label>Nama Orang Tua / Wali</label>
		<input type="text" class="form-control stringonly" name="namaortu" placeholder="Nama Lengkap Ayah atau Ibu / Wali" value="<?= $namaortu ?>" required>
	</div>
	<div class="form-group">
		<label>Pekerjaan</label>
		<input type="text" class="form-control stringonly" name="pekerjaan" placeholder="Pekerjaan Ayah atau Ibu / Wali" value="<?= $pekerjaan ?>" required>
	</div>
	<div class="form-group">
		<label>Agama</label>
		<select class="form-control" name="agamaortu" required>
			<option <?php if ($agamaortu == "Islam") echo "selected" ?> value="Islam">Islam</option>
			<option <?php if ($agamaortu == "Kristen") echo "selected" ?> value="Kristen">Kristen</option>
			<option <?php if ($agamaortu == "Katolik") echo "selected" ?> value="Katolik">Katolik</option>
			<option <?php if ($agamaortu == "Hindu") echo "selected" ?> value="Hindu">Hindu</option>
			<option <?php if ($agamaortu == "Budha") echo "selected" ?> value="Budha">Budha</option>
			<option <?php if ($agamaortu == "Konghucu") echo "selected" ?> value="Konghucu">Konghucu</option>
		</select>
	</div>
	<div class="form-group">
		<label>Alamat Lengkap</label>
		<textarea class="form-control" name="alamatasalortu" rows="5" required required><?= $alamatortu ?></textarea>
	</div>
	<!-- <div class="form-group">
		<label>RT</label>
		<input class="form-control" name="rtwali" value="<?= $rtwali ?>">
	</div>
	<div class="form-group">
		<label>RW</label>
		<input class="form-control" name="rwwali" value="<?= $rwwali ?>">
	</div> -->
	<!-- <div class="form-group">
				<label>Kelurahan</label>
					<input class="form-control" name="kelurahanwali"  value = "<?= $kelurahanwali ?>">
			</div>
			<div class="form-group">
				<label>Kecamatan</label>
					<input class="form-control" name="kecamatanwali" value = "<?= $kecamatanwali ?>">
			</div> -->
	<div class="form-group">
		<label>Kabuaten</label>
		<select id="kabupatenwali" class="form-control" name="kabupatenwali" required>
			<?php $kabupaten = ambilkabupaten();
			foreach ($kabupaten as $kab) :
				?>
				<option value="<?= $kab['Id'] ?>"><?= $kab['Nama'] ?></option>
			<?php endforeach; ?>
		</select>
	</div>
	<div class="form-group">
		<label>Kecamatan</label>
		<select id="kecamatanwali" class="form-control" name="kecamatanwali" required>

		</select>
	</div>
	<div class="form-group">
		<label>Kode Pos</label>
		<input type="number" class="form-control" name="kodeposwali" value="<?= $kodeposwali ?>" required>
	</div>
	<div class="form-group">
		<label>Nomor Telepon / HP</label>
		<input type="number" class="form-control" name="nohportuwali" placeholder="Nomor Telepon / HP Orang Tua / Wali" value="<?= $notelpwali ?>" required>
	</div>
	<a onclick="loadTab('tab_2','tab_3')" class="btn btn-success" data-toggle="tab">SELANJUTNYA</a>
</div>
<div class="footer">
	<div class="container">
		<p>Copyright &copy Panitia PSB MUSATI 2019</p>
	</div>
</div>

<script>
	$(document).ready(function() {
		loadKelurahanwali();
	});

	$("#kabupatenwali").on("change", function() {
		loadKelurahanwali();
	});

	function loadKelurahanwali() {
		$.ajax({
			url: "<?= $url . 'Fungsi/Aksi/Kecamatan_json.php' ?>",
			type: "POST",
			data: {
				kabupaten: $("#kabupatenwali").val()
			},
			success: function(d) {
				var kecamatan = JSON.parse(d);
				$('#kecamatanwali option[value!="a"]').remove();
				for (var i = 0; i < kecamatan.length; i++) {
					$('#kecamatanwali').append(`<option value='${kecamatan[i].Id}'> 
                                       ${kecamatan[i].Nama} 
                                  </option>`);
				}
			}

		})
	}
</script>