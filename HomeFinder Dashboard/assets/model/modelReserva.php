<?php

require_once '../controller/controllerReserva.php';

if($_POST['op'] == 1){
    $get = new Reserva();
    $resp = $get -> selectImovel();
    echo($resp);
}else if($_POST['op'] == 2){
    $reg = new Reserva();
    $resp = $reg -> regRes(
        $_POST['imovelRes'],
        $_POST['dataEntRes'],
        $_POST['dataSaiRes'],
        $_POST['descRes'],
        $_POST['numPessoas']
    );
    echo($resp);
}else if($_POST['op'] == 3){
    $est = new Reserva();
    $res = $est -> listaResFeitos();
    echo($res);
}else if($_POST['op'] == 4){
    $est = new Reserva();
    $res = $est -> listaRes();
    echo($res);
}else if($_POST['op'] == 5){
    $est = new Reserva();
    $res = $est -> estadoAceite($_POST['id'], $_POST['dataent'], $_POST['datasaida'], $_POST['nome'], $_POST['morada']);
    echo($res);
}else if($_POST['op'] == 6){
    $est = new Reserva();
    $res = $est -> estadoRecusado($_POST['id']);
    echo($res);
}else if($_POST['op'] == 7){
    $est = new Reserva();
    $res = $est -> listaResAceites();
    echo($res);
}else if($_POST['op'] == 8){
    $est = new Reserva();
    $res = $est -> aceitaPagamento($_POST['id']);
    echo($res);
    }

?>