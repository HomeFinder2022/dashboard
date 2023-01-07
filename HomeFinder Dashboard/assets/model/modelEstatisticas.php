<?php

require_once '../controller/controllerEstatisticas.php';

if($_POST['op'] == 1){

    $reg = new Estatistica();
    $resp = $reg -> getStat();
    echo($resp);
// }else if($_POST['op'] == 2){
//     $get = new Intervencao();
//     $resp = $get -> selectTipoInt();
//     echo($resp);
// }else if($_POST['op'] == 3){
//     $get = new Intervencao();
//     $resp = $get -> selectImovel();
//     echo($resp);
// }else if($_POST['op'] == 4){
//         $reg = new Inventario();
//         $resp = $reg -> saveDoc(
//             $_POST['tipoDoc'],
//             $_POST['refDoc'],
//             $_FILES
//         );
//         echo($resp);
//     }else if($_POST['op'] == 5){
//         $table = new Inventario();
//         $res = $table -> listaDocs();
//         echo($res);
    }

?>