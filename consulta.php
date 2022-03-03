<?php
include('conexion.php');

//Consulta con la base de datos
$query = "SELECT * FROM `hostel` ";

if (isset($_POST['hostel'])) {

    echo
    $q = $conexion->real_escape_string($_POST['hostel']);
    $query = "SELECT * FROM hostel WHERE 
    Nombre like '%" . $q . "%' OR
    Ocupacion like '%" . $q . "%' OR
    Descripcion like '%" . $q . "%' OR
    Ciudad like '%" . $q . "%' OR
    Camas like '%" . $q . "%' ";
}

//Ejecutamos la salida de los productos que están en esa base de datos

$resultado = mysqli_query($conexion, $query);

if ($resultado->num_rows > 0) {
?>
    <div class="d-flex flex-nowrap" style="padding: 2%;">
        <?php

        while ($fila = mysqli_fetch_array($resultado)) {
            $nombreHostel =  $fila['Nombre'];
            $ocupacionHostel =  $fila['Ocupacion'];
            $ciudadHostel =  $fila['Ciudad'];
            $descripcionHostel =  $fila['Descripcion'];
            $imagenHostel =  $fila['Fotos'];
            $numeroCamas = $fila['Camas'];
            $idHostel = $fila['idHostel'];
        ?>
            <div class="card disposicion" style="width: 18rem; margin: 1%">
                <div class="card-body">
                    <img class="card-img-top" src="imagen/<?php echo $imagenHostel ?>" alt="foto del hostel">
                    <h5 class="card-title"> <?php echo $nombreHostel ?> </h5>
                    <h6 class="card-subtitle mb-2 text-muted"><?php echo $ciudadHostel ?></h6>
                    <p class="card-text"><?php echo $descripcionHostel ?></p>
                    <a href="#" class="card-link"><img src="imagen/like.png" alt="like" style="width:10%"></a>
                    <a href="#" class="card-link">Read More</a>
                </div>
            </div>


    <?php

        }
    } else {
        echo "No se encontraron coincidencias con sus criterios de busqueda";
    }
    ?>
    </div>


    <!--para el JOBS--->
    <?php
    //Consulta con la base de datos
    $query = "SELECT * FROM `jobs` ";

    if (isset($_POST['jobs'])) {

        echo
        $q = $conexion->real_escape_string($_POST['jobs']);
        $query = "SELECT * FROM jobs WHERE 
            jobs like '%" . $q . "%' OR
            descripcion like '%" . $q . "%' OR
            pais like '%" . $q . "%' OR
            titulo like '%" . $q . "%' ";
    }

    //Ejecutamos la salida de los productos que están en esa base de datos

    $resultado = mysqli_query($conexion, $query);

    if ($resultado->num_rows > 0) {
    ?>
        <div class="d-flex flex-nowrap" style="padding: 2%;">
            <?php

            while ($fila = mysqli_fetch_array($resultado)) {
                $nombreTrabajo =  $fila['titulo'];
                $descripcionTrabajo =  $fila['descripcion'];
                $paisJob =  $fila['pais'];
                $tipoJob =  $fila['jobs'];
                $imagenJob =  $fila['foto'];
                $idJobs = $fila['idJobs']

            ?>
                <div class="card disposicion" style="width: 18rem; margin: 1%">
                    <div class="card-body">
                        <img class="card-img-top" src="imagen/<?php echo $imagenJob ?>.jpg " alt="foto del hostel">
                        <h5 class="card-title"> <?php echo  $nombreTrabajo ?> </h5>
                        <h6 class="card-subtitle mb-2 text-muted"><?php echo $paisJob ?></h6>
                        <p class="card-text"><?php echo $descripcionTrabajo ?></p>
                        <a href="carrito.php?id=<?= $idJobs ?>" class="card-link"><img src="imagen/like.png" alt="like" style="width:10%"></a>
                        <a href="#" class="card-link">Read More</a>
                    </div>
                </div>

        <?php

            }
        } else {
            echo "No se encontraron coincidencias con sus criterios de busqueda";
        }

        ?>
        </div>