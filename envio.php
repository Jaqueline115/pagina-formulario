<?php
$destino = "suzukiakiro26@gmail.com";
$nombre = $_post["nombre"];
$apellido_p = $_post["apellido paterno"];
$apellido_m = $_post["apellido materno"];
$fecha_n = $_post["fecha de nacimiento"];
$genero = $_post["genero"];
$profesion = $_post["profesion"];
$ciudad = $_post["ciudad"];
$DATOS = "nombre" .$nombre. "apellido_p".$apellido_p. "apellido_m" .$apellido_m. "fecha_n" .$fecha_n. "genero" .$profesion. "profesion"; .$genero. "ciudad" .$ciudad;
mail($destino, "Datos del Registro", $DATOS);
?>
