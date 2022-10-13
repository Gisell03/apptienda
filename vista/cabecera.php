<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba Sitio Web</title>
    <script src="https://kit.fontawesome.com/1a3d6caaee.js" crossorigin="anonymous"></script>
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
            <a href="index.php">inicio</a>
            <a href="acerca.php">sobre nosotros</a>
            <a href="producto.php">productos</a>
            <a href="admin/indexadmin.php">login<i class="fa-solid fa-arrow-right-from-bracket" style= "margin-left: 5px"></i></a>
        </nav>
        <section class="textos-header">
            <h1>Bienvenido a nuestra sesion de productos</h1>
            <h1>Aprovecha y llevate el tuyo.!</h1>
        </section>
        <div class="wave" style="height: 150px; overflow: hidden;"><svg viewBox="0 0 500 150" preserveAspectRatio="none"
                style="height: 100%; width: 100%;">
                <path d="M0.00,49.98 C150.00,150.00 349.20,-50.00 500.00,49.98 L500.00,150.00 L0.00,150.00 Z"
                    style="stroke: none; fill: #fff;"></path>
            </svg></div>
    </header>
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
    height: 600px;
    background: #bc4e9c;
    /* fallback for old browsers */
    
    /* Chrome 10-25, Safari 5.1-6 */
    background: linear-gradient(to right, hsla(147, 40%, 57%, 0.664), rgba(0, 0, 0, 0.007)), url(img/oficina.webp);
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
    color:#fff;
    font-family:'Times New Roman', Times, serif;
    
}

.textos-header h2{
    font-size: 30px;
    font-weight: 300;
    color:#fff;
}

.wave{
    position: absolute;
    bottom: 0;
    width: 100%;
}
</style>
