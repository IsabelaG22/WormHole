<?php
include('config.php'); // Tu archivo de configuración de base de datos

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['Iniciar'])) {
    $username = $_POST['usuario'];
    $password = $_POST['contra'];

    $query = $connection->prepare("SELECT * FROM usuarios WHERE usuario = :username");
    $query->bindParam(":username", $username, PDO::PARAM_STR);
    $query->execute();

    $result = $query->fetch(PDO::FETCH_ASSOC);

    if (!$result) {
        echo '<p class="error">Usuario no encontrado.</p>';
        echo '<meta http-equiv="refresh" content="0;url=../iniciosesion.html">';
    } else {
        if (password_verify($password, $result['contraseña'])) {
            $_SESSION['user'] = $result['usuario'];
            echo '<p class="success">Inicio de sesión exitoso.</p>';
           echo '<meta http-equiv="refresh" content="0;url=../index2.html">';
        } else {
            echo '<p class="error">Contraseña incorrecta.</p>';
            echo '<meta http-equiv="refresh" content="0;url=../iniciosesion.html">';
        }
    }
}


?>
