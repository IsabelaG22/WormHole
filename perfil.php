<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="imgen/Favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <nav id="nav">
        <div class="cont">
            <button class="mas"><i class="fa-solid fa-bars"></i></button>
            <ul class="con">
                <li><a href="index2.html">Inicio</a></li>
                <li><a href="sobre-cuenta.html">Sobre nosotros</a></li>
                <li><a href="#">Juegos</a>
                    <ul>
                        <li><a href="supervivencia.html">Supervivencia</a></li>
                        <li><a href="accion.html">Accion</a></li>
                        <li><a href="puzzles.html">Puzzles</a></li>
                    </ul>
                </li>
            </ul>
            
        </div>

        

        <div class="cuenta">
            <a href="index2.html" class="ini">
                <img src="imgen/logo.png" alt="" class="ini">
            </a>
            <div class="inicio">
                <a href="perfil.html">
                    <i class="fa-solid fa-user-astronaut fa-2xl" style="color: #ffffff;"></i>
                </a>
            </div>
        </div>

    </nav>

    <!---->

    <br>
    <br>
    <div class="usu">
        <img src="imgen/chef/chef.png" alt="" class="im">
        <div class="text">
            <?php
            include ("php/config.php");
            session_start();
            echo $_SESSION['user'];

            $query = $connection->prepare("SELECT * FROM usuarios WHERE descripcion");
            echo "<br/>";
            $descri = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat, cum autem iste ab architecto quibusdam voluptas dolorem aliquid necessitatibus veritatis laboriosam earum reprehenderit neque sint laudantium expedita, accusamus, ratione recusandae!
            ";
            echo $descri;
            ?>
            
            
            <h3 class="estado">•en linea</h3>
        </div>
    </div>
    <div class="opciones">
        <a href="#" class="opcion">configurar cuenta</a>
    </div>
    <br>
    <br>
<div class="conte-p">
    <a href="">
        <h2 class="p">Biblioteca</h2>
    </a>

    <a href="perfil2.html">
        <h2 class="p">Mis juegos</h2>
    </a>
</div>

    <a href="https://jcw87.github.io/c2-sans-fight/" class="juego">
        <div class="juego_conimg">
            <img class="juego_conimg_img" src="imgen/undertale/sans.png">
        </div>
        <div class="juego_precio">
            <div class="precio_final">Obtenido</div>
        </div>
        </div>
        <div class="juego_contenido">
            <div class="juego_nombre">Undertale</div>
            <div class="juego_detalles">
                <br>
                <div class="juego_con_etiquetas"><span class="etiquetas">RPG</span><span class="etiquetas">,
                        Aventura</span><span class="etiquetas">, Accion</span></div>
            </div>
        </div>
    </a>

    <a href="juegos/juego2.html" class="juego">
        <div class="juego_conimg">
            <img class="juego_conimg_img" src="imgen/red_dead/rojo.png">
        </div>
        <div class="juego_precio">
            <div class="precio_final">Obtenido</div>
        </div>
        </div>
        <div class="juego_contenido">
            <div class="juego_nombre">Red Dead Redemption 2</div>
            <div class="juego_detalles">
                <br>
                <div class="juego_con_etiquetas"><span class="etiquetas">Mundo abierto</span><span class="etiquetas">,
                        Aventura</span><span class="etiquetas">, Accion</span></div>
            </div>
        </div>
    </a>

    <a href="juegos/juego3.html" class="juego">
        <div class="juego_conimg">
            <img class="juego_conimg_img" src="imgen/fnaf/five.png">
        </div>
        <div class="juego_precio">
            <div class="precio_final">Obtenido</div>
        </div>
        </div>
        <div class="juego_contenido">
            <div class="juego_nombre">Five Night at Freddy's</div>
            <div class="juego_detalles">
                <br>
                <div class="juego_con_etiquetas"><span class="etiquetas">Terror</span><span class="etiquetas">,
                        Suspenso</span><span class="etiquetas">, Supervivencia de Horror</span></div>
            </div>
        </div>
    </a>

    <a href="juegos/juego4.html" class="juego">
        <div class="juego_conimg">
            <img class="juego_conimg_img" src="imgen/poppy/poppy.png">
        </div>
        <div class="juego_precio">
            <div class="precio_final">Obtenido</div>
        </div>
        </div>
        <div class="juego_contenido">
            <div class="juego_nombre">Poppy PlayTime</div>
            <div class="juego_detalles">
                <br>
                <div class="juego_con_etiquetas"><span class="etiquetas">Supervivencia</span><span class="etiquetas">,
                        Horror</span><span class="etiquetas">, Accion</span><span class="etiquetas">, Puzzles</span>
                </div>
            </div>
        </div>
    </a>

    <a href="juegos/juego5.html" class="juego">
        <div class="juego_conimg">
            <img class="juego_conimg_img" src="imgen/chef/chef.png">
        </div>
        <div class="juego_precio">
            <div class="precio_final">Obtenido</div>
        </div>
        </div>
        <div class="juego_contenido">
            <div class="juego_nombre">Chefsito Asesino</div>
            <div class="juego_detalles">
                <br>
                <div class="juego_con_etiquetas"><span class="etiquetas">Supervivencia</span><span class="etiquetas">,
                        Disparos</span><span class="etiquetas">, Accion</span><span class="etiquetas">, 2D</span></div>
            </div>
        </div>
    </a>
</body>

</html>