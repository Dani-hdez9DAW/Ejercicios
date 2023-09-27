<?php
echo "Introduce n: ";
$n = fgets(STDIN); // Lee la entrada del usuario y la convierte en un número entero
$caracter ='+';
for($i=$n; $i>=1;$i--){
    for($j=1;$j<=$i;$j++){
       switch($caracter){
        case '+' : echo $caracter ='-';break;
        case '-' : echo $caracter = '.';break;
        case '.' : echo $caracter = '+';break;
       }
    }
    echo"\n";
}
   

?>