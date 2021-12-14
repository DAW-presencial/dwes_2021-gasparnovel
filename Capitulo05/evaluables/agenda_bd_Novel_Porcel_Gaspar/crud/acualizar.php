<?php
include('./sesion.php');
// metemos la sesion en una variable
$user = $_SESSION['user'];
// si no estan vacios cuando pulsemos los botones
if (isset($_POST['update']) and !empty($_POST['update'])) {
// almacenamos en variable una funcion
    $ret_val = $contacto->updateUser();
    // si es igual a 1
    if ($ret_val == 1) {
        // mostramos un alert
        echo '<script type="text/javascript">';
        echo 'alert("Usuario actualizado!");';
        echo 'window.location.href = "index.php";';
        echo '</script>';
    } else {
        // mostramos un alert
        echo "<script language='javascript'>";
        echo "alert('No se ha podido actualizar el usuario'){
        window.location.reload();
        }";
        echo "</script>";
    }
}
?>