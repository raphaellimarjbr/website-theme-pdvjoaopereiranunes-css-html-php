<?php

include_once "core/index.php";

class Index
{
    private $nameWebsite = "João Pereira";
    
    public function getNameWebsite(){
        echo $this->nameWebsite;
    }
    
    public function addNameWebsite($title){
        echo $this->nameWebsite." - ".$title;
    }
    
    public function getUrl(){
        $url = (isset($_GET["url"])) ? $_GET["url"]:"page/index.php";
        $url = array_filter(explode("/", $url));
        
        $file = $url[0].".php";
        
        if(is_file($file)){
            include $file;
        }else{
            include "page/index.php";
        }
    }
    
}

$index = new Index;
$index->getUrl();

?>