<?php

function ambilorangtua($idpeserta){
    $peserta = database_select("SELECT * FROM orangtua where Peserta_id = {$idpeserta}");
    return $peserta;
}

function simpanorangtua($idpeserta, $namalengkap, $pekerjaan, $agama, $alamat, 
                    $namawali, $rt, $rw, $kelurahan, $kecamatan, $kodepos, $notelp){
        $ortu = ambilorangtua($idpeserta);
        if($ortu){
            database_query("UPDATE orangtua set NamaLengkap = '{$namalengkap}',
                                                Pekerjaan = '{$pekerjaan}',
                                                Agama = '{$agama}',
                                                Alamat = '{$alamat}',
                                                NamaWali = '{$namawali}',
                                                RT = '{$rt}',
                                                RW = '{$rw}',
                                                Kelurahan = '{$kelurahan}',
                                                Kecamatan = '{$kecamatan}',
                                                KodePos = '{$kodepos}'
                                WHERE id = {$ortu['Id']}
                            ");
            return $ortu['Id'];
        }
        return database_simpan("INSERT INTO orangtua VALUES (null, {$idpeserta},'{$namalengkap}', '{$pekerjaan}', 
                    '{$agama}', '{$alamat}', '{$namawali}', null, null, '{$rt}', '{$rw}', '{$kelurahan}',
                    '{$kecamatan}', '{$kodepos}', '{$notelp}')");
        
}
?>