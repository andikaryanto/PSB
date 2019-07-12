<?php
    function formatTanggal($tgl, $format = "", $addsubs =  array()){
        $date = new DateTime($tgl);
        $date->setTimezone(new DateTimeZone('Asia/Jakarta'));

        if($addsubs)
            if($addsubs[0] == "-")
                $date->sub(new DateInterval($addsubs[1]));
            else
                $date->add(new DateInterval($addsubs[1]));

        if(!empty($format))
            return $date->format($format);
        
        return $date->format("d-m-Y");
    }

    function tanggalSekarang(){
        $now = database_query("SELECT NOW() AS Sekarang;");
        return $now[0]['Sekarang'];
    }
?>