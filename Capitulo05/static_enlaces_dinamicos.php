<?php

class A {
    public function test() {
        $this->foo();
        static::foo();
    }
}

class B extends A {
    /* foo() se copiará en B, por lo tanto su ámbito seguirá siendo A
     * y la llamada tendrá éxito */
}

class C extends A {

    protected function foo() {
        /* se reemplaza el método original; el ámbito del nuevo es ahora C */
        echo "Ejecutando foo() de C y privada<br/>";
    }
}

$c = new C();
// llama a foo y el unico que tiene implementado la funcion es C
$c->test();
?>