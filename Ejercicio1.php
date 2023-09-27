<?php
// Inicializa las variables máximo y mínimo con valores iniciales
$maximo = PHP_INT_MIN; // Establece el valor máximo inicial como el mínimo valor posible en PHP
$minimo = PHP_INT_MAX; // Establece el valor mínimo inicial como el máximo valor posible en PHP

// Comienza el bucle para pedir números hasta que se ingrese 0
while (true) {
    echo "Introduce un número entero (0 para finalizar): ";
    $numero = intval(trim(fgets(STDIN))); // Lee la entrada del usuario y la convierte en un número entero

    // Comprueba si se ingresó 0 para salir del bucle
    if ($numero === 0) {
        break;
    }

    // Actualiza los valores máximo y mínimo según sea necesario
    if ($numero > $maximo) {
        $maximo = $numero;
    }

    if ($numero < $minimo) {
        $minimo = $numero;
    }
}

// Imprime el resultado
echo "Máximo: $maximo\n";
echo "Mínimo: $minimo\n";
?>
