<?php
$asalsekolah = isset($peserta['AsalSekolah']) ? $peserta['AsalSekolah'] : "";
$statussekolah = isset($peserta['StatusSekolah']) ? $peserta['StatusSekolah'] : "Negeri";
$alamatsekolah = isset($peserta['AlamatSekolah']) ? $peserta['AlamatSekolah'] : "";
?>
<h3 align="center">DATA SEKOLAH ASAL</h3>
<h4 align="center">( HARAP MENGISI DATA DENGAN LENGKAP DAN BENAR ! )</h4>

<div class="well">
	<div class="form-group">
		<label>Nama Sekolah</label>
		<input type="text" class="form-control" name="namasekolahasal" placeholder="Nama Sekolah Asal" value="<?= $asalsekolah ?>" required>
	</div>
	<div class="form-group">
		<label>Status Sekolah<br>
			<input <?php if ($statussekolah == "Negeri") echo "checked" ?> type="radio" name="statussekolah" value="Negeri"> Negeri<br>
			<input <?php if ($statussekolah == "Swasta") echo "checked" ?> type="radio" name="statussekolah" value="Swasta"> Swasta
		</label>
	</div>
	<div class="form-group">
		<label>Alamat Sekolah Asal</label>
		<textarea class="form-control" name="alamatasalsekolah" rows="5" required><?= $alamatsekolah ?></textarea>
	</div>
	<a onclick="loadTab('tab_3','tab_4')" class="btn btn-success" data-toggle="tab">SELANJUTNYA</a>
</div>
<div class="footer">
	<div class="container">
		<p>Copyright &copy Panitia PSB MUSATI 2019</p>
	</div>
</div>
</body>

</html>