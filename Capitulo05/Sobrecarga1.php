<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>

    </head>
    <body>
        <?php
        // Sobrecarga de métodos en PHP
        // Creamos una clase que contiene diferentes metodos 
        class OverloadedClass {
            // funcionn con un parametro
            private function Param1($a) {
                echo "hola mundo 1 parámetro <br/>";
            }
            // funcionn con dos parametro
            private function Param2($a, $b) {
                echo "Param2($a,$b)<br/>";
            }
            // funcionn con tres parametro
            private function Param3($a, $b, $c) {
                echo "Param3($a,$b,$c)<br/>";
            }
            // funcion general
            public function Param() {
                // la variable guarda la cuenta de los parametros pasados
                $p = func_get_args();
                // var_dump($p); 
                // intenta
                try {
                    // switch que recoge el numero de bytes de un entero
                    switch (sizeof($p)) {
                        // caso 1 si solo hay un parametro llama a la funcion de solo 1
                        case 1: {
                                $this->Param1($p[0]);
                                break;
                            }
                        // caso 2 si solo hay un parametro llama a la funcion de 2
                        case 2 : {
                                $this->Param2($p[0], $p[1]);
                                break;
                            }
                        // caso 3 si solo hay un parametro llama a la funcion de 3
                        case 3 : {
                                $this->Param3($p[0], $p[1], $p[2]);
                                break;
                            }
                        // caso por defecto 
                        default : throw new Exception(' Llamada a método ' . get_class($this) .
                                            ' ::Param, con número inadecuado de parámetros');
                    }
                // coge la exception
                } catch (Exception $e) {
                    echo "Entrando en la excepción:" . $e->getMessage();
                }
            }
        }
        // creamos un objeto
        $o = new OverloadedClass();
        $o->Param(3);
        $o->Param(4, 5);
        $o->Param(4, 5, 6, 6);
        ?>
    </body>
</html>