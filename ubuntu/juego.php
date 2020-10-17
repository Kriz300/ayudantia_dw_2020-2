<?php
    session_start();
    if(isset($_SESSION["usuario"])){
        $wallet = $_SESSION['wallet'];
    }
    else {
        $wallet = "nop";
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Tienda Online</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/216ca488f9.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body onload="refresh(<?php echo $_SESSION['wallet'];?>)">
        <?php
            include_once("mongo.php");
            include_once("header.php");

            $get=$_GET["key"];
            $entry = $client->Ayudantia->Juegos->findOne(['_id' => new MongoDB\BSON\ObjectId($get)]);
        ?>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class='carousel-item active '>
                    <img class='d-block' height='400px' src='<?php echo "css/backgrounds/w" . $entry['name'] . ".jpg"?>'>
                </div>
            </div>
        </div>
        <h1>Juego: <?php echo $entry['name'] ?></h1>
        <p><?php echo $entry['desc'] ?></p>

        <div class="container">
            <div class="row">
                <div class="col">
                    <img id="img" style="width:300px; height:300px;" src='<?php echo $entry['img'] ?>'>
                </div>
                <div class="form col">
                    <h4>Tablero</h4>
                    <form>
                        <div class="form-group">
                            <label for="plata">Cuanta plata apostar?</label>
                            <input name="plata" type="number" class="form-control" id="plata">
                        </div>
                        <div class="form-group">
                            <label for="numero">N°?</label>
                            <input name="plata" type="number" class="form-control" id="numero">
                            <buton type="submit" class="btn btn-primary mb-2">Suerte!</button>
                        </div>
                    </form>
                </div>
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
        <script type="text/javascript">
            function play(cant) {
                    //let input = document.getElementById("input").value;
                    let item ='<?php echo json_encode(array($wallet, $entry["name"]));?>';
                    item = JSON.parse(item);
                    //console.log(item);
                    var game = item[1];
                    var wallet = item[0];
                    //console.log();
                    addtoList(game, cant, wallet);
                }
            $('document').ready(function(){
                    $('<script>').attr('src', "js/ruleta.js").appendTo('head');
                });
        </script>
    </body>
</html>