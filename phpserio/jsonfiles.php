<?php

    $jsonContenido='[
        {"nombre":"Nokotan","apellido":"Shikanoko"},
        {"nombre":"Kaguya","apellido":"Shinomiya"}
    ]';

    $resultado = json_decode($jsonContenido);
    //print_r($resultado);

    foreach($resultado as $persona){
        print_r($persona->nombre);
    }

?>