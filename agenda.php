<!DOCTYPE html>
    <html>

        <head>
            <meta charset="UTF-8">
            <title>Agenda_PHP</title>
        </head>

        <body>

            <style>
            body {
                background-color: #EEEEEE;
            }

            h1,
            h2 {
                text-decoration: underline;
                display: inline-block;
            }
            </style>
            
            <?php

                /**
             * @author Gaspar Novel Porcel
             * Curso: 2n FPGS DAW Presencial
             * Módulo: DWES
             * Práctica: DWES_C2P03_formulario agenda
             * @version: 1.0
             */


            /**
             * Declaracion de las variables agenda y persona
             * @var $agenda type array
             * @var $persona type array
             */

            $agenda = [];
            $persona = [];

            if (isset($_GET['submit'])) { // Comprobamos si el cliente ha hecho submit

                /**
                 * Si hace submit guardamos en en la variable $persona los valores "nombre" y "telefono"
                 * Guardo la información en la variable persona_introducida
                 */

                $persona_introducida = $_GET["persona"];

                if (isset($_GET["personas"])) { // Comprobamos que el GET de "personas" existe
                    $agenda = $_GET["personas"]; //Guardamos en $agenda todas las "personas"
                }

                /**
                 * Comprobamos si el input del nombre esta o no vacio ya que es un campo obligatorio
                 * Si esta vacio muestra un mensaje
                 */

                if ($persona[0] == "") { 
                    echo "No has introducido un nombre vuelve a intentarlo!"; 
                } else {

                    /**
                     * Comprobamos si el campo del telefono esta o no vacio
                     * Llamamos a la funcion delete en el caso de que el campo este vacio
                     * En caso contrario, añadimos el nuevo valor a la variable agenda
                     */

                    if ($persona[1] == "") { // 
                        $agenda = delete($agenda, $persona[0]); 
                    } else {
                        $agenda[$persona[0]] = $persona[1]; 
                    }
                }

                mostrarFormulario($agenda); 

                mostrarAgenda($agenda); 


            } else { // Si el cliente no ha hecho submit simplemente mostrará el formulario

                mostrarFormulario($agenda);

            }

        /**
         * funcion mostrarFormulario()
         * muestra el formulario y le pasamos por parametro los contactos que hemos guardado dentro de la variable $agenda.
         * De esta manera, podemos guardar los contactos en un input "hidden".
         * @param $agenda
         */

        function mostrarFormulario($agenda) {
            ?>
            <h1>Agenda_PHP</h1>
            <form name="formulario" method="get" action="">
                <h5>Añadir contacto:</h5>
                <label><h2>Nombre: </h2></label>
                <input type="text" name="persona[]"/><br>
                <label><h2>Teléfono:</h2></label>
                <input type="text" maxlength="9" name="persona[]"/><br><br>
                <?php
                /**
                 * Por cada contacto que hay en la agenda, creamos un input de tipo hidden para no perder la información
                 * ya que una vez que hacemos submit, la pagina actualiza y la informacion se pierde.
                 * En "name" guardamos las claves del array y en "value" los valores del array, en nuestro caso, los nombres y
                 * los telefonos de cada contacto, respectivamente.
                 *
                 */
                foreach ($agenda as $nombre => $telefono) {
                    echo '<input type = "hidden" name="personas[' . $nombre . ']" value="' . $telefono . '"/>';
                }
                ?>
                <input type="submit" name="submit" value="Enviar" />
            </form>
            <?php
        }

        /**
         * function mostrarAgenda() con esta funcion mostramos la agenda con las modificaciones que se hayan
         * hecho con el ultimo submit
         * @param $agenda
         */
        function mostrarAgenda($agenda) {

            $salidaPant = '<h2>Contactos</h2><table border="1px solid #ddd"><tr>';
            $salidaPant .= '<th style="height: 30px; width: 100px;">Name </th><th style="height: 30px; width: 100px;"> Phone </th></tr>';
            /**
             * Recorremos la variable $agenda que pasamos por parametro y guardamos los valores en la variable $salidaPant
             */
            foreach ($agenda as $nombre => $telefono) {
                $salidaPant .= '<tr>';
                $salidaPant .= '<th style="font-weight: normal; height: 30px; width: 100px;">' . $nombre . '</th>';
                $salidaPant .= '<th style="font-weight: normal; height: 30px; width: 100px;">' . $telefono . '</th>';
                $salidaPant .= '</tr>';
            }
            $salidaPant .= '</table>';

            /**
             * Mostramos el contenido de la variable $salidaPant en el html
             */
            echo $salidaPant;
        }


        /**
         * function delete() borramos el contacto que coincida con el parametro $name del array $agenda y devolvemos
         * la agenda actualizada
         * @param $agenda
         * @param $name
         * @return mixed
         */
        function delete($agenda, $name) {
            /**
             * @var $contador tipo int
             */
            $contador = 0;

            foreach ($agenda as $nombre => $telefono) {
                /**
                 * Recorremos el array $agenda y comprobamos si hay algun nombre dentro del array que coincida con
                 * la variable $name para borrarlo
                 */
                if ($name == $nombre) {
                    unset($agenda[$nombre]); //hacemos un unset para borrar el contacto del array
                    $contador++;
                }
            }
            /**
             * Si no hemos borrado ningun contacto, el valor del $contador sera 0 y por tanto, nos mostrara los siguientes
             * warnings:
             * 1. Hemos introducido un nombre nuevo.
             * 2. No hemos introducido un numero de telefono.
             */
            if ($contador == 0) { //si no borramos, mostramos un warning ya que no hacemos nada
                echo "WARNING! HAS INTRODUCIDO UN NOMBRE QUE NO SE ENCUENTRA EN LA AGENDA." . '<br>';
                echo "WARNING! NO HAS INTRODUCIDO NINGÚN NÚMERO DE TELÉFONO." . '<br>';
            }
            return $agenda;
        }

        ?>
        </body>

    </html>