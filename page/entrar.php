<?php session_start(); ?>
<!DOCTYPE html>
    <html>
        <head>
            <title>Entrar</title>
            <meta charset="UTF-8" />
            
            <link href="/public/css/page.css" rel="stylesheet" />
            
            <script src="https://kit.fontawesome.com/dc0824ecd1.js" crossorigin="anonymous"></script>
        </head>
        <body>
            <div id="login">
                <span><a href="../index.php"><i class="fas fa-times"></i></a></span>
                <h1>Entrar</h1>
                <form action="../models/login.php" method="POST" >
                    <input type="text" placeholder="Digite o seu usuário" name="userName" />
                    <input type="password" placeholder="Digite a sua senha" name="password" />
                    <select name="office" >
                        <option>Acesso</option>
                        <option>Aluno</option>
                        <option>Professor</option>
                        <option>Administrador</option>
                    </select>
                    <p><?php
                
                    if(isset($_SESSION["msg"])){
                        echo $_SESSION["msg"];
                        unset($_SESSION["msg"]);
                    }
                
                    ?></p>
                    <center><button name="submit">Acessar</button></center>
                </form>
            </div>
        </body>
    </html>