<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Ayudantia Desarrollo Web</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/style2.css">
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

        <h1>Ayudantia Desarrollo Web</h1>

        <div class="present">
            <center>
                <picture>
                    <source srcset="https://cdn.discordapp.com/icons/744741594187431946/840a27184177dc54cbc0c546c4777e67.png" type="image/svg+xml">
                    <img src="https://cdn.discordapp.com/icons/744741594187431946/840a27184177dc54cbc0c546c4777e67.png" class="avatar img-fluid img-thumbnail">
                </picture>
                <h1>Desarrollo Web y Movil</h1>
            </center>
        </div>

<?php
        echo "<div class='content' id='123'>" . '<p>En esta instancia del ramo se busca interiorizar lo visto en clases realizando actividades practicas guiadas y resolver cualquier duda que puedan tener. Ante cualquier eventualidad las grabaciones de las clases quedaran en la seccion de anuncios junto con las clases asincronas y los archivos usados se subiran al <a href="https://github.com/Kriz300">github del ayudante</a>. Dudas y consultas pueden ser enviadas via discord y se les respondera si el ayudante no esta dormido u ocupado.</p><p>Como ayudante no tengo cuenta aws por el semestre a si que hare todo de forma local. No abria ninguna diferencia si replican lo visto en ayudante en el servidor aws a excepción de la versión de los programas ocupados y/o la falta de estos a medida que avanza el semestre.</p></div><ol start="0">';
        for ($i=0; $i < 10; $i++) { 
            echo "<li>Hola " . $i . "</li>";
        }
        echo "</ol>";
        echo "<ol start='0'>";
        $lista_curso = array("johan", "mirko", "max", "david");
        foreach ($lista_curso as $value) {
?>
            <li>Hola <?php echo $value; ?> </li>
<?php
        }
?>
        </ol>
        <ul>
<?php
        $lista_curso = array(
            "Presente" => array("johan", "mirko", "max", "david"),
            "Ausente" => array("jaira","abel","benja")
        );
        print_r($lista_curso);
        //echo $lista_curso;
        $test = "";
        foreach ($lista_curso as $key => $value) {
            $test = $test . "<li>" . $key . "</li>";
            //print_r($value);
            $test = $test . "<ol start='1'>";
            foreach ($value as $value2) {
                $test = $test . "<li>" . $value2 . "</li>";
            }
            $test = $test . "</ol>";
        }
        echo $test;
        echo "</ul>";
?>
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