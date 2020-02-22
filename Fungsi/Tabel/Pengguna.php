<?php
    function loginadmin($username , $password){
        
        $pengguna = database_select("SELECT * FROM `admin` WHERE Pengguna = '{$username}' AND Password ='{$password}'");
        return $pengguna;

    }

    function ambilpengguna($where = ""){
        $pengguna = database_select_daftar("SELECT * FROM `admin` {$where}");
        return $pengguna;
    }

    
    function ambilhanyapengguna($where = ""){
        $pengguna = database_select("SELECT * FROM `admin` {$where}");
        return $pengguna;
    }

    function simpanpengguna($pengguna, $password, $level){
        return database_simpan("INSERT INTO `admin` VALUES (null, '{$pengguna}', '{$password}', {$level})");

    }

    function udatepengguna($id, $pengguna, $password, $level){
        return database_query("UPDATE `admin` SET Pengguna = '{$pengguna}', Password = '{$password}', Level = {$level} WHERE Admin_Id = {$id}");

    }

    function deletepengguna($id){
        database_query("DELETE FROM `admin` WHERE Admin_Id = {$id}");
    }
?>