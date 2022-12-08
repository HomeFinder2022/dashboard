<?php

require_once '../controller/controllerLocalidades.php';

    if($_POST['op'] == 1){
        $get = new Select();
        $resp = $get -> selectDistritos();
        echo($resp);
    }else if($_POST['op'] == 2){
        $get = new Select();
        $resp = $get -> selectConcelhos();
        echo($resp);
    }else if($_POST['op'] == 3){
        $get = new Select();
        $resp = $get -> selectFreguesias();
        echo($resp);
    }else if($_POST['op'] == 4){
        $get = new Select();
        $resp = $get -> selectTipoNegocio();
        echo($resp);
    }else if($_POST['op'] == 5){
        $get = new Select();
        $resp = $get -> selectEstado();
        echo($resp);
    }else if($_POST['op'] == 6){
        $get = new Select();
        $resp = $get -> selectCertif();
        echo($resp);
    }else if($_POST['op'] == 7){
        $get = new Select();
        $resp = $get -> selectTipoImovel();
        echo($resp);
    }else if($_POST['op'] == 8){
        $get = new Select();
        $resp = $get -> selectTipologia();
        echo($resp);
    }else if($_POST['op'] == 9){
            $filtro = new Select();
            $res = $filtro -> imovelVenda($_POST['id']);
            echo($res);
    }else if($_POST['op'] == 10){
        $filtro = new Select();
        $res = $filtro -> tipologiaVenda($_POST['id']);
        echo($res);
    }else if($_POST['op'] == 11){
        $filtro = new Select();
        $res = $filtro -> filtroDistrito($_POST['id']);
        echo($res);
    }else if($_POST['op'] == 12){
        $filtro = new Select();
        $res = $filtro -> filtroConcelho($_POST['id']);
        echo($res);
    }

    
?>