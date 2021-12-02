<?php
/* Muestra 
 * - Cómo acceder a una variable estática desde una global
 * - Cómo asigna un valor a una variable cuando no se llama con el &
 */
function &func() {
    static $static = 0;
    $static++;
    return $static;
}
// Si pones & siempre hace refeencia a la de la funcion sino lo pones hace referencia al momento 
$var1 = &func();
echo "var1_a: ", $var1; // 1
func(); // 2
func(); // 3
echo "<br/>var1_b: ", $var1; // 3
$var2 = func(); // assignment without the &, 4
echo "<br/>var2_a: ", $var2; // muestra 4
func(); // 5
func(); // 6
echo "<br/>var1_c: ", $var1; // muestra 6
echo "<br/>var2_b: ", $var2; // still 4
?>