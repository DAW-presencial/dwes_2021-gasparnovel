<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // podemos ver la peticion get en este caso empty
        var_dump($_GET);
        // podemos ver la informacion del entorno y del servidor en este caso null 
        // ya que consulta la cade na de peticion de la página
        var_dump($_SERVER['QUERY_STRING']);
        // podemos ver la informacion del entorno y del servidor en este caso 
        // la uri que se empleo para acceder a esta pagina 
        echo '<br' . var_dump($_SERVER['REQUEST_URI']);
        ?>
    </body>
</html>