<?php

include('header.php');
include('conexion.php');
?>

<body>

    <!--- CARRUCEL-->

    <div class="owl-carousel owl-theme">
        <div class="owl-slide d-flex align-items-center cover" style="background-image: url(imagen/machu-picchu.jpg);">
            <div class="container">

                <div class="row justify-content-center justify-content-md-start">
                    <div class="col-10 col-md-6 static">
                        <div class="owl-slide-text">
                            <h2 class="owl-slide-animated owl-slide-title">
                                MACHUPICHCHU
                            </h2>
                            <div class="owl-slide-animated owl-slide-subtitle mb-3">
                                One morning, when Gregor Samsa woke from trouble dreams, he found himself
                                transformed in
                                hi bed in a terrinle vermin.
                            </div>
                            <a class="btn btn-primary owl-slide-animated owl-slide-cta" href="" role="button">
                                See original Imagen
                            </a>
                        </div><!-- /owl-slide-text -->
                    </div>
                </div>
            </div>
        </div><!-- /slide2 -->

        <div class="owl-slide d-flex align-items-center cover" style="background-image: url(imagen/egipt-women.jpg);">
            <div class="container">
                <div class="row justify-content-center justify-content-md-start">
                    <div class="col-10 col-md-6 static">
                        <div class="owl-slide-text">
                            <h2 class="owl-slide-animated owl-slide-title">
                                EGIPT
                            </h2>
                            <div class="owl-slide-animated owl-slide-subtitle mb-3">
                                One morning, when Gregor Samsa woke from trouble dreams, he found himself
                                transformed in
                                hi bed
                                in a terrinle vermin.
                            </div>
                            <a class="btn btn-primary owl-slide-animated owl-slide-cta" href="" role="button">
                                See original Imagen
                            </a>
                        </div><!-- /owl-slide-text -->
                    </div>
                </div>
            </div>
        </div><!-- /slide3 -->

        <div class="owl-slide d-flex align-items-center cover" style="background-image: url(imagen/mexico-offering.jpg);">
            <div class="container">
                <div class="row justify-content-center justify-content-md-start">
                    <div class="col-10 col-md-6 static">
                        <div class="owl-slide-text">
                            <h2 class="owl-slide-animated owl-slide-title">
                                MEXICO
                            </h2>
                            <div class="owl-slide-animated owl-slide-subtitle mb-3 cambio">
                                One morning, when Gregor Samsa woke from trouble dreams, he found himself
                                transformed in
                                hi bed
                                in a terrinle vermin.
                            </div>
                            <a class="btn btn-primary owl-slide-animated owl-slide-cta" href="" role="button">
                                See original Imagen
                            </a>
                        </div><!-- /owl-slide-text -->
                    </div>
                </div>
            </div>
        </div><!-- /slide1 -->
    </div>
    <!-- other sections here -->


    <!--- CUERPO DEL CONTENIDO --->


    <!---Barra de navegacion de JOB -->
    <div style="margin:2%">

        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link active" href="#">All Hotel</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="allHotels.php">Hotels for you</a>
            </li>
        </ul>

        <?php
        $query = "SELECT * FROM `hostel` ";

        //Ejecutamos la salida de los productos que están en esa base de datos

        $resultado = mysqli_query($conexion, $query);
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
                <!----Tarjetas para mostrar --->

                <div class="card disposicion" style="width: 18rem; margin: 1%">
                    <div class="card-body">
                        <a href="descripcionProduct.php?id=<?= $idHostel ?>"><img class="card-img-top" src="imagen/<?php echo $imagenHostel ?>" alt="foto del hostel"></a>
                        <h5 class="card-title"> <?php echo $nombreHostel ?> </h5>
                        <h6 class="card-subtitle mb-2 text-muted"><?php echo $ciudadHostel ?></h6>
                        <p class="card-text"><?php echo $descripcionHostel ?></p>
                        <a href="carrito.php.php?id=<?= $idHostel ?>" class="card-link"><img src="imagen/like.png" alt="like" style="width:10%"></a>
                        <a href="carrito.php?removeid=<?= $idHostel ?>" class="card-link"><i class="fas fa-times"></i></a>
                        <a href="descripcionProduct.php?id=<?= $idHostel ?>" class="card-link">Read More</a>
                    </div>
                </div>
            <?php
            }
            ?>


        </div>




    </div>

    <!---Barra de navegacion de HOTELS -->
    <div style="margin: 2%">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link active" href="#">All Jobs</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="allJobs.php">Jobs for you</a>
            </li>
        </ul>


        <?php
        $query = "SELECT * FROM `jobs` ";

        //Ejecutamos la salida de los productos que están en esa base de datos

        $resultado = mysqli_query($conexion, $query);
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
                <!----Tarjetas para mostrar --->

                <div class="card disposicion" style="width: 18rem; margin: 1%">
                    <div class="card-body">
                        <a href="descripcionProduct.php?id=<?= $idJobs ?>"><img class="card-img-top" src="imagen/<?php echo $imagenJob ?>.jpg " alt="foto del hostel"></a>
                        <h5 class="card-title"> <?php echo  $nombreTrabajo ?> </h5>
                        <h6 class="card-subtitle mb-2 text-muted"><?php echo $paisJob ?></h6>
                        <p class="card-text"><?php echo $descripcionTrabajo ?></p>
                        <a href="carrito.php.php?id=<?= $idJobs ?>" class="card-link"><img src="imagen/like.png" alt="like" style="width:10%"></a>
                        <a href="carrito.php?removeid=<?= $idJobs ?>" class="card-link"><i class="fas fa-times"></i></a>
                        <a href="descripcionProduct.php?id=<?= $idJobs ?>" class="card-link">Read More</a>


                        </a>
                    </div>
                </div>
            <?php
            }
            ?>


        </div>

    </div>

    <!---vídeo -->
    <div style="margin:2%">
        <h5>Many adventures to live and explore</h5>
        <hr />
    </div>
    <div class="" style="margin-left:2%">
        <iframe width="1200" height="315" src="https://www.youtube.com/embed/rD2p-pZMX_8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
    <br />
    <!--Banner de propaganda--->
    <div class="banner-principal">
        <p> <b>This combination is extremely effective. The image elicits an emotional response, and the action-oriented text encourages visitors to put that excitement towards their own adventure </b></p>
        <div class="boton-reservas"><a href="direccion.html"> BOOK </a></div>
    </div>
    <div style="margin:2%">
        <h5>Find us and find your next adventures</h5>
        <hr />
    </div>
    <div style="margin-left:2%">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3129.2562191384136!2d-0.4919896853087456!3d38.34305138703451!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd6237459fbc8515%3A0xa07f82d19ea2f16!2sTravelling%20Alicante!5e0!3m2!1ses!2ses!4v1623178901914!5m2!1ses!2ses" width="1200" height="650" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
    <script src="js/functions.js"></script>
    <script src="js/peticion.js"></script>
    <?php include('footer.php') ?>
</body>

</html>