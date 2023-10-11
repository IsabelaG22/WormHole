<?php
include ('config.php');

if ($_POST) {
    $usu = $_POST['usuario'];
    $correo = $_POST['comentario'];

} else {
    $nombre = null;
    $correo = null;
}
//DELETE FROM table_name WHERE some_column = id_value
try {
    $conexion = new PDO("mysql:host=$servidor;dbname=wormhole", $usuario, $contraseña);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql="INSERT INTO `comentarios` (`id`, `usuario`, `correo`,`contraseña`) VALUES (NULL, '$usu', '$correo', '$contra')";

    $conexion->exec($sql);
    

    echo "conexion establecida";
} catch (PDOException $error) {
    echo "conexion erronea " . $error;
}


?>


