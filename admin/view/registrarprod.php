<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="view/registrarprod.css">
</head>
<body>
    <br>
    <br>
    <br>

  <table class="regproducto">
<div class="justify-content w-100 h-100">
    <div class="card w-100">
        <div class="card-header">
            <h1>Registrar productos</h1>
        </div>
        <div class="card-body">
            <form action="index.php" method="post">
                <div class="form-group">
                    <label for="inputEmail">Nombre</label>
                    <input name="nombre" type="text" class="form-control" id="nombre" placeholder="Nombre del producto">
                </div>
                <div class="form-group">
                    <label for="inputPrecio">Precio</label>
                    <input name="precio" type="number" class="form-control" id="inputPrecio" placeholder="Precio del producto">
                </div>

                <div class="form-group">
                        <label>Imagen</label>
                        <input type="file" name="foto" id ="foto"  class="form-control" placeholder="Cargue imagen del producto">
                    </div>


                <button name="botonRegistrar" type="submit" class="btn btn-primary">Registrar</button>
            </form>
        </div>
        
</table>

</body>
</html>