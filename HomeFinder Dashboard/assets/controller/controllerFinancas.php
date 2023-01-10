<?php

require_once 'connection.php';

class Financas{

    function regReceita($valorReceita, $refReceita){
        global $conn; 
              session_start();
              $nifUser = $_SESSION['nif'];

              $sql = "UPDATE financas SET saldo = (saldo + '".$valorReceita."')
              WHERE idnif = '".$nifUser."'";

          $msg = "";
          
                   
          if ($conn->query($sql) === TRUE) {
            
            $query = $this -> histReceita($valorReceita, $nifUser, $refReceita);
            $msg  = "Receita registada com sucesso!";
          } else {
            $msg = "Error: " . $sql . "<br>" . $conn->error;
          }
          
          $conn->close();
    
          return $msg;
      }

      function histReceita($valorReceita, $nifUser, $refReceita){
        global $conn; 
        $date = new DateTime();
        $current = $date->format("Y-m-d");
        
              $sql = "INSERT INTO historicomov (iduser, tipomovimento, valor, ref, timestap) 
          VALUES('".$nifUser."', 1, '".$valorReceita."', '".$refReceita."', '".$current."')";

          $msg = "";
          
                   
          if ($conn->query($sql) === TRUE) {
            $msg  = "Receita registada com sucesso!";
          } else {
            $msg = "Error: " . $sql . "<br>" . $conn->error;
          }
          
    
          return $msg;
      }

      function regDespesa($valorDespesa, $refDespesa){
        global $conn; 

              session_start();
              $nifUser = $_SESSION['nif'];

              $date = new DateTime();
              $current = $date->format("Y-m-d");

              $sql = "UPDATE financas SET saldo = (saldo - '".$valorDespesa."'), 
                      data = '".$current."' WHERE idnif = '".$nifUser."'";

          $msg = "";
          
                   
          if ($conn->query($sql) === TRUE) {
            $query = $this -> histDespesa($valorDespesa, $nifUser, $refDespesa);
            $msg  = "Despesa registada com sucesso!";
          } else {
            $msg = "Error: " . $sql . "<br>" . $conn->error;
          }
          
          $conn->close();
    
          return $msg;
      }


      function histDespesa($valorDespesa, $nifUser, $refDespesa){
        global $conn; 
        $date = new DateTime();
        $current = $date->format("Y-m-d");
        
              $sql = "INSERT INTO historicomov (iduser, tipomovimento, valor, ref, timestap) 
          VALUES('".$nifUser."', 2, '".$valorDespesa."', '".$refDespesa."', '".$current."')";

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
        $sql = "SELECT saldo, data FROM financas WHERE idnif = '".$nifUser."'";
        // $sql = "SELECT financas.saldo, (AVG(financas.saldo) / SUM(financas.saldo)) AS percent FROM financas WHERE idnif = '".$nifUser."' AND MONTH(data) = '".$currentMonth."'";
        // $sql = "SELECT financas.saldo as total, (ROUND((financas.saldo / COALESCE((SELECT financas.saldo FROM financas WHERE data = DATE_SUB(CURDATE(), INTERVAL 2 DAY)), financas.saldo)) - 1, 2)) AS percentage_change
        // FROM financas
        // WHERE data = CURDATE() AND idnif = ".$nifUser." AND id = LAST_INSERT_ID()";

    
        $result = $conn->query($sql);
    
        $msg = "";

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                $msg .= "<h3 class='card-title mb-2'>€".number_format((string)$row['saldo'], 0, '.', ' ')."</h3>";
                $msg .= "<small class='text-success fw-semibold'><i class='bx bxs-chevrons-right'></i>Ultima alteração: ".$row['data']."</small>";
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
              $msg .= "<h3 class='card-title text-nowrap'>€".number_format((string)$row['total'], 0, '.', ' ')."</h3>";                }
              // $msg .=  "<p class='mt-4'><button type='button' class='btn btn-success btn-sm' onclick='registarReceita()'>Registar Receita</button></p>";
              
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
                $msg .= "<h3 class='card-title text-nowrap mb-1'>€".number_format((string)$row['total'], 0, '.', ' ')."</h3>";
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
                if($row['tipomovimento'] == 1){
                $msg .= "<small class='text-muted d-block mb-1'>Receita</small>";
              }else if($row['tipomovimento'] == 2){
                $msg .= "<small class='text-muted d-block mb-1'>Despesa</small>";
              }
                $msg .= "<h6 class='mb-0'>".$row['ref']."</h6>";
                $msg .= "</div>";
                $msg .= "<div class='user-progress d-flex align-items-center gap-1'>";
                $msg .= "<h6 class='mb-0'>€".number_format((string)$row['valor'], 0, '.', ' ')."</h6>";
                $msg .= "<span class='text-muted'>EUR</span>";
                $msg .= "</div>";
                $msg .= "</div>";
                $msg .= "</li>";

                }
               
              
              }
      
        $conn->close();
        return $msg;
    }


    function consultaTransacoesDia(){

      global $conn;
      session_start();
      $nifUser = $_SESSION['nif'];
      $date = new DateTime();
      $formatted_date = $date->format("Y-m-d");
      $sql = "SELECT * FROM historicomov
      WHERE iduser = '".$nifUser."'
      AND timestap = '".$formatted_date."'";
  
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
              if($row['tipomovimento'] == 1){
              $msg .= "<small class='text-muted d-block mb-1'>Receita</small>";
            }else if($row['tipomovimento'] == 2){
              $msg .= "<small class='text-muted d-block mb-1'>Despesa</small>";
            }
              $msg .= "<h6 class='mb-0'>".$row['ref']."</h6>";
              $msg .= "</div>";
              $msg .= "<div class='user-progress d-flex align-items-center gap-1'>";
              $msg .= "<h6 class='mb-0'>€".number_format((string)$row['valor'], 0, '.', ' ')."</h6>";
              $msg .= "<span class='text-muted'>EUR</span>";
              $msg .= "</div>";
              $msg .= "</div>";
              $msg .= "</li>";

              }
             
            
            }
    
      $conn->close();
      return $msg;
  }

  function consultaTransacoesMes(){

    global $conn;
    session_start();
    $nifUser = $_SESSION['nif'];
    $date = new DateTime();
    $month = $date->format("m");
    $sql = "SELECT * FROM historicomov
    WHERE iduser = '".$nifUser."'
    AND MONTH(timestap) = '".$month."'";

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
            if($row['tipomovimento'] == 1){
            $msg .= "<small class='text-muted d-block mb-1'>Receita</small>";
          }else if($row['tipomovimento'] == 2){
            $msg .= "<small class='text-muted d-block mb-1'>Despesa</small>";
          }
            $msg .= "<h6 class='mb-0'>".$row['ref']."</h6>";
            $msg .= "</div>";
            $msg .= "<div class='user-progress d-flex align-items-center gap-1'>";
            $msg .= "<h6 class='mb-0'>€".number_format((string)$row['valor'], 0, '.', ' ')."</h6>";
            $msg .= "<span class='text-muted'>EUR</span>";
            $msg .= "</div>";
            $msg .= "</div>";
            $msg .= "</li>";

            }
           
          
          }
  
    $conn->close();
    return $msg;
}

function consultaTransacoesAno(){

  global $conn;
  session_start();
  $nifUser = $_SESSION['nif'];
  $date = new DateTime();
  $year = $date->format("Y");
  $sql = "SELECT * FROM historicomov
  WHERE iduser = '".$nifUser."'
  AND YEAR(timestap) = '".$year."'";

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
          if($row['tipomovimento'] == 1){
          $msg .= "<small class='text-muted d-block mb-1'>Receita</small>";
        }else if($row['tipomovimento'] == 2){
          $msg .= "<small class='text-muted d-block mb-1'>Despesa</small>";
        }
          $msg .= "<h6 class='mb-0'>".$row['ref']."</h6>";
          $msg .= "</div>";
          $msg .= "<div class='user-progress d-flex align-items-center gap-1'>";
          $msg .= "<h6 class='mb-0'>€".number_format((string)$row['valor'], 0, '.', ' ')."</h6>";
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