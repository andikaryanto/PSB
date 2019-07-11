<?php
global $conn;
$conn = mysqli_connect($db['default']['host'], $db['default']['user'], $db['default']['password'], $db['default']['dbname']) or die('Database connection error');

function database_query($sql){
    global $conn;
    $result = mysqli_query($conn, $sql);
}

function database_select_daftar($sql){
    global $conn;
    $result = mysqli_query($conn, $sql);
    $data = [];
    while($row = mysqli_fetch_assoc($result)){
        $data[] = $row;
    }

    return $data;

}

function database_select($sql){
    global $conn;
    $result = mysqli_query($conn, $sql);
    $data = [];
    while($row = mysqli_fetch_assoc($result)){
        $data[] = $row;
    }

    if(count($data) == 1){
        return $data[0];
    }
    return $data;

}

function database_simpan($sql){
    global $conn;
    mysqli_query($conn, $sql);
    return mysqli_insert_id($conn);

}