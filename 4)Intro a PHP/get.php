<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Proyecto Desarrollo Web</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
                <a class="navbar-brand" href="index.html">
                    <img src="https://thumbs.dreamstime.com/b/letter-blue-fire-flames-black-isolated-background-realistic-fire-effect-sparks-part-alphabet-set-letter-blue-fire-157762983.jpg" width="30" height="30" class="d-inline-block align-top">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
        
                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" id="home" href="index.html">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="ayudante" href="ayudante.html">Ayudante</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="ayudantia1" href="../1) html/web.html">Ayudantía 1</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="proyecto" href="proyecto.html">Proyecto</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <h1>Get</h1>

<?php
        $categoria = $_GET["key"];
        $lista_curso = array(
            "Presente" => array("johan", "mirko", "max", "david"),
            "Ausente" => array("jaira","abel","benja")
        );
        echo "<ul>";
        foreach ($lista_curso[$categoria] as $value) {
?>
            <li>Hola <?php echo $value; ?> </li>
<?php
        }
?>
        </ul>
        
        <footer>
            <p><h4>Creada por Kriz</h4></p>
        </footer>

        <script
            src="https://code.jquery.com/jquery-3.5.0.min.js"
            integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ="
            crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    </body>
</html>