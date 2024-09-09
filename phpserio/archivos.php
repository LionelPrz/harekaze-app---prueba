<?php

    //Abriendo un archivo para leer su contenido
    $archivo="contenido.txt";
    $archivoAbierto=fopen($archivo,"r");

    $contenido=fread($archivoAbierto,filesize($archivo));

    echo $contenido;

?>