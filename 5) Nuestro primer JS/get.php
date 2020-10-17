<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Proyecto Desarrollo Web</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <?php
            include_once("header.php");
        ?>

        <h1>Get</h1>
        <input id="input" list="browsers">
        <datalist id="browsers">
            <option value="Presente">
            <option value="Ausente">
        </datalist>
        <button onclick = "actualizar()">test</button>
        <div id="contenedor">
<?php
    $get = "Presente";
    if (isset($get)) {
        $categoria = $get;
        $lista_curso = array(
            "Presente" => array("johan", "mirko", "max", "david"),
            "Ausente" => array("jaira","abel","benja")
        );
        echo "<ul id='test'>";
        foreach ($lista_curso[$categoria] as $value) {
?>
            <li>Hola <?php echo $value; ?> </li>
<?php
    }

        }
?>
        </ul>
        </div>
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
        <script type="text/javascript">
            function actualizar() {
                let lista;
                var input = document.getElementById("input").value;
                //console.log(input);
                let item ='<?php echo json_encode($lista_curso);?>';
                item = JSON.parse(item);
                //console.log(item);
                $("#test").remove();
                lista = item[input];
                var html = "<ul>";
                lista.forEach(nombre => {
                    html += "<li>" + nombre + "</li>";
                });
                $("#contenedor").html(html+"</ul>");
            }
        </script>
    </body>
</html>