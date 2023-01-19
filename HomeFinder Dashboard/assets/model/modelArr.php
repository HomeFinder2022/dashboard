<?php

require_once '../controller/controllerArr.php';

if($_POST['op'] == 1){

    $reg = new Arrendamento();
    $resp = $reg -> regArr(
        $_POST['imovelArr'],
        $_POST['inquiArr'],
        $_POST['inventArr'],
        // $_POST['estadoArr'],
        $_POST['tipoPagArr'],
        $_POST['caucaoArr'],
        $_POST['dataPagamentoArr'],
        $_POST['docArr']
    );
    echo($resp); 
    }else if($_POST['op'] == 2){
    $get = new Arrendamento();
    $resp = $get -> selectImoveis();
    echo($resp);
    }else if($_POST['op'] == 3){
    $get = new Arrendamento();
    $resp = $get -> selectInquilinos();
    echo($resp);
    }else if($_POST['op'] == 4){
    $get = new Arrendamento();
    $resp = $get -> selectInventarios();
    echo($resp);
    }else if($_POST['op'] == 5){
    $get = new Arrendamento();
    $resp = $get -> selectEstado();
    echo($resp);
    }else if($_POST['op'] == 6){
    $get = new Arrendamento();
    $resp = $get -> selectTipoPagamento();
    echo($resp);
    }else if($_POST['op'] == 7){
    $table = new Arrendamento();
    $res = $table -> listaArrends();
    echo($res);
    }else if($_POST['op'] == 8){
    $get = new Arrendamento();
    $resp = $get -> selectDocs();
    echo($resp);
    }else if($_POST['op'] == 9){
    $getDados = new Arrendamento();
    $res = $getDados -> infoArrendamento($_POST['id']);
    echo($res);
    }else if($_POST['op'] == 10){
    $getDados = new Arrendamento();
    $res = $getDados -> confirmRenda($_POST['preco'], $_POST['inquilino']);
    echo($res);
}else if($_POST['op'] == 11){
    $getDados = new Arrendamento();
    $res = $getDados -> estadoArr($_POST['id']);
    echo($res);
    }

    
?>