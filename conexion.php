<?php

//Conectamos con la base de datos
$conexion = mysqli_connect("localhost", "root", "", "hostels");

//Comprobamos si hay error
if (mysqli_connect_errno()) {
    echo 'Mysql error al conectar: ' . mysqli_connect_errno();
    exit;
}
