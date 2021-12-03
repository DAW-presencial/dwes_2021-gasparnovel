<?php
/*
 * Tabla de multiplicar
 */

// Definimos dos constantes
const MAX_MULTIPLICANDO = 10;
const MAX_MULTIPLICADOR = 10;

// vamos metiendo en la variable etiquetas html
$output = '<table border="5" align="center"><thead><tr><th>*</th>';

// bucle, guarda y concatena en la variable el valor de i hasta finalizar el bucle
for ($i = 0; $i <= MAX_MULTIPLICADOR; $i++) {
    $output .= "<th>$i</th>";
}
// vamos metiendo en la variable etiquetas html
$output .= '</tr></thead><tbody>';

// bucle, guarda y concatena en la variable el valor de fila hasta finalizar el bucle
for ($fila = 0; $fila < MAX_MULTIPLICANDO; $fila++) {
    $output .= "<tr><th>$fila<multiplicar/th>";
    // bucle, guarda y concatena en la variable el valor de columna hasta finalizar el bucle
    for ($columna = 0; $columna <= MAX_MULTIPLICADOR; $columna++) {
        $output .= '<td align="center">' . $fila * $columna . '</td>';
    }
    // vamos metiendo en la variable etiquetas html
    $output .= '</tr>';
}
// vamos metiendo en la variable etiquetas html
$output .= '</tbody></table>';

// mostramos el valor de la variable
echo $output;

?>