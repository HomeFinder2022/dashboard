<?php

require_once '../controller/controllerInqui.php';

if($_POST['op'] == 1){

    $reg = new Inquilino();
    $resp = $reg -> regInqui(
        $_POST['nomeInqui'],
        $_POST['emailInqui'],
        $_POST['moradaInqui'],
        $_POST['telInqui'],
        $_POST['listaDistritos1'],
        $_POST['listaConcelhos1'],
        $_POST['listaFreguesias1'],
        $_POST['obsInqui'],
        $_POST['nifInqui']
    );
    echo($resp);
    }else if($_POST['op'] == 2){
    $mail = new Inquilino();
    $res = $mail -> sendMail(
    $_POST['emailInqui'],
    $_POST['nomeInqui']
    );
    echo($res);
    }else if($_POST['op'] == 3){
    $table = new Inquilino();
    $res = $table -> listaInqui();
    echo($res);
    }else if($_POST['op'] == 4){
    $apagar = new Inquilino();
    $resp = $apagar -> removerInqui($_POST['id']);
    echo($resp);
}else if($_POST['op'] == 5){
    $getDados = new Inquilino();
    $res = $getDados -> infoInquilino($_POST['id']);
    echo($res);
}else if($_POST['op'] == 6){
    $edit = new Inquilino();
    $resp = $edit -> guardaInquilino(
        $_POST['id'],
        $_POST['nomeInquiEdit'],
        $_POST['emailInquiEdit'],
        $_POST['nifInquiEdit'],
        $_POST['moradaInquiEdit'],
        $_POST['telInquiEdit'],
        $_POST['listaDistritos1Edit'],
        $_POST['listaConcelhos1Edit'],
        $_POST['listaFreguesias1Edit'],
        $_POST['obsInquiEdit']
    );
    echo($resp);
    }

    
?>