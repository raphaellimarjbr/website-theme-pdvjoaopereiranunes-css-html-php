<?php

session_start();

class Login
{
    
    public function getInputs(){
        
        $host = "localhost";
        $user = "root";
        $password = "";
        $db = "your_db";
        
        $userName = filter_input(INPUT_POST, "userName", FILTER_SANITIZE_STRING);
        $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING);
        $office = filter_input(INPUT_POST, "office", FILTER_SANITIZE_STRING);
        
        $officeModify = strtolower($office);
        
        $conection = new mysqli($host, $user, $password, $db);
        
        $select = $conection->query("SELECT * FROM users WHERE username = .'$userName'. AND password = .'$password'. AND office = .'$office'.");
        
        if($select->num_rows == 1){
            $_SESSION["msg"] = "Preencha os dados acima!";
            header("Location: /page/entrar.php");
        }else{

            if(empty($userName) || empty($password) || $office == "Acesso"){
                $_SESSION["msg"] = "Preencha os dados acima!";
                header("Location: /page/entrar.php");
            }else{
                $_SESSION["name"] = $userName;
                header("Location: /area/{$officeModify}.php");
            }
            
        }
        
        if($userName == "admin" && $password == "admin" && $office == "Administrador"){
                $_SESSION["author"] = "Administrador";
                header("Location: ../area/admin.php");
        }
        
    }
    
}

$login = new Login;
$login->getInputs();

?>
