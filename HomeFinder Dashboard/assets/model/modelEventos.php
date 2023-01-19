<?php

require_once '../controller/controllerEventos.php';

if($_POST['op'] == 1){
    $reg = new Evento();
    $res = $reg -> regEvento(
    $_POST['titleEvent'],
    $_POST['descEvent'],
    $_POST['inicioEvent'],
    $_POST['fimEvent']
);
    echo($res);
}
 

    
?>