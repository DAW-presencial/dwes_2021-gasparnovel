<?php
// clase
class Potatoe {
    // argumentos
    public $skin;
    protected $meat;
    private $roots;
    // constructor
    function __construct($s, $m, $r) {
        $this->skin = $s;
        $this->meat = $m;
        $this->roots = $r;
    }

}
// objeto
$Obj = new Potatoe(1, 2, 3);

echo "<pre> \n";
echo "Using get_object_vars:\n";

//  Obtiene las propiedades del objeto dado solo public
$vars = get_object_vars($Obj);
print_r($vars);

echo "\n\nUsing array cast:\n";
// guarda como array los argumentos del objeto 
$Arr = (array) $Obj;
// printa el array
print_r($Arr);
?>