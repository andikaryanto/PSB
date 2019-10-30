<?php

function ambilkelurahan($where = "" ){
    $nilai = database_select("SELECT * FROM kelurahan {$where}");
    return $nilai;
}