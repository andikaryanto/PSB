<?php
function pengumuman()
{
    $pengaturan = ambilpengaturan();
    $tahunajaran = ambilhanyatahunajaran("WHERE Aktif = 1");
    if (date_create(tanggalSekarang()) >= date_create($pengaturan['TglPengumuman'])) {

        $qry = " INSERT INTO pengumuman (Id, Peserta_Id, TahunAjaran_Id)
            SELECT null, a.Id, a.Tahunajaran_Id
            FROM peserta a
            INNER JOIN (
                SELECT Peserta_Id, SUM(Nilai) Nilai
                FROM nilaiujian 
                GROUP BY Peserta_Id
            ) b ON a.Id = b.Peserta_Id
            WHERE a.Tahunajaran_Id = {$tahunajaran['Id']}
            ORDER BY b.Nilai  DESC
            LIMIT 0, {$pengaturan['JumlahDiterima']}";

        database_query($qry);
        return true;
    }
    return false;
}

function hapusPengumuman()
{

    $tahunajaran = ambilhanyatahunajaran("WHERE Aktif = 1");
    $qry = " DELETE FROM pengumuman Where TahunAjaran_Id = {$tahunajaran['Id']}";
    database_query($qry);
}
