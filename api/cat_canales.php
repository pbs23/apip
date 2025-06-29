<?php
include 'conexion.php';

$peliculas = pg_query(conexion(),"Select * from canales_cat ");
$respuesta = pg_fetch_all($peliculas);
echo json_encode($respuesta);

?>