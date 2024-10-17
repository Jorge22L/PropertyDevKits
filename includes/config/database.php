<?php

function conectarDB() : mysqli
{
<<<<<<< HEAD
    $db = mysqli_connect("localhost", "root", "1234", "bienesraices");

    if(!$db)
    {
        echo "Error: No se pudo conectar a la base de datos";
        exit;
=======
    $host = 'localhost';
    $user = 'root';
    $pwd = 1234;
    $dbName = 'bienesraices';

    //Crear la conexión con objecto de tipo mysqli
    $db = mysqli_connect($host, $user, $pwd, $dbName);

    if(!$db)
    {
        echo "Error: No se pudo conectar a Base de Datos $dbName.";
        exit; // Detiene la ejecución
>>>>>>> dominical_dev
    }

    return $db;
}