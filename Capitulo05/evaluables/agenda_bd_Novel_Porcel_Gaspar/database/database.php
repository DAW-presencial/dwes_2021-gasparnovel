<?php
// creamos la clase Database
class Database
{
    // propiedaes privadas
    private const HOST = "localhost";
    private const DBNAME = "agenda";
    private const USERNAME = "gaspar";
    private const PASSWORD = "mysqlroot";
    public static $conn;

    // contructor vacio
    public function __construct()
    {
    }
    // funcion estatica que permite la conexion con la database
    public static function getConnection()
    {   // intenta
        try {
            // guarda en la variable
            $conn = new PDO("mysql:host=" . Database::HOST . ";dbname=" . Database::DBNAME, Database::USERNAME, Database::PASSWORD);
            // mete en la variable los atributos
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "<br>";
            echo "<span class='check'>Conexión realizada con la base de datos</span>";
        // capta el error y lo procesa 
        } catch (PDOException $exception) {
            echo "<span class='error'> Hay un ERROR!: </span>" . $exception->getMessage();
        }
        // devuelve $conn
        return $conn;
    }
}
?>