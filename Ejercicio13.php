<?php
$cadena="El Tonto pegó al malo porque era amargado";
$censuras= [
 'tonto'=>'*****',
 "malo" =>"****",
 "despistado"=>"**********",
 "amargado"=>"********",
 "patada"=>"******"
];
$frase=readline("Introduce una frase cualquiera : ");
$frasecambiada=str_ireplace(array_keys($censuras),array_values($censuras),$frase);
echo  " ".$frasecambiada;


/* Otra manera de hacerlo 
$cadena="";
$cadenacensuradan=$cadena;
foreach($listaNegra as $palabraProhibida){
$tachon="";
for($i=0;$i<strlen(palabraProhibida);$i++){
$tachon .='*';
}
$cadenaCensurada = implode("<b><i>$palabraProhibida</i></b>",explode($palabraProhibida,strtolower($cadena)));
}*/
?>