
<?php 
// conexion con la base de datos
$host = "gnovel.ifc33b.cifpfbmoll.eu"; // host
$port = "5432"; // puerto
$dbname = "agenda_bd_novel_porcel_gaspar"; // base de datos
$user = "gnovel"; // usuario
$password = "abc123.";     // contraseña
?>
<?php
// intenta
try {
    $connection_string = "host={$host} port={$port} dbname={$dbname} user={$user} password={$password} ";
    $dbconn = pg_connect($connection_string);    
// error
} catch (Exception $e) {
    echo "<span class='error'> Hay un ERROR!: </span>" . $e->getMessage();
}
?>