<?php
    function loginadmin($username , $password){
        
        $pengguna = database_select("SELECT * FROM pengguna WHERE Pengguna = '{$username}' AND Password ='{$password}'");
        return $pengguna;

    }

    function ambilpengguna($where = ""){
        $pengguna = database_select_daftar("SELECT * FROM pengguna {$where}");
        return $pengguna;
    }

    
    function ambilhanyapengguna($where = ""){
        $pengguna = database_select("SELECT * FROM pengguna {$where}");
        return $pengguna;
    }

    function simpanpengguna($pengguna, $password, $level){
        return database_simpan("INSERT INTO pengguna VALUES (null, '{$pengguna}', '{$password}', {$level})");

    }

    function udatepengguna($id, $pengguna, $password, $level){
        return database_query("UPDATE pengguna SET Pengguna = '{$pengguna}', Password = '{$password}', Level = {$level} WHERE Id = {$id}");

    }

    function deletepengguna($id){
        database_query("DELETE FROM pengguna WHERE Id = {$id}");
    }
?>