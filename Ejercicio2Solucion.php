<?php
// Obtener el valor de "n" desde el usuario
echo "Introduce n: ";
$n = intval(readline());

// Inicializar el carácter inicial
$char = "+-.";

// Bucle para imprimir las líneas
while ($n > 0) {
    // Construir la línea
    $line = str_repeat($char, $n);
    
    // Imprimir la línea
    echo $line . PHP_EOL;
    
    // Mover al siguiente carácter en el patrón
    $char = substr($char, 0);
    
    // Decrementar n
    $n--;
}
?>
