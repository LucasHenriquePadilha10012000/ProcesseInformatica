<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link type="text/css" rel="stylesheet" href="css/estilo.css">
        <title>Processe Informática - Inicio</title>
    </head>
    <body>
        <div id="container">
            <div id="header">
<a href="#">
    <img src="img/banner-processe.jpg" width="900" height="120">
        </a>
            </div>
            <div id="menu">
                <?php
                include 'menu.php';
                ?>
            </div>
            <div id="content">
                <div id="content-main">
                    <?php
                    $pg = $_GET["pg"];
                    if (!empty($pg)) {
                        include $pg . '.php';
                    } else {
                        include 'home.php';
                    }
                    ?>
                </div>
                <div id="content-banner">
                    <img src="img/bl.jpg">
                </div>
            </div>
            <div id="footer">
                <span>
                    Processe Informática &copy; Todos os direitos reservados!
                </span>
            </div>
        </div>
    </body>
<div class="titulo">
    <h2>Confira as Promoções</h2>
</div>
<hr>
<div class="promocao">
    <div class="img">
        <a href="#">
            <img src="img/not.jpg" width="300" height="200">
        </a>
        <div class="desc">
            Notbook CCE <br>
            R$ 750,00
        </div>
    </div>
    <div class="img">
        <a href="#">
            <img src="img/mouse.jpg" width="300" height="200">
        </a>
        <div class="desc">
            Mouse Gamer Multilaser <br>
            R$ 39,99
        </div>
    </div>
    <div class="img">
        <a href="#">
            <img src="img/tecladomouse.jpg" width="300" height="200">
        </a>
        <div class="desc">
            Teclado e Mouse Logitec <br>
            R$ 90,00
        </div>
    </div>
    <div class="img">
        <a href="#">
            <img src="img/gabinete.jpg" width="300" height="200">
        </a>
        <div class="desc">
            Gabinete Gamer Tiger <br>
            R$ 265,99
        </div>
    </div>
    <div class="img">
        <a href="#">
            <img src="img/memoria.jpg" width="300" height="200">
        </a>
        <div class="desc">
            Memória DDR3 Hyper 4GB <br>
            R$ 140,00
        </div>
    </div>
    <div class="img">
        <a href="#">
            <img src="img/monitor.jpg" width="300" height="200">
        </a>
        <div class="desc">
            Monitor LG 19 Polegadas <br>
            R$ 6,99
        </div>
    </div>
    <div class="img">
        <a href="#">
            <img src="img/milk.jpg" width="300" height="200">
        </a>
        <div class="desc">
            Milk-Shake <br>
            R$ 8,99
        </div>
    </div>
    <div class="img">
        <a href="#">
            <img src="img/aça.jpg" width="300" height="200">
        </a>
        <div class="desc">
            Açai <br>
            R$ 7,99
        </div>
    </div>
</div>


