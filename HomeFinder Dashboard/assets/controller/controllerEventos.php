<?php

require_once 'connection.php';

  class Evento{

    function regEvento($titulo, $descricao, $datainicio, $datafim){
      global $conn; 
      session_start();
      $nifUser = $_SESSION['nif'];

        $sql = "INSERT INTO eventos (title, description, start_datetime, end_datetime, nif) 
        VALUES('".$titulo."', '".$descricao."', '".$datainicio."', '".$datafim."', '".$nifUser."')";

        $msg = "";
        
        if ($conn->query($sql) === TRUE) {
          $msg = "Evento adicionado com sucesso!";
        } else {
          $msg = "Error: " . $sql . "<br>" . $conn->error;
        }
        
        $conn->close();

        return $msg;
     }

  }



