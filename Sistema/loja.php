<?php
require_once("config.php");
if($_SESSION['user']==NULL){
    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="loja.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
</head>
<body>

    <header class="max-width bg" id="Home">
            <div class="container">
                <nav class="menu">
                    <div class="logo"></div>
                    <div class="desktop-menu">
                        <ul>
                            <li><a href="#Home">Home</a></li>
                            <li><a href="#About">Novidades</a></li>
                            <li><a href="#Service">Destaque</a></li>
                        </ul>
                    </div>

                    <div class="mobile-menu" onclick="myFunction()">
                        <i class="fa fa-bars"></i>
                        <ul id="myLinks">
                            <li><a href="#Home">Home</a></li>
                            <li><a href="#About">Novidades</a></li>
                            <li><a href="#Service">Destaque</a></li>
                        </ul>
                    </div>
                </nav>
                <div class="call">
                    <div class="left">
                        <h1 class="color-azul text-gd">Sobre a loja</h1>
                        <p class="color-azul text-pq">Lorem ipsum dolor sit amet, consectetur 
                            adipiscing elit, sed do eiusmod tempor incididunt ut labore 
                            et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                            exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                    <div class="right">
                        <div class="imagem">
                            <img src="image/r9.png" alt="">
                        </div>
    
                    </div>
                </div>
            </div>
            <button id="back-to-top">^</button>
    </header>

    <section class="max-width bg2" id="About">
        <div class="container">
            <div class="titulo">
                <h2 class="text-md color-cinza-1">Novidades</h2>
                <div class="line">
                    <div class="text-titulo">Roupas</div>
                </div>
            </div>
            <div class="down">
                <div class="box">
                    <img src="https://s3-sa-east-1.amazonaws.com/loja2/96d49e31fdb622129321260f7b04c703.jpg" alt="">
                    <div class="text">
                        <h2 class="color-branco">Conjunto</h2>
                        <p class="color-branco">Coleção de Inverno</p>
                    </div>
                </div>
                <div class="box">
                    <img src="https://a-static.mlcdn.com.br/1500x1500/calca-moletom-infantil-peppa-pig-code-modas/codemodas/14984364571/6111804ce1ccafb2d7bcc3b69e5ba355.jpeg" alt="">
                    <div class="text">
                        <h2 class="color-branco">Calça moletom</h2>
                        <p class="color-branco">Coleção de Inverno</p>
                    </div>
                </div>
                <div class="box">
                    <img src="https://a-static.mlcdn.com.br/800x560/tenis-infantil-led-luz-peppa-pig-meninas-feminino-eds/pemania/5265-5587/e03fbf4ea870ac0cdd144efcd5d029ba.jpeg" alt="">
                    <div class="text">
                        <h2 class="color-branco">Tenis</h2>
                        <p class="color-branco">Coleção de Inverno</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="max-width bg" id="Service">
        <div class="container">
            <div class="content">
                <div class="titulo">
                    <h2 class="text-md color-cinza-1">Destaque</h2>
                    <div class="line">
                        <div class="text-titulo">Promoções</div>
                    </div>
                </div>
                    <input type="radio" name="slider" id="item-1" checked>
                    <input type="radio" name="slider" id="item-2">
                    <input type="radio" name="slider" id="item-3">
                    <div class="cards">
                        <label class="card" for="item-1" id="song-1">
                            <img src="https://static3.tcdn.com.br/img/img_prod/577735/roupa_patrulha_canina_18946187_1_1134cb27db2a55ca5b64f32832f3c9de.jpg" alt="">
                            <button>Comprar Agora</button>
                        </label>

                        <label class="card" for="item-2" id="song-2">
                            <img src="https://http2.mlstatic.com/D_NQ_NP_603991-MLB45282079815_032021-W.jpg">
                            <button>Comprar Agora</button>
                        </label>

                        <label class="card" for="item-3" id="song-3">
                            <img src="https://http2.mlstatic.com/D_NQ_NP_671842-MLB52141888718_102022-W.jpg ">
                            <button>Comprar Agora</button>
                        </label>
                    </div>
            </div>
        </div>
    </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script>

            var btn = document.querySelector("#back-to-top");
            btn.addEventListener("click", function() {
                window.scrollTo(0, 0);
            });
    </script>
</body>
</html>