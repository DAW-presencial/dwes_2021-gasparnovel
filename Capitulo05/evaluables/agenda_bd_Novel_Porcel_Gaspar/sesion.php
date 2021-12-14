<?php
// empezamos una sesion
session_start();
// incluimos el archivo php
require('./class/contacto.php');
// crreamos un objeto
$contacto = new Contacto();
// almacenamos en variable una funcion
$users = $contacto->getUsers();
?>