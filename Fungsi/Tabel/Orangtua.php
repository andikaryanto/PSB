<?php

function ambilorangtua($idpeserta){
    $q = 'SELECT a.*, b.Nama Kabupaten, c.Nama Kecamatan 
    FROM orangtua a
    LEFT JOIN kabupaten b on b.Id = a.Kabupaten_Id
    LEFT JOIN kecamatan c on c.Id = a.Kecamatan_Id';
    $peserta = database_select("{$q} where Peserta_id = {$idpeserta}");
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