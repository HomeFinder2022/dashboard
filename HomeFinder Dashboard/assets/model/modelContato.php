<?php

require_once '../controller/controllerContato.php';

if($_POST['op'] == 1){
    $reg = new Contato();
    $resp = $reg -> regContato(
        $_POST['nomeContato'],
        $_POST['numContato'],
        $_POST['emailContato'],
        $_FILES
    );
    echo($resp);
}else if($_POST['op'] == 2){
    $table = new Contato();
    $res = $table -> listaContatos();
    echo($res);
}else if($_POST['op'] == 3){
    $getDados = new Contato();
    $res = $getDados -> infoContato($_POST['id']);
    echo($res);
}else if($_POST['op'] == 4){
    $edit = new Contato();
    $resp = $edit -> guardaContato(
        $_POST['id'],
        $_POST['nomeContato1'],
        $_POST['numContato1'],
        $_POST['emailContato1'],
        $_FILES   
    );
    echo($resp);
}else if($_POST['op'] == 5){
    $apagar = new Contato();
    $resp = $apagar -> removerContato($_POST['id']);
    echo($resp);
    }

    
?>