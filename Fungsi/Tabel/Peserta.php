<?php

global $reg;
function ambilpeserta($where = ""){
    $peserta = database_select("SELECT * FROM peserta {$where}");
    return $peserta;
}

function simpanpeseta($id, $nodaftar, $nisn, $namalengkap, $jenkel, $tempatlahir, $tgllahir, 
                    $agama, $alamat, $rt, $rw, $kelurahan, $kecamatan, $kodepos,
                    $domisili, $notelp, $asalsekolah, $alamatsekolah, $statussekolah, 
                    $kartumiskin = 0, $status = 0){
        if($id){
            database_query("UPDATE peserta SET NISN = '{$nisn}',
                                                NamaLengkap = '{$namalengkap}',
                                                JenisKelamin = '{$jenkel}',
                                                TempatLahir = '{$tempatlahir}',
                                                TglLahir = '{$tgllahir}',
                                                Agama = '{$agama}',
                                                Alamat = '{$alamat}',
                                                RT = '{$rt}',
                                                RW = '{$rw}',
                                                Kelurahan = '{$kelurahan}',
                                                Kecamatan = '{$kecamatan}',
                                                KodePos = '{$kodepos}',
                                                Domisili = '{$domisili}',
                                                KartuMiskin = {$kartumiskin}
                            WHERE Id = {$id}
                            ");
            return $id;
        } else {
            return database_simpan("INSERT INTO peserta VALUES (null, null, '{$nisn}', '{$namalengkap}', '{$jenkel}', 
                    '{$tempatlahir}', '{$tgllahir}', '{$agama}', '{$alamat}', '{$rt}', '{$rw}', '{$kelurahan}',
                    '{$kecamatan}', '{$kodepos}', '$domisili', '{$notelp}', '{$asalsekolah}', '{$alamatsekolah}',
                    '{$statussekolah}', {$kartumiskin}, {$status})");
        }
        
}

function buatnoreg($idpeserta){
    global $reg;
    $panjang = strlen($reg['sekuens']);
    $noreg = $reg['sekuens'].(string)$idpeserta;
    $noreg = substr($noreg, strlen($panjang) - $panjang - 1, $panjang);
    $noregbaru = $reg['prefix'].$noreg;

    database_query("UPDATE peserta SET NoDaftar = '{$noregbaru}' WHERE Id = {$idpeserta}");
    return $noregbaru;
    
}


