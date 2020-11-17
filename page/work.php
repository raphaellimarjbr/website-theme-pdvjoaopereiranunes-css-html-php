<?php session_start(); ?>
<!DOCTYPE html>
    <html>
        <head>
            <title>Trabalhe conosco</title>
            <meta charset="UTF-8" />
            
            <link href="/public/css/page.css" rel="stylesheet" />
            
            <script src="https://kit.fontawesome.com/dc0824ecd1.js" crossorigin="anonymous"></script>
        </head>
        <body>
            <div id="login">
                <span><a href="../index.php"><i class="fas fa-times"></i></a></span>
                <h1>Trabalhe conosco</h1>
                <form method="POST" action="../models/resume.php" >
                    <input type="text" placeholder="Digite o seu nome" name="name" />
                    <input type="email" placeholder="Digite o seu email" name="email" />
                    <select name="office" >
                        <option>Cargo</option>
                        <option>Professor</option>
                        <option>Estágio</option>
                        <option>Serviços gerais</option>
                    </select>
                    <label for="resume">Currículo</label>
                    <input type="file" name="resume" id="resume" />
                    <p><?php
                        if(isset($_SESSION["msg"])){
                            echo $_SESSION["msg"];
                            unset($_SESSION["msg"]);
                        }
                    ?></p>
                    <center><button>Enviar</button></center>
                </form>
            </div>
        </body>
    </html>