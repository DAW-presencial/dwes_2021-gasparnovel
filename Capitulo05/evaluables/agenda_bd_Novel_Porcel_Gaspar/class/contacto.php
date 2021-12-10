<?php
// Creamos la clase Contacto
class Contacto
{
    // Atributos privados
    private $db;
    private $nombre;
    private $primer_apellido;
    private $segundo_apellido;
    private $telefono;

    // Constructor de una clase 
    public function __construct($db, $nombre, $primer_apellido, $segundo_apellido, $telefono)
    {
        $this->db = $db;
        $this->nombre = $nombre;
        $this->primer_apellido = $primer_apellido;
        $this->segundo_apellido = $segundo_apellido;
        $this->telefono = $telefono;
    }

    // Funcion para agregar un contacto en la base de datos
    public function agregar()
    {
        // guarda el atributo privado
        $conn = $this->db;
        // variable que guarda una query que inserta los datos pasados por fomulario
        $stmt_insert = "insert into contacto(nombre, primer_apellido, segundo_apellido, telefono) values ('$this->nombre','$this->primer_apellido', '$this->segundo_apellido','$this->telefono');";
        // intenta
        try {
            // ejecuta la variable
            $conn->exec($stmt_insert);
            // devuelve el texto
            return " y se ha agregado el contacto";
            // atrapa el error
        } catch (PDOException $PDOException) {
            return ", pero hay un ERROR!: " . $PDOException->getMessage();
        }
    }

    // Funcion que actualiza los contactos 
    public function actualizar()
    {
        // Guarda el atributo privado
        $conn = $this->db;
        // Variable que guarda una query que actualiza un contacto
        $stmt_actualizar = "update contacto set nombre = '$this->nombre', 
                    primer_apellido = '$this->primer_apellido', segundo_apellido = '$this->segundo_apellido', 
                    telefono = '$this->telefono' where nombre = '$this->nombre' and primer_apellido = '$this->primer_apellido' 
                    and segundo_apellido = '$this->segundo_apellido';";
        // intenta
        try {
            $conn->exec($stmt_actualizar);
            // devuelve el texto
            return " y se ha actualizado el contacto";
            // atrapa el error
        } catch (PDOException $PDOException) {
            return ", pero hay un ERROR!: " . $PDOException->getMessage();
        }
    }

    // Funcion que elimina un contacto donde el telefono coincida
    public function eliminar()
    {
        // Guarda el atributo privado
        $conn = $this->db;
        // Variable que guarda una query que elimina un contacto donde el telefono coincida
        $stmt_eliminar = "delete from contacto where telefono='$this->telefono';";
        // intenta
        try {
            $conn->exec($stmt_eliminar);
            // devuelve el texto
            return " y se ha eliminado el contacto";
            // atrapa el error
        } catch (PDOException $PDOException) {
            return ", pero hay un ERROR!: " . $PDOException->getMessage();
        }
    }

    // Funcion que muestra los contactos
    public static function mostrar()
    {
        // Crea un nuevo objeto
        $db = new Database();

        // Guarda la funcion
        $conn = $db->getConnection();
        echo " y se muestran los contactos:";
        // Variable que guarda una query que selecciona
        $stmt_select = $conn->query('select nombre, primer_apellido, segundo_apellido, telefono from contacto');
        // intenta
        try {
            echo "<h1><br>CONTACTOS</h1><br>";
            echo "<table>";
            echo "<thead>";
            echo "<tr>";
            echo "<th>Nombre</th>";
            echo "<th>Primer apellido</th>";
            echo "<th>Segundo apellido</th>";
            echo "<th>Telefono</th>";
            echo "</tr>";
            echo "</thead>";
            echo "<tbody>";
            while ($row = $stmt_select->fetch()) {
                echo "<tr><td> " . $row['nombre'] . "</td><td> " . $row['primer_apellido'] . "</td><td> " . $row['segundo_apellido'] . "</td><td>" . $row['telefono'] . "</td> </tr>";
            }
            echo "</tbody>";
            echo "</table>";
            // atrapa el error
        } catch (PDOException $PDOException) {
            return ", pero hay un ERROR!: " . $PDOException->getMessage();
        }
    }
}
?>