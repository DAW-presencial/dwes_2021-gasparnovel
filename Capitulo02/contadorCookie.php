<!DOCTYPE html>
<html>
    <body>
        <h1>Vamos a contar cuantas veces has entrado</h1>
            <?php
            // si la coockie no esta vacio 
            if (isset($_COOKIE['visitas'])) {
                // metee la coockie con nombre, valor y tiempo de duracion
                setcookie('visitas', $_COOKIE['visitas'] + 1, time() + 3600 * 24);
                // muestra la coockie
                $mensaje = 'Numero de visitas: ' . $_COOKIE['visitas'];
            }
            // si esta vacio
            else {
                // metee la coockie con nombre, valor y tiempo de duracion
                setcookie('visitas', 2, time() + 3600 * 24);
                // muestra la coockie
                $mensaje = 'Bienvenido a nuestra pagina, espero que disfrutes de tu 1a vez';
            }
        echo $mensaje;
        ?>
    </body>
</html>
