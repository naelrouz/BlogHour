<?php

class ClassName {
    
//    $host = "";
//    $user = "root";
//    $password = "Nael2714";
//    $database = "bh";
    public $mysql;
    function __construct() {
        $this->mysqli = new mysqli("localhost", "bh", "bh", "bh");
    }
    public function query($sql) {
        $this->mysql
    }
}


