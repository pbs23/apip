<?php
include 'conexion.php';
$id_categoria = $_GET['id_categoria'];
$peliculas = pg_query(conexion(),"Select * from canales where categoria=$id_categoria ");
$respuesta = pg_fetch_all($peliculas);
echo json_encode($respuesta);
pg_close();

?>