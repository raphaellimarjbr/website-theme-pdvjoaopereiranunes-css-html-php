<?php

session_start();

class Activity
{
    public function insert(){
        $nameActivity = filter_input(INPUT_POST, "title" , FILTER_SANITIZE_STRING);
        $descriptionActivity = filter_input(INPUT_POST, "description" , FILTER_SANITIZE_STRING);
        $matterActivity = filter_input(INPUT_POST, "matter" , FILTER_SANITIZE_STRING);
        
        $host = "localhost";
        $user = "root";
        $password = "";
        $db = "your_db";
        
        $teacherActivity = ucfirst($_SESSION["name"]);
                
        $conection = new mysqli($host, $user, $password, $db);
        
        if(empty($nameActivity) || empty($descriptionActivity) || empty($matterActivity)){
            $_SESSION["msg"] = "Preencha os dados acima!";
            header("Location: ../area/professor.php");
        }else{
            $conection->query("INSERT INTO activity VALUES(default, '$nameActivity', '$teacherActivity',  '$descriptionActivity', '$matterActivity')");
            $_SESSION["msg"] = "Você postou sua atividade";
            header("Location: ../area/professor.php");
        }   
    }
}

$activity = new Activity;
$activity->insert();

?>
