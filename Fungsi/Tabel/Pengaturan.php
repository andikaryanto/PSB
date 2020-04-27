<?php

    function ambilpengaturan(){
        $pengaturan = database_select("SELECT * FROM pengaturan");
        return $pengaturan;
    }

    function simpanpengaturan($tglmulaidaftar, $tglselesaidaftar, $tglpengumuman, $jmlditerima, $kepsek, $info){
        $pengaturan = ambilpengaturan();
        if(count($pengaturan) > 0)
            database_query("UPDATE pengaturan SET TglMulaiPendaftaran = '{$tglmulaidaftar}',
                                                    TglSelesaiPendaftaran = '{$tglselesaidaftar}',
                                                    TglPengumuman = '{$tglpengumuman}',
                                                    JumlahDiterima = {$jmlditerima},
                                                    KepalaSekolah = '{$kepsek}',
                                                    Info = '{$info}'");
        else 
            database_simpan("INSERT INTO pengaturan VALUES (null, '', '{$tglmulaidaftar}', '{$tglselesaidaftar}', '{$tglpengumuman}', {$jmlditerima}, 1, '{$kepsek}', '{$info}')");

    }
?>