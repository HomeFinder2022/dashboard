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
        $_FILES
    );
    echo($resp);
    }

    
?>