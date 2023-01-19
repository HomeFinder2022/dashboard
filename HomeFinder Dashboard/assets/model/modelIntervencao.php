<?php

require_once '../controller/controllerIntervencao.php';

if($_POST['op'] == 1){

    $reg = new Intervencao();
    $resp = $reg -> regInt(
        $_POST['tipoInt'],
        $_POST['dataInt'],
        $_POST['descInt'],
        $_POST['imovel']
    );
    echo($resp);
}else if($_POST['op'] == 2){
    $get = new Intervencao();
    $resp = $get -> selectTipoInt();
    echo($resp);
}else if($_POST['op'] == 3){
    $get = new Intervencao();
    $resp = $get -> selectImovel();
    echo($resp);
}else if($_POST['op'] == 4){
        $est = new Intervencao();
        $res = $est -> listaInts();
        echo($res);
    }else if($_POST['op'] == 5){
        $est = new Intervencao();
        $res = $est -> estadoAceite($_POST['id'], $_POST['data'], $_POST['descricao']);
        echo($res);
    }else if($_POST['op'] == 6){
        $est = new Intervencao();
        $res = $est -> estadoRecusado($_POST['id']);
        echo($res);
    }else if($_POST['op'] == 7){
        $est = new Intervencao();
        $res = $est -> listaIntsAceites();
        echo($res);
    }else if($_POST['op'] == 8){
        $est = new Intervencao();
        $res = $est -> listaIntsFeitos();
        echo($res);
    }

?>