<?php

require_once '../controller/controllerFinancas.php';

if($_POST['op'] == 1){
    $reg = new Financas();
    $resp = $reg -> regReceita(
        $_POST['valorReceita']
    );
    echo($resp);
}else if($_POST['op'] == 2){
    $reg = new Financas();
    $res = $reg -> regDespesa(
        $_POST['valorDespesa']
    );
    echo($res);
}else if($_POST['op'] == 3){
    $table = new Financas();
    $res = $table -> consultaSaldo();
    echo($res);
}else if($_POST['op'] == 4){
    $table = new Financas();
    $res = $table -> consultaReceitas();
    echo($res);
}else if($_POST['op'] == 5){
    $table = new Financas();
    $res = $table -> consultaDespesas();
    echo($res);
}else if($_POST['op'] == 6){
    $table = new Financas();
    $res = $table -> consultaTransacoes();
    echo($res);
    }

?>