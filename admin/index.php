<?php 
include "model/conexion.php";
include "model/seleccion.php";
include "controller/registrar.php"; 
include "controller/borrar.php";
?>
<?php include "view/header.php" ?>
    <div class="container" style="height:100vh">
        <div class="row h-100">
            <div class="col-md-6">
                <?php include "view/registrarprod.php"; ?>
            </div>
            <div class="col-md-6">
                <div class="">
                    <?php include "view/tablaprod.php" ?>
                </div>
            </div>
        </div>
    </div>
