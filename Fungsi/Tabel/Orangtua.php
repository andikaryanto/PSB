<?php

function ambilorangtua($idpeserta){
    $peserta = database_select("SELECT * FROM orangtua where Peserta_id = {$idpeserta}");
    return $peserta;
}

function simpanorangtua($idpeserta, $namalengkap, $pekerjaan, $agama, $alamat, 
                    $namawali, $rt, $rw, $kabupaten, $kecamatan, $kodepos, $notelp){
        $ortu = ambilorangtua($idpeserta);
        if($ortu){
            database_query("UPDATE orangtua set NamaLengkap = '{$namalengkap}',
                                                Pekerjaan = '{$pekerjaan}',
                                                Agama = '{$agama}',
                                                Alamat = '{$alamat}',
                                                NamaWali = '{$namawali}',
                                                RT = '{$rt}',
                                                RW = '{$rw}',
                                                Kabupaten_Id = '{$kabupaten}',
                                                Kecamatan_Id = '{$kecamatan}',
                                                KodePos = '{$kodepos}'
                                WHERE id = {$ortu['Id']}
                            ");
            return $ortu['Id'];
        }
        return database_simpan("INSERT INTO orangtua VALUES (null, {$idpeserta},'{$namalengkap}', '{$pekerjaan}', 
                    '{$agama}', '{$alamat}', '{$namawali}', null, null, '{$rt}', '{$rw}', '{$kabupaten}',
                    '{$kecamatan}', '{$kodepos}', '{$notelp}')");
        
}
?>