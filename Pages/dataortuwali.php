<?php
$pesertaid = isset($peserta['Peserta_Id']) ? $peserta['Peserta_Id'] : "";
$ortu;
if ($pesertaid)
	$ortu = ambilorangtua($pesertaid);

$namaortu = isset($ortu['NamaLengkap']) ? $ortu['NamaLengkap'] : (isset($_SESSION['data']['namaortu']) ? $_SESSION['data']['namaortu'] : "");
$pekerjaan = isset($ortu['Pekerjaan']) ? $ortu['Pekerjaan'] : (isset($_SESSION['data']['pekerjaan']) ? $_SESSION['data']['pekerjaan'] : "");
$agamaortu = isset($ortu['Agama']) ? $ortu['Agama'] : (isset($_SESSION['data']['agamortu']) ? $_SESSION['data']['agamortu'] : "");
$alamatortu = isset($ortu['Alamat']) ? $ortu['Alamat'] : (isset($_SESSION['data']['alamatasalortu']) ? $_SESSION['data']['alamatasalortu'] : "");
$namawali = isset($ortu['NamaWali']) ? $ortu['NamaWali'] : "";
$rtwali = isset($ortu['RT']) ? $ortu['RT'] : "";
$rwwali = isset($ortu['RW']) ? $ortu['RW'] : "";
$kecamatanwali = isset($ortu['Kelurahan']) ? $ortu['Kelurahan'] : (isset($_SESSION['data']['kabupatenwali']) ? $_SESSION['data']['kabupatenwali'] : "");
$kabupatenwali = isset($ortu['Kecamatan']) ? $ortu['Kecamatan'] : (isset($_SESSION['data']['kecamatanwali']) ? $_SESSION['data']['kecamatanwali'] : "");
$kodeposwali = isset($ortu['KodePos']) ? $ortu['KodePos'] : (isset($_SESSION['data']['kodeposwali']) ? $_SESSION['data']['kodeposwali'] : "");
$notelpwali = isset($ortu['NoTelp']) ? $ortu['NoTelp'] : (isset($_SESSION['data']['nohportuwali']) ? $_SESSION['data']['nohportuwali'] : "");
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
		<label>Alamat Lengkap di DIY</label>
		<textarea class="form-control" name="alamatasalortu" rows="5" required required><?= $alamatortu ?></textarea>
	</div>

	<div class="form-group">
		<label>Kabupaten</label>
		<select id="kabupatenwali" class="form-control" name="kabupatenwali" required>
			<?php $kabupaten = ambilkabupaten();
			foreach ($kabupaten as $kab) :
				?>
				<option value="<?= $kab['Kabupaten_Id'] ?>"><?= $kab['Nama'] ?></option>
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
		<input id="kodeposwali" maxlength="5" type="text" class="form-control numbered" name="kodeposwali" value="<?= $kodeposwali ?>" required>
	</div>
	<div class="form-group">
		<label>Nomor Telepon / HP</label> 
		<input id="nohportuwali" maxlength="12" type="text" class="form-control numbered" name="nohportuwali" placeholder="Nomor Telepon / HP Orang Tua / Wali" value="<?= $notelpwali ?>" required>
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
			url: '<?= $url ?>Fungsi/Aksi/Kecamatan_json.php',
			type: "POST",
			data: {
				kabupaten: $("#kabupatenwali").val()
			},
			success: function(d) {
				var kecamatan = JSON.parse(d);
				$('#kecamatanwali option[value!="a"]').remove();
				for (var i = 0; i < kecamatan.length; i++) {
					$('#kecamatanwali').append(`<option value='${kecamatan[i].Kecamatan_Id}'> 
                                       ${kecamatan[i].Nama} 
                                  </option>`);
				}
			}

		})
	}
</script>