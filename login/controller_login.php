<?php

include ('../app/config.php');

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM usuarios WHERE email = '$email' AND estado = '1';";
$query = $pdo->prepare($sql);
$query->execute();

$usuarios = $query->fetchAll(fetch_style: PDO::FETCH_ASSOC);
//print_r($usuarios);

$contador = 0;


foreach ($usuarios as $usuario) {
    $password_tabla = $usuario['password'];
    $contador = $contador +1;
}

// Módulo para verificar si un usuario es válido

if ($usuario && $password === $usuario['password']) {
    echo "los datos son correctos";
    session_start();
    $_SESSION['mensaje'] = "Bienvenido al sistema";
    $_SESSION['icono'] = "success";
    header('Location:'.APP_URL.'/admin');
} else {
    echo "los datos son in correctos";
    session_start();
    $_SESSION['mensaje'] = "Los datos introducidos son incorrectos, vuelva a intentarlo";
    header('Location:'.APP_URL.'/login');
}

//cambio para verificar contraseñas encriptadas
// $2y$10$0tYmdHU9uGCIxY1f90W1EuIm54NQ8axowkxL1WzLbqO2LdNa8m3l2
// if (($contador > 0 ) && ($password_verify ($password, $password_verify))) {
//     header('Location: ' . APP_URL . '/admin');
//     exit();
// } else {
//     header('Location: ' . APP_URL . '/login?error=credenciales_incorrectas');
//     exit();
// }
