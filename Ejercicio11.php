<?php
$cadena = "Alberto:Garay:913334455//Ana:Garcia:914445566";
$separador=":";
$cambiopersona="//";
//$root_dir = substr($haystack, 0, strnpos($haystack, $needle, 4));
//$informacion= substr($cadena,0, strpos($cadena,$cambiopersona));
$personas = explode($cambiopersona, $cadena);
echo "Informacion de la persona\n";
foreach($personas as $persona){
    $datos= explode($separador,$persona);
    echo "Nombre: " . $datos[0] . "\n";
    echo "Apellido: " . $datos[1] . "\n";
    echo "Teléfono: " . $datos[2] . "\n";
    echo "------------------------------\n";

}
   
?>