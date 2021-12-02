<?php
// Creamos una variable
$string = "Hola, Mundo";
// Muestra 'Hola,”
echo substr($string, 0, 5) . '<br>';
// Muestra “Mundo”   
echo '<br>' .substr($string, 6). '<br>';
// Muestra 'o'
echo '<br>' . substr($string, -1) . '<br>';
// Muestra 'Mund'            
echo '<br>' . substr($string, -5, -1) . '<br>';        
?>