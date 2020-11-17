<?php session_start(); ?>
<!DOCTYPE html>
    <html>
        <head>
            <title>Página do administrador</title>
            <meta charset="UTF-8">
        </head>
        <body>
            <div id="container">
                <h1>Olá 
                <?php
                
                if(isset($_SESSION["author"])){
                    echo $_SESSION["author"];
                    unset($_SESSION["author"]);
                }
                
                ?></h1>
                <h1>Usuários</h1>
                
            </div>
        </body>
    </html>