<?php 

function message($message) {
    echo "$message <br/>\r";
    return true;
}

// solo muestra first class porque es donde devuleve true
$k = false;
if (message("first class") && $k && message("second class")) {;}

// muestra todo porque los dos valores pasados por funcion son true
$k = true;
if (message("first") && $k && message("second")){;}
?>