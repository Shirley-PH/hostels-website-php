
<?php 
session_start(); 
include('conexion.php'); 
include('head.php'); 
?>
<body>
    <header>

        <nav>

            <div class="nav-center">

                <!-- nav header -->
                <div class="nav-header">
                    <a href="index.php"><img src="imagen/logotipo-1.png" class="logo" alt="logo" /></a>

                    <button class="nav-toggle">
                        <i class="fas fa-bars"></i>
                    </button>

                </div>
                <!-- links -->
                <ul class="links">
                    <li>
                        <a href="index.php">home</a>
                    </li>
                    <li>
                        <a href="about.php">about</a>
                    </li>
                    <li>
                        <a href="allHotels.php">hotels</a>
                    </li>
                    <li>
                        <a href="allJobs.php">jobs</a>
                    </li>
                    
                    <li>
                        <?php
                            if (isset($_SESSION['loginCorrecto']) && $_SESSION['loginCorrecto'] == true){
                              ?> <a href="logout.php">Logout</a> <?php
                            } else {
                                ?>
                                <a href="login.php">Login</a> 
                                <?php
                            }
                        ?>
                    </li>
                        
               
                    <li>
                        <?php
                            if (isset($_SESSION['usuarioNombre']) && !empty($_SESSION['usuarioNombre'])) {
                            ?>
                            <div>Bienvenido <?= $_SESSION['usuarioNombre'] ?>
                            <img src="imagen/user.png" alt="User Icon" style="width: 10%;">
                            </div>
                            <?php
                            } ?>
                            
                            <?php
                            if (isset($_SESSION['tipo_rol']) && !empty($_SESSION['tipo_rol'])){

                                if ($_SESSION['tipo_rol'] == 'admin') { ?>
    
                                    <a href="carrito.php" class="main-header__btn" style="margin-left: 2%;"> WISH LIST <i class="fas fa-heart"></i></a>
                                <?php
                                }
                            }
                        
                            ?>
                    </li>

                </ul>
               

            </div>
        </nav>
</header>
