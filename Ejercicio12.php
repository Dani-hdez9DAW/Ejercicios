<?php
$cadena = "Erase una vez un tonto que empujo a otro tonto en el campo\n";//es buena opcion utilizar implode y explode.
/*$cadena_censurada=str_replace("tonto","*****",$cadena);
echo $cadena;
echo $cadena_censurada;*/
   //print_r(explode("tonto",$cadena));//recordamos que print_r no devuelve como si fuese un array , por lo que es util
    echo implode('******',explode("tonto",strtolower($cadena)));//con el implode insertamos el caracter * y sustituimos por la palabra explode

?>