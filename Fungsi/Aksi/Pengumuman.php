<?php

 $pengaturan = ambilpengaturan();
 if($pengaturan && ( date_create(tanggalSekarang()) >= date_create($pengaturan['TglPengumuman']))){
    hapusPengumuman();
    $sukses = pengumuman();
    if($sukses == true){
        header("Location: $url"."pages/admin/aksi/pengumuman.php?sukses=true");
    } else {
        header("Location: $url"."pages/admin/aksi/pengumuman.php?sukses=false");
    }
} else if($pengaturan && ( date_create(tanggalSekarang()) < date_create($pengaturan['TglPengumuman']))) {
    // echo tanggalSekarang();
    header("Location: $url"."pages/admin/aksi/pengumuman.php?sukses=false&pesan=belum");
}
