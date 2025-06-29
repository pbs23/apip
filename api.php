<?php
include 'conexion.php';

$peliculas = pg_query(conexion(),"Select * from peliculas ");
$respuesta = pg_fetch_all($peliculas);
echo json_encode($respuesta);
pg_close();

?>