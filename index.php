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
                    <img src="img/horizontal.gif">
                </div>
            </div>
            <div id="footer">
                <span>
                    Processe Informática &copy; Todos os direitos reservados!
                </span>
            </div>
        </div>
    </body>
</html>
