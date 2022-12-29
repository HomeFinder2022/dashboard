<?php

require_once 'connection.php';

class Financas{

    function regReceita($valorReceita){
        global $conn; 
              session_start();
              $nifUser = $_SESSION['nif'];

              $sql = "UPDATE financas SET saldo = (saldo + '".$valorReceita."')
              WHERE idnif = '".$nifUser."'";

          $msg = "";
          
                   
          if ($conn->query($sql) === TRUE) {
            $query = $this -> histReceita($valorReceita, $nifUser);
            $msg  = "Receita registada com sucesso!";
          } else {
            $msg = "Error: " . $sql . "<br>" . $conn->error;
          }
          
          $conn->close();
    
          return $msg;
      }

      function histReceita($valorReceita, $nifUser){
        global $conn; 

              $sql = "INSERT INTO historicomov (iduser, tipomovimento, valor) 
          VALUES('".$nifUser."', 1, '".$valorReceita."')";

          $msg = "";
          
                   
          if ($conn->query($sql) === TRUE) {
            $msg  = "Receita registada com sucesso!";
          } else {
            $msg = "Error: " . $sql . "<br>" . $conn->error;
          }
          
    
          return $msg;
      }

      function regDespesa($valorDespesa){
        global $conn; 
              session_start();
              $nifUser = $_SESSION['nif'];

              $sql = "UPDATE financas SET saldo = (saldo - '".$valorDespesa."')
              WHERE idnif = '".$nifUser."'";

          $msg = "";
          
                   
          if ($conn->query($sql) === TRUE) {
            $query = $this -> histDespesa($valorDespesa, $nifUser);
            $msg  = "Despesa registada com sucesso!";
          } else {
            $msg = "Error: " . $sql . "<br>" . $conn->error;
          }
          
          $conn->close();
    
          return $msg;
      }


      function histDespesa($valorDespesa, $nifUser){
        global $conn; 

              $sql = "INSERT INTO historicomov (iduser, tipomovimento, valor) 
          VALUES('".$nifUser."', 2, '".$valorDespesa."')";

          $msg = "";
          
                   
          if ($conn->query($sql) === TRUE) {
            $msg  = "Despesa registada com sucesso!";
          } else {
            $msg = "Error: " . $sql . "<br>" . $conn->error;
          }
          
    
          return $msg;
      }


      function consultaSaldo(){

        global $conn;
        session_start();
        $nifUser = $_SESSION['nif'];
        $sql = "SELECT financas.saldo FROM financas WHERE idnif = '".$nifUser."'";
    
        $result = $conn->query($sql);
    
        $msg = "";

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                $msg .= "<h3 class='card-title mb-2'>€".$row['saldo']."</h3>";

                }
               
              
              }
      
        $conn->close();
        return $msg;
    }

    function consultaReceitas(){

        global $conn;
        session_start();
        $nifUser = $_SESSION['nif'];
        $sql = "SELECT SUM(valor) as total FROM historicomov
        WHERE iduser = '".$nifUser."' AND
        tipomovimento = 1
        ";
    
        $result = $conn->query($sql);
    
        $msg = "";

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                $msg .= "<h3 class='card-title text-nowrap mb-1'>€".$row['total']."</h3>";
                }
               
              
              }
      
        $conn->close();
        return $msg;
    }

    function consultaDespesas(){

        global $conn;
        session_start();
        $nifUser = $_SESSION['nif'];
        $sql = "SELECT SUM(valor) as total FROM historicomov
        WHERE iduser = '".$nifUser."' AND
        tipomovimento = 2
        ";
    
        $result = $conn->query($sql);
    
        $msg = "";

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                $msg .= "<h3 class='card-title text-nowrap mb-1'>€".$row['total']."</h3>";
                }
               
              
              }
      
        $conn->close();
        return $msg;
    }

    function consultaTransacoes(){

        global $conn;
        session_start();
        $nifUser = $_SESSION['nif'];
        $sql = "SELECT * FROM historicomov
        WHERE iduser = '".$nifUser."'";
    
        $result = $conn->query($sql);
    
        $msg = "";

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                $msg .= " <li class='d-flex mb-4 pb-1'>";
                $msg .= "<div class='avatar flex-shrink-0 me-3'>";
                if($row['tipomovimento'] == 1){
                    $msg .= "<img src='../assets/img/homefinderplus.png' alt='User' class='rounded' />";
                }else if($row['tipomovimento'] == 2){
                    $msg .= "<img src='../assets/img/homefinderminus.png' alt='User' class='rounded' />";
                }
              
                $msg .= "</div>";
                $msg .= "<div class='d-flex w-100 flex-wrap align-items-center justify-content-between gap-2'>";
                $msg .= "<div class='me-2'>";
                $msg .= "<small class='text-muted d-block mb-1'>Rendas</small>";
                $msg .= "<h6 class='mb-0'>Dário Bianchi</h6>";
                $msg .= "</div>";
                $msg .= "<div class='user-progress d-flex align-items-center gap-1'>";
                $msg .= "<h6 class='mb-0'>€".$row['valor']."</h6>";
                $msg .= "<span class='text-muted'>EUR</span>";
                $msg .= "</div>";
                $msg .= "</div>";
                $msg .= "</li>";

                }
               
              
              }
      
        $conn->close();
        return $msg;
    }

    }