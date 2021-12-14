<?php
include('./sesion.php');

$users = $contacto->getUsers();
$sn = 1;
if (isset($_POST['update'])) {

    $user = $contacto->getUserById();
    $_SESSION['user'] = pg_fetch_object($user);
    header('location:./formulario_actualizar.php');
}
if (isset($_POST['delete'])) {

    $ret_val = $contacto->deleteuser();
    if ($ret_val == 1) {
        echo "<script language='javascript'>";
        echo "alert('Usuario borrado!'){
        window.location.reload();
        }";
        echo "</script>";
    } else {
        echo "<script language='javascript'>";
        echo "alert('No se ha podido borrar el usuario'){
        window.location.reload();
        }";
        echo "</script>";
    }
}
?>