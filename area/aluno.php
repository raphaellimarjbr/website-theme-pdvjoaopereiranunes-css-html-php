<?php session_start();

$host = "localhost";
        $user = "id14069669_raphael";
        $password = "r11072019R#*";
        $db = "id14069669_site";
        
        $conection = new mysqli($host, $user, $password, $db);
        
        $sql = $conection->query("SELECT * FROM activity ORDER BY id DESC");

?>
<!DOCTYPE html>
    <html>
        <head>
            <title>Página do aluno</title>
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
                    height:300px;
                    overflow:inherit;
                    display:block;
                    overflow-x:hidden;
                    padding-right:15px;
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
                    width:25%;
                }
                #login p{
                    padding-right:10px;
                    height:100px;
                    overflow:inherit;
                    overflow-x:hidden;
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
                    font-size:15px;
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
                <h2>Minhas atividades</h2>
                <table>
                    <tr>
                        <th>Matéria</th>
                        <th>Professor</th>
                        <th>Nome</th>
                        <th>Descrição</th>
                    </tr>
                    <?php while($exibe = $sql->fetch_assoc()){ ?>
                    <tr>
                        <td><?php echo $exibe["matter"]; ?></td>
                        <td><?php echo $exibe["teacher"]; ?></td>
                        <td><?php echo $exibe["title"]; ?></td>
                        <td><p><?php echo $exibe["description"]; ?></p></td>
                    </tr>
                    <?php } ?>
                </table>
            </div>
        </body>
    </html>