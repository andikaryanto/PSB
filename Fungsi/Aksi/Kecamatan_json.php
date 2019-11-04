<?php

$kecamatan = ambilkecamatan("WHERE Kabupaten_Id = {$_POST['kabupaten']}");
echo json_encode($kecamatan);