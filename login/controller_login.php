<?php

include ('../app/config.php');

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM usuarios WHERE email = '$email';";
$query = $pdo->prepare($sql);
$query->execute();

$usuarios = $query->fetchAll(fetch_style: PDO::FETCH_ASSOC);
//print_r($usuarios);

$contador = 0;


foreach ($usuarios as $usuario) {
    $password_tabla = $usuario['password'];
    $contador = $contador +1;
}

if ($usuario && $password === $usuario['password']) {
    header('Location: ' . APP_URL . '/admin');
    exit();
} else {
    header('Location: ' . APP_URL . '/login?error=credenciales_incorrectas');
    exit();
}