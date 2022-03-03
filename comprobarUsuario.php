<?php
session_start(); 
include('conexion.php'); 

$loginCorrecto = false;
$textoError = "";

$error = false;
//Comprobaciones del USUARIO LOGIN si se han rellenado
if (isset($_POST["usuarioNombre"]) && !empty($_POST["usuarioNombre"])) {
    $nombreUsuario = trim($_POST["usuarioNombre"]);
     echo "El apellido es: " . $_POST["apellidos"] . "<br/>";
} else {
    echo 'Error en el Nombre de Usuario'
        . "<br/>";
    $error = true;
}


if (isset($_POST["passwordTwo"]) && !empty($_POST["passwordTwo"])) {

    $passwordTwo = $_POST["passwordTwo"];
  echo $passwordTwo;

} else {
    echo
    'Error en la Contraseña 2' . "<br/>";
    $error = true;
}

echo 'NOMBRE: '.$nombreUsuario;
echo 'PASS: '.$passwordTwo;



///SACAR EL NOMBRE DE LA BASE DE DATOS

if ($error == false) {
    //Formamos el INSERT

    $query = "SELECT * FROM `registrousuarios` WHERE nombreUsuario = '$nombreUsuario' AND password_two = '$passwordTwo' ";

    //ejecutamos la insert
    $resultado = mysqli_query($conexion, $query);
  
    while ($fila = mysqli_fetch_array($resultado)) {
        $nombreUsuario =  $fila['nombreUsuario'];
        $_SESSION['usuarioNombre'] = $nombreUsuario;
        $_SESSION['passwordTwo'] = $fila["password_two"];
        $tipoRol = $fila['tipo_rol'];
        
        $loginCorrecto = true;
      

    }
} 


///CODIGO PARA GUARDAR TODOS LOS REGISTROS DE SESSION EN UNA BASE DE DATOS
if ($loginCorrecto) {
    //GUARDO E REGISTRO DEL LOG

    $_SESSION['loginCorrecto'] = true;

    $_SESSION['usuarioNombre'] = $nombreUsuario;

    $_SESSION['tipo_rol'] = $tipoRol;

    $_SESSION['passwordTwo'] = $_POST["passwordTwo"];
    $_SESSION['carrito'] = []; 
  
   
  

    var_dump($_SESSION['passwordTwo']); 

    $query = "INSERT INTO  sessiones (nombre_usuario, password_two, fecha, autentificar, session) 
    VALUES  ('$nombreUsuario', '$passwordTwo', now(), '$tipoRol', 1) "; //INICIADO SESSION - 1- 


    //ejecutamos la insert
    $resultado = mysqli_query($conexion, $query);

 header('Location: index.php'); //REDIRECCIONA LA PAGINA

} else {

    $_SESSION['loginCorrecto'] = false;

     $query = "INSERT INTO  sessiones (nombre_usuario, password_two, fecha, autentificar, session) 
    VALUES  ('$nombreUsuario', '$passwordTwo', now(), '$tipoRol', 0) "; //INICIADO SESSION - 1-  



    //ejecutamos la insert
    $resultado = mysqli_query($conexion, $query);

    $textoError = 'Usuario o contraseña incorrecta';
header('Location: login.php'); //REDIRECCIONA LA PAGINA
}
