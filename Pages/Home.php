<?php 
use Database\Koneksi;
$koneksi = new Koneksi();
$datas = $koneksi->query("SELECT * FROM m_foods")->ambil();
// echo "a";
// count($datas);
foreach($datas as $data){
    echo $data['Name'];
}