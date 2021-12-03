<?php
/*
 * Ejemplo de obtención de subcadenas
 */
$string = "Hola, Mundo";
// Muestra 'Hola,”
echo substr($string, 0, 5);
// Muestra “Mundo”          
echo '<br>' . substr($string, 6);
// Muestra 'o'      
echo '<br>' . substr($string, -1);        
//Muestra Mund
echo '<br>' . substr($string, -5, -1);   
?>