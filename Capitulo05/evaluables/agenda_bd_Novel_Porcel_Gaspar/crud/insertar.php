<?php
include('./sesion.php');

if (isset($_POST['submit']) and !empty($_POST['submit'])) {
    $ret_val = $contacto->createUser();
    if ($ret_val == 1) {
        echo '<script type="text/javascript">';
        echo 'alert("Usuario añadido!");';
        echo 'window.location.href = "index.php";';
        echo '</script>';
    } else {
        echo "<script language='javascript'>";
        echo "alert('No se ha podido añadir el usuario'){
        window.location.reload();
        }";
        echo "</script>";
    }
}
?>