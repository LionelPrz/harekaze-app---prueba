<?php

    $nombreArchivo="archivo.txt";
    $contenidoArchivo="Hola, saludos";
    $archivoCrear= fopen($nombreArchivo,"w");

    fwrite($archivoCrear,$contenidoArchivo);
    
    fclose($archivoCrear);


?>