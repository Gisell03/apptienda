<?php
$conn = new mysqli("b7ebj5x4vmkrzjzxbsyb-mysql.services.clever-cloud.com", "uq7biqqrwvtadijqroot", "TOlllRkGcFgCy9TtKkdz", "b7ebj5x4vmkrzjzxbsyb");
  
  if ($conn->connect_error) {
    die("ERROR: No se puede conectar al servidor: " . $conn->connect_error);
  } 
?>