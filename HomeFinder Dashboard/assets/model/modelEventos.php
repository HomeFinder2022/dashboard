<?php

require_once '../controller/controllerEventos.php';

if($_POST['op'] == 1){
    $show = new Evento();
    $res = $show -> infoEvento();
    echo($res);
}
 

    
?>