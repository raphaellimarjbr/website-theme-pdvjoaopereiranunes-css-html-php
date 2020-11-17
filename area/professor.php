<?php session_start(); ?>
<!DOCTYPE html>
    <html>
        <head>
            <title>Página do professor</title>
            <meta charset="UTF-8">
            
            <script src="https://kit.fontawesome.com/dc0824ecd1.js" crossorigin="anonymous"></script>
        </head>
        <body>
            <style>
                *{margin:0;padding:0;font-family:arial;}
                body{display:flex;align-items:center;justify-content:center;height:100vh;background-color:#003324;background-image:url("/src/img/graduation.jpg");background-blend-mode:multiply;background-position:center;}
                #login{
                    padding:10vh;
                    width:50%;
                    height:50vh;
                    background:#fff;
                    display:grid;
                    grid-gap:20px;
                }
                #login form{
                    display:grid;
                    grid-gap:20px;
                }
                #login h1{
                    font-size:40px;
                    text-align:center;
                    text-transform:uppercase;
                }
                #login h2{
                    font-size:20px;
                    color:#333;
                }
                #login table{
                    border-collapse: collapse;
                    height:200px;
                    overflow:scroll;
                }
                #login tr, td, th{
                    border:2px solid #ddd;
                    padding:15px;
                    font-size:15px;
                }
                #login th{
                    background:#ddd;
                    color:#999;
                }
                #login td{
                    color:#333;
                    text-align:justify;
                }
                #login input[type=text], #login input[type=email], #login input[type=password]{
                    border:none;
                    color:#333;
                    border-bottom:2px solid #ddd;
                    width:100%;
                    height:50px;
                    outline:none;
                    font-size:15px;
                }
                #login input[type=text]:focus, #login input[type=email]:focus, #login input[type=password]:focus{
                    border-bottom:2px solid #999;
                }
                #login textarea{
                    border:none;
                    color:#333;
                    border-bottom:2px solid #ddd;
                    width:100%;
                    height:100px;
                    outline:none;
                    font-size:15px;
                    resize:none;
                }
                #login textarea:focus{
                    border-bottom:2px solid #999;
                }
                #login label{
                    font-size:15px;
                    background:#000;
                    color:#fff;
                    cursor:pointer;
                    padding:0 20px;
                    line-height:50px;
                }
                #login input[type=file]{
                    display:none;
                }
                #login select{
                    font-size:15px;
                    padding:0 20px;
                    width:100%;
                    border:none;
                    outline:none;
                    cursor:pointer;
                    height:50px;
                    appearance:none;
                    color:#333;
                    background:#ddd;
                }
                #login select:focus{
                    color:#000;
                }
                #login p{
                    color:#00CC8F;
                    font-size:15px;
                    text-align:center;
                    text-transform:uppercase;
                }
                #login span{
                    float:right;
                    position:absolute;
                    right:3%;
                    top:3%;
                }
                #login span a i{
                    font-size:40px;
                    color:#00CC8F;
                    transition:all ease-in-out 0.3s;
                }
                #login span a i:hover{
                    transform:rotate(180deg);
                }
                #login input[type=submit]{
                    cursor:pointer;
                    background:none;
                    border:none;
                    outline:none;
                    width:100%;
                    line-height:40px;
                    border:2px solid #000;
                    border-radius:10px;
                    color:#000;
                    font-size:15px;
                    font-weight:bold;
                    text-transform:uppercase;
                    position:relative;
                    transition:all .5s;
                }
                #login input[type=submit]:hover{
                    background:#000;
                    color:#fff;
                }
            #login button{
                cursor:pointer;
                background:none;
                border:none;
                outline:none;
                width:150px;
                line-height:50px;
                border:2px solid #000;
                border-radius:10px;
                color:#000;
                font-size:15px;
                font-weight:bold;
                text-transform:uppercase;
                position:relative;
            }
            #login button:hover{
                color:#fff;
            }
            #login button::before{
                content:"";
                display:block;
                width:0;
                height:50px;
                background:#000;
                border-radius:5px;
                position:absolute;
                transition:width .5s;
                color:#fff;
            }
            #login button:hover::before{
                width:100%;
                transition:width .5s;
            }
            </style>
            <div id="login">
                <span><a href="../index.php"><i class="fas fa-times"></i></a></span>
                <h1>Olá, <?php echo $_SESSION["name"]; ?></h1>
                <h2>Criar atividade</h2>
                <form action="../models/activity.php" method="post">
                    <input type="text" placeholder="Nome da atividade" name="title" />
                    <input type="text" name="matter" placeholder="Nome da matéria" />
                    <textarea placeholder="Descrição da atividade" name="description" ></textarea>
                    <p><?php
                
                    if(isset($_SESSION["msg"])){
                        echo $_SESSION["msg"];
                        unset($_SESSION["msg"]);
                    }
                
                    ?></p>
                    <input type="submit" value="Enviar atividade" />
                </form>
            </div>
        </body>
    </html>