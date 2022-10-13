<?php  include("vista/cabecera.php");?>
<?php
include("admin/config/conexion.php");
$result = ("SELECT * FROM producto");
?>
<div class="container">
      <div class="row">
      <?php foreach($conn->query($result) as $list){ ?>

            <div class="col-md-3 mb-3">
                <div class="card w-100 h-100">
                                 <div class="header">
                                     <img class="card-img-top img-fluid" src="img/<?php echo $list['foto']?>" alt="Card image cap">
                                    </div> 
                                <div class="card-body">
                                    <h4 class="card-title"><?php echo $list['nombre']?></h4>
                                    <p class="card-text"><?php echo $list['precio']?></p>
                                </div>
                                <div class="card-footer">
                                <center><a href="" class="boton__a-compra" >comprar <i class="fa-solid fa-cart-arrow-down" style= "margin-left: 5px" ></i></a></center>
                                    
                                </div>
                </div>
            </div>
            <?php } ?>
      </div>
</div>
<?php  include("vista/pie.php");?>

<style>
    .boton__a-compra {
        display: block;
    font-family: 'Times New Roman', Times, serif;
    width: 160px;
    font-weight: 700;
    background-color: #b9ffff;
    border-radius: 15px;
    height: 30px;
    margin:20px 35px;
    color: black;  
    text-decoration: none;
}

.boton__a-compra:hover {
    text-decoration: none;
    color: rgba(255, 255, 255, 1) !important;
    box-shadow: 0 4px 16px rgb(176, 229, 250);
    transition: all 0.2s ease;
    font-family:  Woodland;
}

</style>
