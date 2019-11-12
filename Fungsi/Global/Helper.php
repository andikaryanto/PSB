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
        $now = database_select("SELECT NOW() AS Sekarang;");
        return $now['Sekarang'];
    }

    function uploadFotoPath($files){
        $date = new DateTime('now', new DateTimeZone('Asia/Jakarta'));
        $nameex = $date->format("Ymd_His");
        define("SITE_ROOT", getcwd() . DS);
        $uploads_dir = SITE_ROOT.'uploads';
        $tmp_name = $files["file"]["tmp_name"];
        $name = $files["file"]["name"];
        move_uploaded_file($tmp_name, "$uploads_dir/$nameex-$name");
        return "uploads/$nameex-$name";

    }

    function randomAlfabet(){
        $al = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $ral = str_shuffle($al);
        return substr($ral,0,1) . substr($ral,1,1);
    }
?>

