<?php
include('config.php');


class Coche {
    
    public $marca;
    public $modelo;

    public function __construct($marca, $modelo) {
        $this->marca = $marca;
        $this->modelo = $modelo;
    }

    public function obtenerInformacion() {
        return "Este es un coche de la marca $this->marca, modelo $this->modelo.";
    }
}
if ($_POST) {
    $nombre = $_POST['nombre'];
    $modelo = $_POST['marca'];
    }
    else{
        $nombre = null;
        $modelo = null;
    }

$coche1 = new Coche($nombre, $modelo);



while ($i <= 10) {
    echo $coche1->obtenerInformacion();
    $i = $i + 1;
} 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="caja_comentarios">
        <h1>Comentarios</h1>
        <form action="" method="post">
            <input type="textarea" name="nombre" id="">
            <input type="textarea" name="marca" id="">
            <input type="submit" value="Iniciar" name="Iniciar">
        </form>
    </div>
</body>
</html>