<?php

class conexion {

    private $servidor="bo2wnmemhht6qlef8myd-mysql.services.clever-cloud.com";
    private $usuario="uzbswv1jpihja46d";
    private $contrasenia="rWzPAU89Pw0WSDYeV7B4";
    private $conexion;

    public function __construct() {

        try {
            $this->conexion = new PDO("mysql:host=$this->servidor;dbname=bo2wnmemhht6qlef8myd", $this->usuario, $this->contrasenia);
            $this->conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        }
        catch (PDOException $e){
            return "Falla de conexión".$e;
        }

    }

    public function ejecutar($sql) {

        $this->conexion->exec($sql);
        return $this->conexion->lastInsertId();

    }

    public function consultar ($sql) {

        $sentencia = $this->conexion->prepare($sql);
        $sentencia->execute();
        return $sentencia->fetchAll();

    }

}

?>
