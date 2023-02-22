<?php

function conectar()
{
    $conn = mysqli_connect('localhost', 'root', '', 'dev_persona');

    if (!$conn) {
        echo 'conexion fallida';
        exit;
    }
    return $conn;
}