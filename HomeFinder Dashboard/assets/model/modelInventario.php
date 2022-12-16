<?php

require_once '../controller/controllerInventario.php';

if($_POST['op'] == 1){

    $reg = new Inventario();
    $resp = $reg -> regInventario(
        $_POST['imovelArr1'],
        $_FILES
    );
    echo($resp);
}else if($_POST['op'] == 2){
    $table = new Inventario();
    $res = $table -> listaInventarios();
    echo($res);
}else if($_POST['op'] == 3){
    $get = new Inventario();
    $resp = $get -> selectTipoDoc();
    echo($resp);
}else if($_POST['op'] == 4){
        $reg = new Inventario();
        $resp = $reg -> saveDoc(
            $_POST['tipoDoc'],
            $_POST['refDoc'],
            $_FILES
        );
        echo($resp);
    }else if($_POST['op'] == 5){
        $table = new Inventario();
        $res = $table -> listaDocs();
        echo($res);
    }

?>