<?php session_start();?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Tienda Online</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/216ca488f9.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body onload="refresh()">
        <?php
            include_once("mongo.php");
    
            $head = $client->Ayudantia->Juegos->find();
            include_once("header.php");
        ?>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class='carousel-item active '>
                    <img class='d-block' height='300px' src='css/backgrounds/inf.png'>
                </div>
            </div>
        </div>
        <h1>Acerca de Nosotros</h1>
        <div class="container d-flex h-100">
            <div class="row justify-content-right align-self-center">
                <p>Equipo de apostadores que busca revolucionar el mercado con monas chinas.</p>
                <p>Esta página web tiene como finalidad dar a conocer nuestro trabajo, difundirlo y recaudar dinero para seguir mejorandolo, mantenerlo en funcionamiento 100% actualizado, además de agregar nuevos juegos y waifus.</p>
                <P>Esperamos que nuestro trabajo sea de su agrado.</p>
            </div>
        </div>

        <?php
            include_once("footer.php")
        ?>
        <script
            src="https://code.jquery.com/jquery-3.5.0.min.js"
            integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ="
            crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
        <script type="text/javascript" src="js/wallet.js"></script>
    </body>
</html>