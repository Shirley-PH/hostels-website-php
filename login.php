<?php
//session_start(); 
include('conexion.php'); 
include('head.php'); 
include('header.php'); 


?>
<div class="container">
    <h3>
        ¡Guarda todas tus deseos y planifica tu viaje! 
        
    </h3>
    <p>
        Como ya sabrán, cientos de millones de usuarios registrados utilizWorking Abroad en todos los países del mundo.

    ¡Son muchos los Moodlers que usan nuestra plataforma de aprendizaje de código abierto!
jer
    Pero, ¿sabía que no solo puede registrarse como Moodler, sino que también puede registrar sus sitios Working Abroad?


    <div class="seccion-dos">
        
        <div class="formulario registro">

            <form method="POST" action="insertarUsuario.php">

            <span style="text-transform:uppercase">Regístrate si aún no tienes cuenta</span> <br/>
            Nombre: <input type="text" name="nombre" class="form-control"> <br/>
            Apellidos: <input type="text" name="apellidos" class="form-control"><br/>
            Nombre de Usuario:  <input type="text" name="usuario" class="form-control"> <br/>
            Contraseña: <input type="password" name="password-one" id="" class="form-control" id="passOne"> <br/>
            Repite contraeña: <input type="password" name="password-two" class="form-control" id="passTwo"> <br/>
            Tipo de Usuario (usuario/admin): <input type="text" name="tipo_rol" class="form-control"> <br/>
             
            <input type="submit" value ="Enviar" class="btn btn-primary">

          
            </form>
        </div>
       
    <br>
    <strong><p style ="text-align:center">ó</p></strong>
    

    <div class="formulario acceso">
        <div style="text-align: center; color: red">
        <?php

        if (isset($_SESSION['loginCorrecto']) && $_SESSION['loginCorrecto'] == false) {
            echo 'Lo siento! Mail incorrecto y/o contraseña incorrecta';
        }
        
        ?>
        </div>
        
        <form method="POST" action="comprobarUsuario.php">
        <span style="text-transform:uppercase">Entra con tu cuenta si ya eres usuario</span> <br/>
        Usuario:<input type="usuario" name="usuarioNombre" class="form-control"> <br/>
        contraseña: <input type="password" name="passwordTwo" class="form-control"> <br/>
        <input type="submit" value ="Enviar" class="btn btn-primary">
        </form>
    </div>
    
</div>
</div>
<?php
include('footer.php'); 
?>