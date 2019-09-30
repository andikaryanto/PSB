<?php

global $reg;
function ambilhanyapeserta($where = ""){
    $cond = "";
    $tahunajaran = ambilhanyatahunajaran("WHERE Aktif = 1");
    if(!empty($where))
        $cond = "AND Tahunajaran_Id = ".$tahunajaran['Id']; 
    else 
        $cond = "WHERE Tahunajaran_Id = ".$tahunajaran['Id'];

    $peserta = database_select("SELECT * FROM peserta {$where} $cond");
    return $peserta;
}

function ambilpeserta($where = ""){
    $cond = "";
    $tahunajaran = ambilhanyatahunajaran("WHERE Aktif = 1");
    if(!empty($where))
        $cond = "AND Tahunajaran_Id = ".$tahunajaran['Id']; 
    else 
        $cond = "WHERE Tahunajaran_Id = ".$tahunajaran['Id'];

    $peserta = database_select_daftar("SELECT * FROM peserta {$where} $cond");
    return $peserta;
}

function simpanpeseta($id, $nodaftar, $nisn, $namalengkap, $jenkel, $tempatlahir, $tgllahir, 
                    $agama, $alamat, $rt, $rw, $kelurahan, $kecamatan, $kodepos,
                    $domisili, $notelp, $asalsekolah, $alamatsekolah, $statussekolah, 
                    $kartumiskin = 0, $status = 0){
        $tahunajaran = ambilhanyatahunajaran("WHERE Aktif = 1");
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
                    '{$statussekolah}', {$kartumiskin}, {$status}, {$tahunajaran['Id']})");
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

function cekpesertaditerima($nodaftar){
    $pengaturan = ambilpengaturan();
    $tahunajaran = ambilhanyatahunajaran("WHERE Aktif = 1");
    if(date_create(tanggalSekarang())>= date_create($pengaturan['TglPengumuman'])){

        $qry = "SELECT * FROM 
        (	
            SELECT a.*, b.Nilai
            FROM peserta a
            INNER JOIN (
                SELECT Peserta_Id, SUM(Nilai) Nilai
                FROM nilaiujian 
                GROUP BY Peserta_Id
            ) b ON a.Id = b.Peserta_Id
            WHERE a.Tahunajaran_Id = {$tahunajaran['Id']}
            ORDER BY b.Nilai  DESC
            LIMIT 0, {$pengaturan['JumlahDiterima']}
        ) A WHERE NoDaftar = '{$nodaftar}'";
        // echo $qry;
        return database_select_daftar($qry);
    }

    return null;
}

function pesertaditerima(){
    $pengaturan = ambilpengaturan();
    $tahunajaran = ambilhanyatahunajaran("WHERE Aktif = 1");
    if(date_create(tanggalSekarang())>= date_create($pengaturan['TglPengumuman'])){

        $qry = " SELECT a.*, b.Nilai, CASE WHEN c.Peserta_Id IS NULL THEN 0 ELSE 1 END Daftarulang
        FROM peserta a
        INNER JOIN (
            SELECT Peserta_Id, SUM(Nilai) Nilai
            FROM nilaiujian 
            GROUP BY Peserta_Id
        ) b ON a.Id = b.Peserta_Id
        LEFT JOIN daftarulang c on c.Peserta_Id = a.Id
        WHERE a.Tahunajaran_Id = {$tahunajaran['Id']}
        ORDER BY b.Nilai  DESC
        LIMIT 0, {$pengaturan['JumlahDiterima']}";

        return database_select_daftar($qry);
    }

    return array();
        
}

function pesertaditolak(){
    $pengaturan = ambilpengaturan();
    $tahunajaran = ambilhanyatahunajaran("WHERE Aktif = 1");
    $limit = 1 * $pengaturan['JumlahDiterima'];
    if(date_create(tanggalSekarang())>= date_create($pengaturan['TglPengumuman'])){

        $qry = " SELECT *, b.Nilai
        FROM peserta a
        INNER JOIN (
            SELECT Peserta_Id, SUM(Nilai) Nilai
            FROM nilaiujian 
            GROUP BY Peserta_Id
        ) b ON a.Id = b.Peserta_Id
        WHERE a.Tahunajaran_Id = {$tahunajaran['Id']}
        ORDER BY b.Nilai DESC
        LIMIT $limit, {$pengaturan['JumlahDiterima']}";

        return database_select_daftar($qry);
    }

    return array();
        
}


