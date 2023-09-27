<?php
    $texto = readline("Introduce línea de texto: ");
    $n = intval(readline("Introduce un numero entre 1 y 6: "));

if($n>=1 && $n<=6){
    for ($i = 1; $i <= $n; $i++) {
        echo "<h$i>$texto</h$i>\n";
    }
    for ($i = $n - 1; $i >= 1; $i--) {
        echo "<h$i>$texto</h$i>\n";
    }
}else{
    echo "Por favor introduzca un numero entre 1 y 6";
}

?>
