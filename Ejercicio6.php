<?php
$nombre;
$edad;
$personas = array();

do {
    echo "Introduzca un nombre: ";
    $nombre = readline();

    if ($nombre != "Fin") {
        echo "Introduzca por favor una edad para " . $nombre . ": ";
        $edad = intval(readline()); // Convertimos la entrada de edad a un entero

        if ($edad >= 0) {
            // Utilizamos un arreglo asociativo para almacenar el nombre y la edad
            //$personas[$nombre] = $edad;,se puede asi tambien ya que cada vuelta que se da genera un nombre y una edad asignada a ese nombre.
            //Seria como una tarjeta que se genera cada vuelta
            $personas[] = ['nombre' => $nombre, 'edad' => $edad];
        } else {
            echo "Vuelve a introducir los datos\n";
        }
    }
} while ($nombre != "Fin");

echo "Información de las personas elegidas:\n";

function mostrar($mipersonas) {
    foreach ($mipersonas as $persona) {
        echo $persona['nombre'] . "(" . $persona['edad'] . "), ";
    }
}
if($personas!=[]){
    mostrar($personas);
    asort($personas);
    arsort($personas);
}else{
    echo "La lista está vacía";
}

?>

    