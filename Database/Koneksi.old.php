<?php
namespace Database;

class Koneksi {
    protected $conn = false;
    protected $sql= "";
    protected $statement;
    
    public function __construct(){

        if (!$this->conn) {
            $this->conn = mysqli_connect($db['default']['host'], $db['default']['user'], $db['default']['password'], $db['default']['dbname']) or die('Database connection error');
        } 

    }

    public function koneksi(){
        return $this->conn;
    }

    public function query($sql){
        $this->sql = $sql;

        $this->statement = mysqli_query($this->conn, $this->sql);
        
        if (! $this->statement) {

            $arr = [
                'errCode' => $this->errno(),
                'errMessage' => $this->error(),
                'errQuery' => $this->sql
            ];
            
            return $arr; 

        }
        return $this;
    }

    public function ambil(){

        $list = array();
        if($this->statement){
            while ($row = mysqli_fetch_assoc($this->statement)){
                $list[] = $row;

            }
        }
        mysqli_free_result($this->statement);
        $this->tutupKoneksi();
        if(count($list) == 1){
            return $list[0];
        }
        return $list;
    }

    public function eksekusi(){
        $this->tutupKoneksi();
    }

    public function tutupKoneksi(){
        mysqli_close($this->conn);
    }

}