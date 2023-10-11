<?php
include('config.php');
session_start();
if (isset($_POST['Crear'])) {
    $username = $_POST['usuario'];
    $email = $_POST['correo'];
    $password = $_POST['contra'];
    $password_hash = password_hash($password, PASSWORD_BCRYPT);
    $query = $connection->prepare("SELECT * FROM usuarios WHERE correo=:email");
    $query->bindParam("email", $email, PDO::PARAM_STR);
    $query->execute();

    if ($query->rowCount() > 0) {
        echo '<p class="error">El correo ya fue registrado!</p>';
        echo '<meta http-equiv="refresh" content="5;URL=../menus/registro.html" />';
    }

    if ($query->rowCount() == 0) {
        $query = $connection->prepare("INSERT INTO usuarios(usuario,contraseña,correo) VALUES (:username,:password_hash,:email)");
        $query->bindParam("username", $username, PDO::PARAM_STR);
        $query->bindParam("password_hash", $password_hash, PDO::PARAM_STR);
        $query->bindParam("email", $email, PDO::PARAM_STR);
        $result = $query->execute();

        if ($result) {
            $_SESSION['user'] = $result['usuario'];
            echo '<p class="success">Te registrate exitosamente!</p>';
            echo '<meta http-equiv="refresh" content="0;url=../menus/iniciosesion.html">';
        } else {
            echo '<p class="error">Algo a salido mal!</p>';
        }

    }
}
?>