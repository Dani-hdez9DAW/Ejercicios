<?php
// Definir un array con las palabras
$palabras = array("as", "dos", "tres", "cuatro", "cinco", "seis", "siete", "sota", "caballo", "rey");

// Solicitar al usuario que ingrese un número
echo "Introduce n: ";
$n = intval(fgets(STDIN));

// Inicializar un contador para recorrer el array de palabras
$contador = 0;

// Imprimir las palabras según el número ingresado
while ($n > 0) {
    echo $palabras[$contador % count($palabras)] . " ";
    $contador++;
    $n--;
}

echo "\n";
?>
