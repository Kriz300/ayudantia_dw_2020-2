<?php session_start();?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Historial</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
        <script src="https://kit.fontawesome.com/216ca488f9.js" crossorigin="anonymous"></script>
    </head>
    <?php
        include_once("mongo.php");
        include_once("header.php");
    ?>
    <body onload="refresh(<?php echo $_SESSION['wallet'];?>)">
        <div id="display-div">
            <table class="table table-black">
                <thead class="thead-dark">
                    <tr>
                        <th>Fecha</th>
                        <th>Detalle</th>
                        <th>Tansacción</th>
                    </tr>
                </thead>
                <tbody id="display"></tbody>
            </table>
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
        <script type="text/javascript" src="js/tabla.js"></script>
        <script type="text/javascript" src="js/wallet.js"></script>
    </body>
</html>