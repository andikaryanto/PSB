	<?php
	
		
		$km = isset($peserta['KartuMiskin']) ? $peserta['KartuMiskin'] : 0;
	?>
	<h3 align="center">DATA KARTU KELUARGA MISKIN (JIKA MEMILIKI)</h3>
		
		<div class = "well">
			<div class="form-group">
				<label>MEMILIKI KARTU KELUARGA MISKIN YANG MASIH BERLAKU ?</label><br>
				<input type="radio" <?php if($km == 1) echo "checked"?> name="kartumiskin" value="1"> Ya<br>
				<input type="radio" <?php if($km == 0) echo "checked"?> name="kartumiskin" value="0"> Tidak
			</div>
			<!-- <button class="btn btn-success" type = "submit" >DAFTAR</button> -->
		</div>
	<div class="footer">
		<div class="container">
			<p>Copyright &copy Panitia PSB MUSATI 2019</p>
		</div>
	</div> 
</body>
</html>