<?php
include('conexion.php');
include('head.php');
include('header.php');

?>


<!--- Código de la búsqueda--->
<div class="container" style="margin-top: 5%;">
    <h5> Find yourselft in <strong>Working Abroad</strong></h5>
    <div class="input-group rounded">
        <input type="search" id="busqueda" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
        <span class="input-group-text border-0" id="search-addon">
            <i class="fas fa-search"></i>
        </span>
    </div>
</div>
<div id="tabla-resultado">
   
<!---Aqui va la lista de los hoteles que hacen por llamada de JSON -->
</div>

<script src="js/peticion.js"></script>



<?php
include('footer.php'); ?>