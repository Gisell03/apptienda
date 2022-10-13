<?php

$objConexion = new conexion();

$productos = "SELECT * FROM producto";
$productos = $objConexion->consultar($productos);

$oferta = "SELECT * FROM oferta INNER JOIN producto ON producto.id = oferta.id_oferta";
$ofertas = $objConexion->consultar($oferta);

if ($_POST) {

    if (isset($_POST['seleccionar'])) {

        $id = $_POST['seleccionar'];
        $precio = $_POST['precio'];
        $nombre = $_POST['nombre'];
        $foto = $_POST['foto'];

    }

}

?>