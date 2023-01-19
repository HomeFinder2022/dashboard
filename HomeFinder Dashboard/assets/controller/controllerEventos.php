<?php

require_once 'connection.php';

  class Evento{

    function regEvento($titulo, $descricao, $datainicio, $datafim){
      global $conn; 


        $sql = "INSERT INTO eventos (title, description, start_datetime, end_datetime) 
        VALUES('".$titulo."', '".$descricao."', '".$datainicio."', '".$datafim."')";

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



