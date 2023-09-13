<?php

require 'config.php';

class Database {
    
    protected $host = DB_HOST;
    protected $user = DB_USER;
    protected $pass = DB_PASS;
    protected $dbname = DB_NAME;
    public $conn;

public function __construct() {

    $this->conn = new mysqli($this->host,$this->user,$this->pass,$this->dbname);
    if($this->conn->connect_error){
     die('Connection Problem '.$this->conn -> connect_error);
    }else{
     // echo "Db Connected";
    }

    }    
}
?>