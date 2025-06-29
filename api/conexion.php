<?php
function conexion(){
$conn_string = "host=ep-aged-breeze-a5nbj7es.us-east-2.aws.neon.tech port=5432 dbname=pelispbs user=neondb_owner password=npg_feoAmQqXZE46 sslmode=require ";

$dbconn = pg_connect($conn_string);

if (!$dbconn) {
    die ("Error de conexión");
} 

return $dbconn;
}
?>
