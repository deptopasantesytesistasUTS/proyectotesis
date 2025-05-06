<?php

#credenciales inicales
define('SERVIDOR', 'localhost');
define('USUARIO', 'root');
define('PASSWORD', '');
define('BD', 'proyectotesis');

define('APP_NAME','SISTEMA PARA DPTO PASANTES Y TESISTAS');
define('APP_URL', 'http://localhost/proyectotesis');
define('KEY_API_MAPS', '');

#inicializar la base de datos
$servidor = "mysql:dbname=".BD.";host=".SERVIDOR;

#verificacion de que la conexion a la base de datos esta correcta
try {
    $pdo = new PDO($servidor, USUARIO, PASSWORD, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    //echo "conexion correcta a la base de datos";
}catch (PDOException $e){
    print_r($e);
    echo"error no se pudo conectar a la base de datos";
}

#Estableciendo la zona horaria/datos del dia
date_default_timezone_set ("America/Caracas");
$fechaHora = date(format:'Y-m-d H:i:s');
$fechaActual = date (format: 'Y-m-d');
$diaActual = date (format: 'd');
$mesActual = date (format: 'm');
$anoActual = date (format: 'Y');


