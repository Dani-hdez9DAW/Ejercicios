<?php
$numeros = [
    'ro'=>["i","ii","iii","iv","v","vi","vii","viii","ix","x"],
    'es'=> ["uno", "dos", "tres", "cuatro", "cinco", "seis", "siete", "ocho", "nueve", "diez"]
 ];
do{
    $resultadoNum = intval(readline("Introduzca un número entre 1 y 10:\t"));
}while($resultadoNum<1 || $resultadoNum>10);
$formato =(readline("Introduzca un formato (es,ro)\t:"));
for($i=0;$i<=$resultadoNum-1;$i++){
echo $numeros[$formato][$i].",";
}

?>
