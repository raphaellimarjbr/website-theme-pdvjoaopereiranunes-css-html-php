<?php

class Conection
{
    public function __construct(){
        $host = "localhost";
        $user = "root";
        $password = "";
        $db = "your_db";
        
        $conection = new mysqli($host, $user, $password, $db);       
    }
}

?>
