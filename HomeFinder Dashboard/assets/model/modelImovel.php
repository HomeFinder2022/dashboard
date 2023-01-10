<?php

require_once '../controller/controllerImovel.php';

if($_POST['op'] == 1){

    $reg = new Imovel();
    $resp = $reg -> regImovel(
        $_POST['tipoImovel'],
        $_POST['tipologiaImovel'],
        $_POST['moradaImovel'],
        $_POST['postalImovel'],
        $_POST['listaDistritos'],
        $_POST['listaConcelhos'],
        $_POST['listaFreguesias'],
        $_POST['areaUtil'],
        $_POST['areaBruta'],
        $_POST['numWcs'],
        $_POST['anoImovel'],
        $_POST['certEnerg'],
        $_POST['estadoImovel'],
        $_POST['tipoNegocImovel'],
        $_POST['obsImovel'],
        $_POST['pImovel'],
        $_POST['rendaImovel'],
        $_POST['precoNoite'],
        $_FILES
    );
    echo($resp);
    }else if($_POST['op'] == 2){
    $table = new Imovel();
    $res = $table -> listaImoveis();
    echo($res);
}else if($_POST['op'] == 3){
    $apagar = new Imovel();
    $resp = $apagar -> removerImovel($_POST['id']);
    echo($resp);
}else if($_POST['op'] == 4){
    $getDados = new Imovel();
    $res = $getDados -> infoImovel($_POST['id']);
    echo($res);
    }

    
?>