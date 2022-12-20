<?php

if($_POST['op'] == 1){
    session_start();
    echo($_SESSION['nomeUser']);
}else if($_POST['op'] == 2){
    session_start();
    echo($_SESSION['tipoUser']);
}else if($_POST['op'] == 3){
    session_start();
    echo($_SESSION['fotoperfil']);
}
    ?>