<?php
//Sacar raiz y sufijo de cualquier sustantivo regular masculino o femenino , singular o plural
//Dado un verbo regular de la 1º ,2º,3º conjugacion sacar todas sus formas del presente de indicativo
//si ponemos un - significa que quitamos los -n ultimos caracteres

    echo "PALABRA: ";
    fscanf(STDIN,"%s\n",$a);
    $ul = substr($a,-1);
    $raiz = $ul=='s'? substr($a,0,-2) : substr($a,0,-1);
    $sufijo= $ul=='s'? substr($a,-2) : substr($a,-1);
    echo "RAIZ : $raiz\n";
    echo "SUJIFO : $sufijo\n";




?>