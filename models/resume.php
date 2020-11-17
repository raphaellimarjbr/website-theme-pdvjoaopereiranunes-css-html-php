<?php

session_start();

class Resume
{

    public function insertValuesDb(){
        
        $host = "localhost";
        $user = "root";
        $password = "";
        $db = "your_db";
        
        $conection = new mysqli($host, $user, $password, $db);
        
        $name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_STRING);
        $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
        $office = filter_input(INPUT_POST, "office", FILTER_SANITIZE_STRING);

        $nameModify = ucfirst(strtolower($name));
        $emailModify = strtolower($email);
        
        if(empty($name) || empty($email) || $office == Cargo){
            $_SESSION["msg"] = "Preencha os dados acima!";
            header("Location: ../page/work.php");
        }else{
            $conection->query("INSERT INTO resumes VALUES(default, '$nameModify', '$emailModify', '$office')");
            $_SESSION["msg"] = "Aguarde 24 horas, seu currículo será analizado!";
            header("Location: ../page/work.php");
        }
    
        
    }
    
}

$resume = new Resume;
$resume->insertValuesDb();

?>
