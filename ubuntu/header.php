<header>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="index.php">
            <picture>
                <source srcset="css/backgrounds/logo.jpg" type="image/svg+xml">
                <img src="css/backgrounds/logo.jpg" class="avatar">
            </picture>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Juegos
                    </a>
                    <div class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown">
                        <?php
                            $head = $client->Ayudantia->Juegos->find();
                            foreach($head as $cat){
                                ?>
                                <a class="dropdown-item bg-hover text-white" href="juego.php?key=<?php echo $cat['_id']?>"><?php echo $cat['name']?></a>
                                <?php
                            }
                        ?>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="informacion.php">Informacion</a>
                </li>
            </ul>
            <div>
                <ul class="navbar-nav mr-auto">
                    <?php
                        if(isset($_SESSION["usuario"])){
                            echo '<li class="nav-item dropdown">';
                            echo '<button type="button" class="shopping-cart-button" data-toggle="dropdown">';
                            echo $_SESSION['usuario'];
                            echo '</button>';
                            echo '<div id="List" class="dropdown-menu dropdown-menu-right bg-dark"></div></li>';
                        }
                        else {
                            echo "<li class='nav-item'>";
                            echo "    <a class='nav-link' href='login.php'>Login</a>";
                            echo "</li>";
                            echo "<li class='nav-item'>";
                            echo "    <a class='nav-link' href='register.php'>Register</a>";
                            echo "</li>";
                        }
                    ?>
                </ul>
            </div>
        </div>
    </nav>
</header>