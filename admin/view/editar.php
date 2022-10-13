<<?php 
include "../model/conexion.php";
include "../model/seleccion.php";
include "../controller/editar.php"; 
?>
!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Frutera</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>
<header>
        <nav>
            <a href="./inicioadmin.php">inicio</a>
            <a href="index.php">Añadir producto y ofertas</a>
            <a href="./sesion/cerrar.php?cerrar=yes">cerrar sesion<i class="fa-solid fa-arrow-right-from-bracket" style= "margin-left: 5px"></i></a>
        </nav>
        <div class="wave" style="height: 150px; overflow: hidden;"><svg viewBox="0 0 500 150" preserveAspectRatio="none"
                style="height: 100%; width: 100%;">
                <path d="M0.00,49.98 C150.00,150.00 349.20,-50.00 500.00,49.98 L500.00,150.00 L0.00,150.00 Z"
                    style="stroke: none; fill: #fff;"></path>
            </svg></div>
    </header>
    <div class="container" style="height:100vh">
        <div class="row h-100">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="d-flex align-items-center justify-content-center w-100 h-100">
                    <div class="card w-100 p-4">

                        <form action="<?php $_SERVER["PHP_SELF"]; ?>" method="post">
                            <h1>Editar productos</h1>
                            <div class="form-group">
                                <label for="inputEmail">Nombre</label>
                                <input name="nombre" value="<?php echo $prod[0]['nombre'] ?>" type="text" class="form-control" id="nombre" placeholder="Nombre del producto">
                            </div>
                            <div class="form-group">
                                <label for="inputPrecio">Precio</label>
                                <input name="precio" value="<?php echo $prod[0]['precio'] ?>" type="number" class="form-control" id="inputPrecio" placeholder="Precio del producto">
                            </div>
                           <div class="form-group">
                                <label for="inputPrecio">foto</label>
                                <input name="foto" value="<?php echo $prod[0]['foto'] ?>" type="file" class="form-control" id="inputPrecio" placeholder="img">
                            </div>
                            <button name="editar" type="submit" class="btn btn-primary">Editar</button>
                        </form>

                    </div>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
</body>

<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'open sans';
}

.contenedor {
    padding: 60px 0;
    width: 90%;
    max-width: 1000px;
    margin: auto;
    overflow: hidden;
}

.titulo {
    color: black;
    font-size: 30px;
    text-align: center;
    margin-bottom: 60px;
}

/* Header */

header {
    width: 100%;
    height: 300px;
    background: #bc4e9c;
    /* fallback for old browsers */
    
    /* Chrome 10-25, Safari 5.1-6 */
    background: linear-gradient(to right, hsla(147, 40%, 57%, 0.664), rgba(0, 0, 0, 0.007)), url(../../img/oficina.webp);
    /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    background-size: cover;
    background-attachment: fixed;
    position: relative;
}

nav{
    text-align: right;
    padding: 30px 50px 0 0;
}

nav > a{
    color:#fff;
    font-weight: 300;
    text-decoration: none;
    margin-right: 10px;
}

nav > a:hover{
    text-decoration: underline;
}

header .textos-header{
    display: flex;
    height: 430px;
    width: 100%;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    text-align: center;
}

.textos-header h1{
    font-size: 28px;
    color: black;
    font-family:'Times New Roman', Times, serif;
    
}

.textos-header h2{
    font-size: 30px;
    font-weight: 300;
    color: black;
}

.wave{
    position: absolute;
    bottom: 0;
    width: 100%;
}
</style>
