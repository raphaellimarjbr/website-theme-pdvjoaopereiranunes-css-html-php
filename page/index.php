<?php $index = new Index; session_start(); ?>

<!DOCTYPE html>
    <html>
        <head>
            <title><?php echo $index->addNameWebsite("Home"); ?></title>
            <meta charset="UTF-8">

            <script src="https://kit.fontawesome.com/dc0824ecd1.js" crossorigin="anonymous"></script>
            
            <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
            
        </head>
        <body>
            <style>
                /* INITIAL SETTINGS */

*{margin:0;padding:0;font-family:arial;}
body{background:#fff;}
a{text-decoration:none;}
li{list-style:none;float:left;}
html{scroll-behavior:smooth;}
body{
    display:grid;
    grid-template-areas:"header header" "slide slide" "container container" "footer footer";
    grid-template-rows:15vh 85vh 1fr 20vh;
    grid-template-columns:1fr;
}
#margin{margin:0 auto;width:80%;}
#left{float:left;}
#right{float:right;}

#header, #slide, #container, #footer, .arrow{
    display:grid;
    align-items:center;
}

/* HEADER */

#header{
    grid-area:header;
}

#header #left{
    width:10%;
}

    /* Title */

    #header .title{
        margin:25% 0;
    }
    #header .title h1{
        text-transform:uppercase;
        font-size:40px;
        color:#000;
    }

    /* Menu */
        
        .menu ul li{
            text-transform:uppercase;
            font-size:15px;
        }

        .menu ul li a{
            display:block;
            color:#999;
            margin:20px 15px;
        }
        
        .menu ul li a:hover{
            color:#fff;
        }
        
        .menu ul li a::after{
            content:"";
            display:block;
            width:0;
            height:1px;
            background:#fff;
            transition:width .3s;
            position:relative;
            top:5px;
        }
        
        .menu ul li a:hover::after{
            width:100%;
            transition:width .3s;
        }

        /* Area */

            .area{
                margin:25% 0;
            }
            .area button{
                border:none;
                background:none;
                outline:none;
            }
            .area button a{
                display:block;
                width:150px;
                line-height:50px;
                border:2px solid #00CC8F;
                border-radius:10px;
                color:#00CC8F;
                font-size:15px;
                font-weight:bold;
                text-transform:uppercase;
                box-shadow:10px 10px 50px rgb(0,0,0,0.1);
                position:relative;
            }
            .area button a:hover{
                color:#fff;
            }
            .area button a::before{
                content:"";
                display:block;
                width:0;
                height:50px;
                background:#00CC8F;
                border-radius:5px;
                z-index:-1;
                position:absolute;
                transition:width .5s;
            }
            .area button a:hover::before{
                width:100%;
                transition:width .5s;
            }


/* SLIDER */

#slide{
    grid-area:slide;
    background-color:#003324;
    background-image:url("/src/img/graduation.jpg");
    background-blend-mode:multiply;
    background-position:center;
    background-attachment:fixed;
    flex-wrap:wrap;
}

    /* Text */

    #slide .text{
        float:left;
        width:70%;
    }

    #slide .text h1{
        font-size:55px;
        color:#fff;
        text-transform:uppercase;
    }

    #slide .text h1 span{
        font-weight:normal;
        font-style:italic;
    }

        /* Button */

            #slide .button{
                margin:20px 0;
            }

            #slide .button button{
                background:none;
                border:none;
                height:50px;
                text-transform:uppercase;
                font-size:15px;
                font-weight:bold;
                outline:none;
            }
            #slide .button button a{
                display:block;
                background:#00FFB2;
                line-height:50px;
                border-radius:10px;
                width:200px;
                color:#00996B;
                transition:all,linear,0.5s;
                animation:button 1.7s ease-in-out infinite;
            }
            @keyframes button{
                0%{
                    color:#003324;
                }
                50%{
                    color:#00996B;
                }
                100%{
                    color:#003324;
                }
            }

/* HOME */

#container .title{
    text-transform:uppercase;
    margin:20px 0;
    text-align:center;
}

#container .title h1{
    font-size:40px;
    color:#000;
}

    /* Page */
    
    .page{
        display:flex;
        align-items:center;
        justify-content:center;
        flex-flow:column;
        margin:10vh 0;
    }
    
    /* Page Teachers */
    
    #teachers{
        margin:20px 0;
        display:grid;
        grid-template-columns:1fr 1fr 1fr 1fr;
        grid-gap:25px;
    }
    
    #teachers div{
        height:25vh;
        background:#fff;
    }
    
    #teachers div img{
        width:100%;
        height:100%;
        object-fit:cover;
    }
    
    #teachers div h1{
        font-weight:normal;
        font-size:20px;
        color:#333;
        margin:20px 0;
    }
    
    /* Page Depositions */
    
    #depositions{
        display:flex;
        grid-template-columns:1fr 1fr 1fr;
        grid-gap:25px;
    }
    #depositions div h1{
        font-size:20px;
        text-align:center;
        margin:20px 0;
        color:#333;
        font-weight:normal;
    }
    #depositions div p{
        text-align:justify;
        font-size:15px;
        color:#999;
    }

    /* Page Photos */

        #photos{
            display:grid;
            grid-template-columns:1fr 1fr;
            grid-gap:25px;
            margin:20px 0;
        }
        
        #photos div{
            height:50vh;
            overflow:hidden;
        }
        
        #photos div img{
            width:100%;
            height:100%;
            object-fit:cover;
            transition:transform .5s;
        }
        #photos div img:hover{
            transform:scale(1.2);
        }
        
        .photoEffect{
            width:100%;
            height:100vh;
        }
        

    /* Display none */
    
    .work, .proccess{
        display:none;
    }

    /* Page Work with us*/

        #formulario{
            align-items: center;
            text-align: center;
        }
        

        .formtrabalho{
            width: 110vh;
            height: 50vh;
            background-color:#e3e3e3;
            position: normal;
            padding: 10px;
            border-radius: 6px;
        }

        .homeparagraph{
            margin-bottom: 5px;
            margin-right: 10px;
            font-size: 17px;
            font-weight: 300;
        }

        .nomepessoa, .emailpessoa, .ceppessoa, .ddd, .telefonepessoa, .profissaopessoa, .funcaopessoa{
            margin-bottom: 15px;
            padding-left: 5px;
        }

        #container .inputs{
            display:grid;
            grid-template-columns:1fr 1fr;
            grid-gap:25px;
        }

        #container input[type=text], #container input[type=email]{
            width:100%;
            border:none;
            background:none;
            border-bottom:2px solid #ddd;
            outline:none;
            height:50px;
            font-size:15px;
        }

        .allspans{
            color: red;
        }

    /* Logo */

    .logo{
        float:right;
        width:150px;
        height:150px;
        position:relative;
    }
    .logo img{
        width:100%;
        height:100%;
        position:absolute;
    }

/* CONTAINER */

#container{
    flex-flow:column;
    grid-area:container;
}

/* FOOTER */

#footer{
    background:#000;
    grid-area:footer;
    justify-content:center;
}
#footer .title{
    text-transform:uppercase;
    text-align:center;
}
#footer .title h1{
    font-size:40px;
    color:#00FFB2;
}

    /* Text */

    .text{
        align-content: center;
    }
            </style>
            <header id="header">
                <div id="margin">
                    <div id="left">
                        <div class="title">
                            <h1><?php echo $index->getNameWebsite(); ?></h1>
                        </div>
                    </div>
                    <div id="right">
                        <div class="area">
                            <button><a href="/page/entrar.php">Entrar</a></button>
                        </div>
                    </div>
                </div>
            </header>
            <div id="slide">
                <div id="margin">
                    <div class="text">
                        <h1>Deseja <span>passar</span> para alguma <span>faculdade</span>?</h1>
                        <div class="button">
                            <button><a href="#container">Conheça mais</a></button>
                        </div>
                    </div>
                    <div class="logo">
                        <img src="/src/svg/graduation.svg"/>
                    </div>
                </div>
            </div>
            <div id="margin">
            <div id="container">
                <div class="page teachers">
                    <div class="title">
                        <h1>Professores</h1>
                    </div>
                    <div id="teachers">
                        <div>
                            <img src="https://educacaoinfantil.aix.com.br/wp-content/uploads/2019/04/como-tornar-professores-e-colaboradores-os-maiores-aliados-da-sua-escola-20190301114122.jpg.jpg" />
                            <h1>Leila</h1>
                        </div>
                        <div>
                            <img src="https://www.jornalcontabil.com.br/wp-content/uploads/2019/07/senior-masculino-professor-segurando-o-livro-e-escrevendo-no-quadro-negro_23-2148200974-1200x675.jpg" />
                            <h1>João</h1>
                        </div>
                        <div>
                            <img src="https://nova-escola-producao.s3.amazonaws.com/TBZ6peTbK7Qe2DUk6H3xkWK3rEbWsTa56Kxuz7HjTt9NtPyrH5N28EJKPkeT/professor-ensina-alunos.png" />
                            <h1>Emanuel</h1>
                        </div>
                        <div>
                            <img src="https://fmnews.com.br/wp-content/uploads/2020/07/273098-entenda-qual-e-o-papel-do-professor-na-educacao-dos-alunos-940x617.jpg" />
                            <h1>Sarah</h1>
                        </div>
                    </div>
                </div>
                    <div class="page">
                        <div class="title">
                            <h1>Depoimentos</h1>
                        </div>
                        <div id="depositions">
                            <div>
                                <h1>Raphael Lima</h1>
                                <p>Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos.</p>
                            </div>
                            <div>
                                <h1>Fabricio freitas</h1>
                                <p>Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos.</p>
                            </div>
                            <div>
                                <h1>Ryan de souza</h1>
                                <p>Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos.</p>
                            </div>
                        </div>
                    </div>
                    <div class="page photos">
                        <div class="title">
                            <h1>Fotos</h1>
                        </div>
                        <div id="photos">
                            <div>
                                <img src="https://deolhonofuturo.uninter.com/wp-content/uploads/2019/05/original-bf4251b36183894a34ab5f1d9d21e341-1200x675.jpg" />
                            </div>
                            <div>
                                <img src="https://wscom.com.br/wp-content/uploads/2020/08/faculdade-aula-escola-sala-de-aula.jpg" />
                            </div>
                        </div>
                    </div>
                    <div class="page work">
                        <div class="title">
                            <h1>Trabalhe conosco</h1>
                        </div>
                        <form method="POST" action="../models/resume.php" >
                            <div class="inputs">
                                <input type="text" placeholder="Seu o seu nome" name="name" />
                                <input type="email" placeholder="Digite o seu email" name="email" />
                            </div>
                            <select name="office" >
                                <option>Cargo</option>
                                <option>Professor</option>
                                <option>Estágio</option>
                                <option>Serviços gerais</option>
                            </select>
                            <input type="file" name="resume" accept=".pdf, .doc, .docx" placeholder="sdsddad" />
                            <p><?php
                            
                                if(isset($_SESSION["msg"])){
                                    echo $_SESSION["msg"];
                                    unset($_SESSION["msg"]);
                                }
                            
                            ?></p>
                            <button>Enviar</button>
                        </form>
                    </div>
                    <div class="page proccess">
                        <div class="title">
                            <h1>Processo seletivo</h1>
                        </div>
                        <form method="POST" action="../models/process.php" >
                            <div class="inputs">
                                <input type="text" placeholder="Seu o seu nome" name="name" />
                                <input type="email" placeholder="Digite o seu email" name="email" />
                            </div>
                            <p><?php
                            
                                if(isset($_SESSION["msg"])){
                                    echo $_SESSION["msg"];
                                    unset($_SESSION["msg"]);
                                }
                            
                            ?></p>
                            <button>Inscreva-se</button>
                        </form>
                    </div>
                </div>
            </div>
            <footer id="footer">
                    <div class="text">
                        <div class="title">
                            <h1><?php echo $index->getNameWebsite(); ?></h1>
                        </div>
                        <div class="menu">
                            <ul>
                                <li><a href="https://well-respected-sail.000webhostapp.com/page/work.php">Trabalhe Conosco</a></li>
                                <li><a href="https://well-respected-sail.000webhostapp.com/page/process.php">Processo seletivo</a></li>
                            </ul>                      
                        </div>
                </div>
            </footer>
        </body>
    </html>