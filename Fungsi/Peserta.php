<?php

function ambilpeserta(){
    $peserta = database_select("SELECT * FROM peserta");
    return $peserta;
}

function simpanpeseta($nisn, $namalengkap, $jenkel, $tempatlahir, $tgllahir, 
                    $agama, $alamat, $rt, $rw, $kelurahan, $kecamatan, $kodepos,
                    $domisili, $notelp, $asalsekolah, $alamatsekolah, $statussekolah, 
                    $kartumiskin = 0, $status = 0){
        return database_simpan("INSERT INTO peserta VALUES (null, null, '{$nisn}', '{$namalengkap}', '{$jenkel}', 
                    '{$tempatlahir}', '{$tgllahir}', '{$agama}', '{$alamat}', '{$rt}', '{$rw}', '{$kelurahan}',
                    '{$kecamatan}', '{$kodepos}', '$domisili', '{$notelp}', '{$asalsekolah}', '{$alamatsekolah}',
                    '{$statussekolah}', {$kartumiskin}, {$status})");
        
}
