<?php
echo "Introduce n: ";
$n = intval(trim(fgets(STDIN))); // Lee la entrada del usuario y la convierte en un número entero//tambien se puede asi , fscanf(STDIN,%d\n" ,$n);//
var_dump($n);//el var_dump nos sirve para poder aproximar,para evitar tener los numeros flotantes
echo "Introduce p (entre 1 y 10): ";
$p = intval(trim(fgets(STDIN))); // Lee la entrada del usuario y la convierte en un número entero

if ($p >= 1 && $p <= 10) {
    for ($i = 1; $i <=$n; $i++) {
        for ($j = 0; $j < $p; $j++) {
            echo $j . " ";
        }
    }
    echo "\n";
} else {
    echo "El valor de p debe estar entre 1 y 10.\n";
}
?>
