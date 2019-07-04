<?php

function ambilorangtua($idpeserta){
$peserta = database_select("SELECT * FROM orangtua where Peserta_id = {$idpeserta}");
    return $peserta;
}

function simpanorangtua($idpeserta, $namalengkap, $pekerjaan, $agama, $alamat, 
                    $namawali, $rt, $rw, $kelurahan, $kecamatan, $kodepos, $notelp){
        return database_simpan("INSERT INTO peserta VALUES (null, {$idpeserta},'{$namalengkap}', '{$pekerjaan}', 
                    '{$agama}', '{$alamat}', '{$namawali}','{$rt}', '{$rw}', '{$kelurahan}',
                    '{$kecamatan}', '{$kodepos}', '{$notelp}'");
        
}
?>