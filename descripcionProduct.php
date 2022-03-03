<?php
include('conexion.php');
include('head.php');
include('header.php');

if (!isset($_SESSION["descripcionProduct"])) {
    $_SESSION["descripcionProduct"];
}

/*
if (isset($_GET["id"])) {
    array_push($_SESSION["descripcionProduct"], (int) $_GET["id"]);
}

if (isset($_GET["removeid"])) {
    foreach ($_SESSION["descripcionProduct"] as $clave => $valor) {
        if ($valor == $_GET["removeid"]) {
            unset($_SESSION["descripcionProduct"][$clave]);
        }
    }
}
*/

?>
<div class="container-fluid">
    <h3> Detalles del producto</h3>
    <h5> Conoce más sobre... </h5>
    <hr />
    <?php
    $query = "SELECT * FROM `jobs` where idJobs in (" . implode(",", $_SESSION["descripcionProduct"]) . ") ";
    //echo $query;
    $resultado = mysqli_query($conexion, $query);
    ?>

    <div class="d-flex flex-nowrap" style="padding: 2%;">
        <?php
        if ($resultado) {
            while ($fila = mysqli_fetch_array($resultado)) {
                $nombreTrabajo =  $fila['titulo'];
                $descripcionTrabajo =  $fila['descripcion'];
                $paisJob =  $fila['pais'];
                $tipoJob =  $fila['jobs'];
                $imagenJob =  $fila['foto'];
                $idJobs = $fila['idJobs']

        ?>
                <!----Tarjetas para mostrar --->

                <div class="card disposicion" style="width: 18rem; margin: 1%">
                    <div class="card-body">
                        <img class="card-img-top" src="imagen/<?php echo $imagenJob ?>.jpg " alt="foto del hostel">
                        <h5 class="card-title"> <?php echo  $nombreTrabajo ?> </h5>
                        <h6 class="card-subtitle mb-2 text-muted"><?php echo $paisJob ?></h6>
                        <p class="card-text"><?php echo $descripcionTrabajo ?></p>
                        <a href="carrito.php?id=<?= $idJobs ?>" class="card-link"><img src="imagen/like.png" alt="like" style="width:10%"></a>
                        <a href="carrito.php?removeid=<?= $idJobs ?>" class="card-link"><i class="fas fa-times"></i></a>
                    </div>
                </div>
        <?php
            }
        } else {
            echo "No ha seleccionado ningún elemento";
        }
        ?>
    </div>
    <?php
    $query = "SELECT * FROM `hostel` WHERE idHostel in (" . implode(",", $_SESSION["descripcionProduct"]) . ") ";

    //Ejecutamos la salida de los productos que están en esa base de datos

    $resultado = mysqli_query($conexion, $query);
    ?>
    <div class="d-flex flex-nowrap" style="padding: 2%;">
        <?php
        if ($resultado) {

            while ($fila = mysqli_fetch_array($resultado)) {
                $nombreHostel =  $fila['Nombre'];
                $ocupacionHostel =  $fila['Ocupacion'];
                $ciudadHostel =  $fila['Ciudad'];
                $descripcionHostel =  $fila['Descripcion'];
                $imagenHostel =  $fila['Fotos'];
                $numeroCamas = $fila['Camas'];
                $idHostel = $fila['idHostel'];
        ?>
                <!----Tarjetas para mostrar --->

                <div class="card disposicion" style="width: 18rem; margin: 1%">
                    <div class="card-body">
                        <img class="card-img-top" src="imagen/<?php echo $imagenHostel ?>" alt="foto del hostel">
                        <h5 class="card-title"> <?php echo $nombreHostel ?> </h5>
                        <h6 class="card-subtitle mb-2 text-muted"><?php echo $ciudadHostel ?></h6>
                        <p class="card-text"><?php echo $descripcionHostel ?></p>
                        <a href="carrito.php?id=<?= $idHostel ?>" class="card-link"><img src="imagen/like.png" alt="like" style="width:10%"></a>
                        <a href="carrito.php?removeid=<?= $idHostel ?>" class="card-link"><i class="fas fa-times"></i></a>
                    </div>
                </div>
        <?php
            }
        } else {
            echo "No tienes nada en tu carrito";
        }
        ?>
    </div>
    <?php
    include('footer.php');
