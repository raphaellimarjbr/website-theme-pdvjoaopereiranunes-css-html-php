<?php session_start(); ?>
<!DOCTYPE html>
    <html>
        <head>
            <title>Processo seletivo 2021</title>
            <meta charset="UTF-8" />
            
            <link href="/public/css/page.css" rel="stylesheet" />
            
            <script src="https://kit.fontawesome.com/dc0824ecd1.js" crossorigin="anonymous"></script>
        </head>
        <body>
           <div id="login">
               <span><a href="../index.php"><i class="fas fa-times"></i></a></span>
                <h1>Processo seletivo</h1>
                <form method="POST" action="../models/process.php" >
                    <input type="text" placeholder="Digite o seu nome" name="name" />
                    <input type="text" placeholder="Digite o seu CEP" name="cep" />
                    <input type="text" placeholder="Escola atual" name="school" />
                    <input type="text" placeholder="Série em 2021" name="serie" />
                    <p><?php
                            
                        if(isset($_SESSION["msg"])){
                            echo $_SESSION["msg"];
                            unset($_SESSION["msg"]);
                        }
                            
                    ?></p>
                    <center><button>Inscreva-se</button></center>
                </form>
           </div>
        </body>
    </html>