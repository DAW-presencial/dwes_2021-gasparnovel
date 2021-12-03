<?php

// Clases anónimas. Es una clase que no tiene nombre, al igual que existen funciones anónimas.

// creamos clase
class Usuario
{
    // argumentos de la clase
    protected $database;
    // contructor
    public function __construct($database)
    {
        $this->database = $database;
    }
    // funcion que selecciona
    function select(): string
    {
        return $this->database->select();
    }
}
// nuevo objeto
$usuario = new Usuario(new class
    {
        function select(): string
        {
            return "<br/>CONSULTA SELECT DE USUARIOS<br/>";
        }
    }
);
// nuevo objeto con clase anonima
$perfil = new class
{
    protected $rol;

    function mostrar_perfil()
    {
        echo "<br/>El perfil del usuario es est";
    }
};

// mostramos
echo $usuario->select();
echo $perfil->mostrar_perfil();

// ejemplos
class SomeClass
{
}
interface SomeInterface
{
}
trait SomeTrait
{
}

var_dump(new class(10) extends SomeClass implements SomeInterface
{
    private $num;

    public function __construct($num)
    {
        $this->num = $num;
    }

    use SomeTrait;
});
