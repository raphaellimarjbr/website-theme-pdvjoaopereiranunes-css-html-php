<?php

class Core
{
    public function getUrl(){
        if($_GET){
            $url = explode("/", $_GET["url"]);
            include_once "../views/".$url[0].".php";
        }
    }    
}

?>