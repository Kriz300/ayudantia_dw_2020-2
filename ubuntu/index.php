<?php session_start();?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Tienda Online</title>
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <link rel="stylesheet" href="css/owl.theme.default.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/216ca488f9.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body onload="refresh(<?php echo $_SESSION['wallet'];?>)">
        <?php
            include_once("mongo.php");
            include_once("header.php");

            $collection = $client->Ayudantia->Juegos->find();

            //$portada es un arreglo no escalable netamente usado para fines visuales no relacionados con ningun otro archivo php solicitado ni con algun elemento almacenado en MongoDB
            $portada = array("css/backgrounds/logof.jpg", "css/backgrounds/4.jpg", "css/backgrounds/1.jpg", "css/backgrounds/2.jpg", "css/backgrounds/3.jpg");
        ?>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <?php
                    $i=0;
                    foreach($portada as $key => $port){
                        $active="";
                        if ($i==0){
                            $active="active";
                        }
                        echo "<li data-target='#carouselExampleIndicators' data-slide-to='$i' class='$active'></li>";
                        $i++;
                    }
                ?>
            </ol>
            <div class="carousel-inner">
                <?php
                    $i=0;
                    foreach($portada as $key => $port){
                        $active="";
                        if ($i==0){
                            $active="active";
                        }
                        echo "<div class='carousel-item $active'>";
                        echo    "<img class='d-block' height='400px' src='$port'>";
                        echo "</div>";
                        $i++;
                    }
                ?>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <h1>Bienvenidos al Casino</h1>
        <p>Aqui encontrara juegos de azar y monas chinas.</p>
        <h3>Juegos</h3>
        <div class="container nt-5 nb-5">
            <div class="owl-carousel owl-theme">
                <?php
                    foreach($collection as $entry){
                        ?>
                        <a href="juego.php?key=<?php echo $entry['_id']->__toString()?>">
                            <div class='ml-2 mr-2'>
                                <div class='card' height='75%'>
                                    <img data-src='<?php echo $entry['img']?>' style='width:100%; height:300px;' class='card-img-top owl-lazy'>
                                    <div class='card-body'>
                                        <h5 class='card-title'><?php echo $entry['name'] ?></h5>
                                        <p class="card-text"><?php echo $entry['desc']?></p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <?php
                    }
                ?>
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
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/jquery.mousewheel.min.js"></script>
        <script type="text/javascript" src="js/carousel.js"></script>
        <script type="text/javascript" src="js/wallet.js"></script>
    </body>
</html>