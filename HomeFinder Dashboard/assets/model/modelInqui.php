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
        $_POST['obsInqui']
    );
    echo($resp);
    }else if($_POST['op'] == 2){
    $mail = new Inquilino();
    $res = $mail -> sendMail(
    $_POST['nomeInqui'],
    $_POST['emailInqui']);
    echo($res);
    }else if($_POST['op'] == 3){
    $table = new Inquilino();
    $res = $table -> listaInqui();
    echo($res);
    }

    
?>