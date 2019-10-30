<?php

$kelurahan = ambilkelurahan("WHERE Kecamatan_Id = {$_POST['kecamatan']}");
echo json_encode($kelurahan);