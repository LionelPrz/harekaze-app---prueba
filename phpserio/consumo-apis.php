<?php
    //consumimos url
    $url="https://api.dailymotion.com/videos?channel=videogames&limit=10";
    //Sacamos permisos para habilitar el consumo
    $opciones = array("ssl"=>array("verify_peer"=>false,"verify_peer_name"=>false));
    //Consumimos los datos sin los permisos
    $respuesta=file_get_contents($url,false,stream_context_create($opciones));
    //Decodificamos dichos datos a un formato json
    $objRespuesta = json_decode($respuesta);
    //Los imprimimos
    print_r($objRespuesta);
    //Los recorremos
    foreach($objRespuesta->list as $video){
       // print_r($video->title);
       // print_r($video->channel);
    }
?>
<ul>
    <!-- mediante html5 le damos formato al bucle enbebido -->
    <?php foreach($objRespuesta->list as $video){ ?>
        <li><?php echo($video->title); ?> | <?php echo($video->channel); ?></li>
    <?php } ?>
</ul>