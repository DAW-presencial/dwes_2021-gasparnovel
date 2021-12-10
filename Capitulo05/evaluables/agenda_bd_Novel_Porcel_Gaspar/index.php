<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <title>AGENDA DE CONTACTOS</title>
            <link rel="stylesheet" href="./css/styles.css">
        </head>
        <body>
            <div class="div">

                <h1>AGREGAR CONTACTOS</h1>
                <!-- Formulario -->
                <form class="form" action="contactos.php" method="post">

                    <label for="nombre">Nombre</label>
                    <input type="text" id="nombre" name="nombre">

                    <label for="primer_apellido">Primer apellido</label>
                    <input type="text" id="primer_apellido" name="primer_apellido">

                    <label for="segundo_apellido">Segundo apellido</label>
                    <input type="text" id="segundo_apellido" name="segundo_apellido">

                    <label for="telefono">Telefono</label>
                    <input type="text" id="telefono" name="telefono">

                    <input class="boton" type="submit" name="agregar" value="Agregar">
                    <input class="boton" type="submit" name="actualizar" value="Actualizar">
                    <input class="boton" type="submit" name="eliminar" value="Eliminar">
                    <input class="boton" type="submit" name="mostrar" value="Mostrar">
                
                </form>
            </div>
        </body>
    </html>
