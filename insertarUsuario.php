<?php
include("conexion.php"); 
session_start();


/* Nombre */
$error = false;


if (isset($_POST["nombre"]) && !empty($_POST["nombre"])) {
   
    $nombre = $_POST["nombre"];

    // echo "El nombre es: " . $_POST["nombre"] . "<br/>";
} else {
    echo
    'Error en el nombre' . "<br/>";
    $error = true;
}

if (isset($_POST["apellidos"]) && !empty($_POST["apellidos"])) {
    $apellidos = $_POST["apellidos"];

    // echo "El nombre es: " . $_POST["nombre"] . "<br/>";
} else {
    echo
    'Error en el apellidos' . "<br/>";
    $error = true;
}
if (isset($_POST["usuario"]) && !empty($_POST["usuario"])) {
    $nombreUsuario = $_POST["usuario"];

    // echo "El nombre es: " . $_POST["nombre"] . "<br/>";
} else {
    echo
    'Error en el Nombre de Usuario' . "<br/>";
    $error = true;
}

if (isset($_POST["password-one"]) && !empty($_POST["password-one"])) {
    $passwordOne = $_POST["password-one"];
    // echo "El apellido es: " . $_POST["apellidos"] . "<br/>";
} else {
    echo 'Error en el password-one'
        . "<br/>";
    $error = true;
}


if (isset($_POST["password-two"]) && !empty($_POST["password-two"])) {

    $passwordTwo = $_POST["password-two"];
    //echo "Su fecha de nacimiento es: " . $_POST["fechaNacimiento"] . "<br/>"; //FechaNacimiento

} else {
    echo
    'Error en la password-two' . "<br/>";
    $error = true;
}


/*
if($passwordOne != $passwordTwo){
      
        $error = true;   
    
} */ 

    


if (isset($_POST["tipo_rol"]) && !empty($_POST["tipo_rol"])) {

    $tipoRol = $_POST["tipo_rol"];
    //echo "Su fecha de nacimiento es: " . $_POST["fechaNacimiento"] . "<br/>"; //FechaNacimiento

} else {
    echo
    'Error en el Tpo rol' . "<br/>";
    $error = true;
}



if ($error == false) {
    //Formamos el INSERT
    $query = "INSERT INTO registrousuarios(nombre, apellidos, nombre_usuario, password_two, tipo_rol) 
                    VALUES ( '$nombre','$apellidos',' $nombreUsuario', '$passwordTwo', '$tipoRol') ";

    //ejecutamos la insert
    $resultado = mysqli_query($conexion, $query);



    if ($resultado) {
        //echo "insertado correctamente";
        header("location: index.php");
    } else {

        echo "Error: " . $query . "<br>" . mysqli_error($conexion);
    }

}
