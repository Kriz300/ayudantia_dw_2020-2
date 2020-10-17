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
            include_once("header.php");
        ?>

        <div class="container">
            <div class="row" style="margin-top:200px">
                <div class="col"></div>
                <div class="col">
                    <form class="form-signin" action="redirect.php" method="POST">
                        <h1 class="h3 mb-3 font-weight-normal">Iniciar sesión</h1>
                        <label for="inputEmail" class="sr-only">Correo</label>
                        <input type="email" id="mailUDP" class="form-control" name="mail" placeholder="Correo">
                        <p id="mailWarning">Solo mail udp</p><br>
                        <label for="inputPassword" class="sr-only">Contraseña</label>
                        <input type="password" id="Password" class="form-control" name="password" placeholder="Contraseña">
                        <p id="passWarning">...</p><br>
                        <button id="enviar" class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
                    </form>
                </div>
                <div class="col"></div>
            </div>
        </div>
        <style>
            #mailWarning, #passWarning {color: #f00; display:none;}
            #enviar:disabled{background: #666;}
        </style>

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
        <script>
            var userField = document.getElementById("mailUDP");
            var pass = document.getElementById("Password");
            var enviarButton = document.getElementById("enviar");
            
            var user=false;
            var passcheck=false;

            function enableButton() {
                if (user && passcheck){
                    enviarButton.disabled=false;
                } else {
                    enviarButton.disabled=true;
                }	
            }

            userField.addEventListener("keyup", function() {
                if (userField.value.endsWith("mail.udp.cl")){
                    document.getElementById("mailWarning").style.display="none";
                    userField.style.background="#04cf1f";
                    user=true;
                } else {
                    document.getElementById("mailWarning").style.display="block";
                    userField.style.background="#ff0000";
                    user=false;
                }
                enableButton();
            });

            pass.addEventListener("keyup", function() {
                if (pass.length!=""){
                    document.getElementById("passWarning").style.display="none";
                    pass.style.background="#04cf1fc";
                    passcheck=true;
                } else {
                    document.getElementById("passWarning").style.display="block";
                    pass.style.background="#ff0000";
                    passcheck=false;
                }
                enableButton();
            });
            $("document").ready(function () {
                enableButton();
            })
        </script>
    </body>
</html>