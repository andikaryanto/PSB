	<?php

	$km = isset($peserta['KartuMiskin']) ? $peserta['KartuMiskin'] :(isset($_SESSION['data']['kartumiskin']) ? $_SESSION['data']['kartumiskin'] : 0);
	createCaptcha();
	?>
	<h3 align="center">DATA KARTU KELUARGA MISKIN (JIKA MEMILIKI)</h3>
	<h4 align="center">( HARAP MENGISI DATA DENGAN LENGKAP DAN BENAR ! )</h4>

	<div class="well">
		<div class="form-group">
			<label>MEMILIKI KARTU KELUARGA MISKIN YANG MASIH BERLAKU ?</label><br>
			<input type="radio" <?php if ($km == 1) echo "checked" ?> name="kartumiskin" value="1"> Ya<br>
			<input type="radio" <?php if ($km == 0) echo "checked" ?> name="kartumiskin" value="0"> Tidak
		</div>
		<div class="form-group">
			<img style="width: 150px;" src="<?= $url ?>/assets/img/image.png?dummy=<?= time()?>" alt="gambar" />
		</div>
		<div class="form-group">
			<label>Masukkan Captcha</label>
			<input id = "capt" type="text" class="form-control" name="captcha" required>
		</div>
		
		<a id="cekcaptcha" class="btn btn-success">CEK</a>
		<button disabled id="btndaftar" class="btn btn-success" type="submit">DAFTAR</button>
	</div>
	<div class="footer">
		<div class="container">
			<p>Copyright &copy Panitia PSB MUSATI 2019</p>
		</div>
	</div>
	</body>

	</html>

	<script>
		$(window).bind("pageshow", function() {
			var form = $('form');
			// let the browser natively reset defaults
			form[0].reset();
		});
		$("#cekcaptcha").on("click", function(){
			$.ajax({
				url:"<?= $url ?>Fungsi/Global/CekCaptcha.php",
				type:"POST",
				data:{capt : $("#capt").val()},
				success:function(res){
					console.log(res);
					var btn = document.getElementById("btndaftar");
					if(res == 1){
						alert("Captcha Benar");
						btn.disabled = false;
					} else {
						alert("Captcha Salah");
						btn.disabled = true;

					}
				}
			})
		})
	</script>