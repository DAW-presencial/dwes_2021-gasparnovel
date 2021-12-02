<?php 

// if NO tiene su propio ámbito 
$bool = true;
if ($bool) {
    $hi = '<p>Hello to all people 1</p>';
}
?>
<?php 

// la asignación no se produce porque es false y por tanto $hi no existe,
if (false) {
    $hi = '<p>Hello to all people 2</p>';
}

// imprime el primer $hi
echo $hi;
?>