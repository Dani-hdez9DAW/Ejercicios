<?php
$nums = [];
$operacion = "";

do {
    echo "Introduzca un numero: ";
    $num = fgets(STDIN); // Leer la entrada del usuario con fgets y eliminar espacios en blanco al principio y al final
    $num = floatval($num); // Convertir la entrada a un número de coma flotante
    array_push($nums, $num);
} while ($num != 0);

while (true) {
    echo "Operación? (sumar/multiplicar): ";
    $operacion = trim(fgets(STDIN)); // Leer la operación y eliminar espacios en blanco al principio y al final

    if ($operacion === "sumar" || $operacion === "multiplicar") {
        break;
    } else {
        echo "Operación no válida. Debes ingresar 'sumar' o 'multiplicar'.\n";
    }
}

if ($operacion === "sumar") {
    $resultado = array_sum($nums);
    echo "La suma vale $resultado\n";
} elseif ($operacion === "multiplicar") {
    $resultado = array_product($nums);
    echo "La multiplicación vale $resultado\n";
}
?>
