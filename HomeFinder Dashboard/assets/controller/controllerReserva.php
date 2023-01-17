<?php

require_once 'connection.php';

class Reserva{

    function selectImovel(){
        global $conn;
        // session_start();
        // $nifUser = $_SESSION['nif'];
        $sql = "SELECT imovel.idimovel, imovel.morada

        FROM imovel
        
                WHERE imovel.idtiponegocio = 3";

        $msg = "<option value='-1'>Escolha um imóvel</option>";
        
        $result = $conn->query($sql);
    
        if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
          $msg .= "<option value='".$row['idimovel']."'>".$row['morada']."</option>";
        }
        } else {
          $msg = "Sem Resultados";
        
        }
    
        $conn->close();
    
        return $msg;
    
      }
    
    
      function regRes($imovel, $dataentrada, $datasaida, $obs, $num){
        global $conn; 

              session_start();
              $nifUser = $_SESSION['nif'];

              $resp = $this -> getDesti($imovel);
              // function p ir buscar o proprietario atraves do nif do user(inquilino)
              $resp = json_decode($resp, TRUE);
              $sql = "INSERT INTO pedidoreserva (idimovel, data, datasaida, idremetente, iddestinatario, idestado, descricao, numpessoas) 
                   VALUES('".$imovel."','".$dataentrada."','".$datasaida."', '".$nifUser."', '".$resp['iddesti']."', 1, '".$obs."',  '".$num."')";

          $msg = "";
          
                   
          if ($conn->query($sql) === TRUE) {          
              $msg = "Pedido de reserva registado com sucesso";
          } else {
            $msg = "Error: " . $sql . "<br>" . $conn->error;
          }
          
          $conn->close();
    
          return $msg;
      }

      function getDesti($imovel){

        global $conn;
      $sql = "SELECT utilizador.nif

      FROM imovel, utilizador
      
              WHERE imovel.nifutilizador = utilizador.nif and
              imovel.idimovel = ".$imovel;
        $iddesti = "";
      
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
      //           $idimovel = $row['idimovel'];
                $iddesti = $row['nif'];
            }
        } 
    
        $res = array("iddesti"=>$iddesti);
        $res = json_encode($res);
      
        return $res;
      }
    
      function listaResFeitos(){

        global $conn;
        session_start();
        $nifUser = $_SESSION['nif'];
    
        $sql = "SELECT estado.descricao as estado, pedidoreserva.descricao as obs, pedidoreserva.idpedidoreserva, pedidoreserva.idimovel, pedidoreserva.data, pedidoreserva.datasaida, pedidoreserva.numpessoas, utilizador.nome FROM pedidoreserva, utilizador, estado
         WHERE 
         pedidoreserva.iddestinatario = utilizador.nif and
         estado.idestado = pedidoreserva.idestado and
         idremetente = '".$nifUser."'";
    // mudar idremetente para iddestinatario para que apareça os pedidos que o proprietario tem para aceitar
    
        $result = $conn->query($sql);
    
        $msg = "";
    
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
              $msg .= "<tr>";
              $msg .= "<td>".$row['idpedidoreserva']."</td>";
              $msg .= "<td>".$row['idimovel']."</td>";
              $msg .= "<td>".$row['nome']."</td>";
              $msg .= "<td>".$row['data']."</td>";
              $msg .= "<td>".$row['datasaida']."</td>";
              $msg .= "<td>".$row['numpessoas']."</td>";
              $msg .= "<td>".$row['obs']."</td>";
              $msg .= "<td>".$row['estado']."</td>";
              // $msg .= "<td><button type='button' class='btn btn-success btn-sm' onclick='aceitaInt(".$row['idpedido']."')'>Aceitar</button></td>";
              // $msg .= "<td><button type='button' class='btn btn-danger btn-sm' onclick='recusaInt(".$row['idpedido'].")'>Recusar</button></td>";
              $msg .= "</tr>";
                }
                
              
              }
      
        $conn->close();
        return $msg;
    }

    function listaRes(){

        global $conn;
        session_start();
              $nifUser = $_SESSION['nif'];

        $sql = "SELECT pedidoreserva.*, utilizador.nome FROM pedidoreserva, utilizador
         WHERE 
         pedidoreserva.iddestinatario = utilizador.nif and
         iddestinatario = '".$nifUser."' and
         pedidoreserva.idestado = 1";
// mudar idremetente para iddestinatario para que apareça os pedidos que o proprietario tem para aceitar
    
        $result = $conn->query($sql);
    
        $msg = "";

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
              $msg .= "<tr>";
              $msg .= "<td>".$row['idpedidoreserva']."</td>";
              $msg .= "<td>".$row['idimovel']."</td>";
              $msg .= "<td>".$row['nome']."</td>";
              $msg .= "<td>".$row['data']."</td>";
              $msg .= "<td>".$row['datasaida']."</td>";
              $msg .= "<td>".$row['numpessoas']."</td>";
              $msg .= "<td>".$row['descricao']."</td>";
              $msg .= "<td style='text-align: center; vertical-align: middle;'><button type='button' class='btn btn-success btn-sm' onclick='aceitaRes(".$row['idpedidoreserva'].")'>Aceitar</button></td>";
              $msg .= "<td style='text-align: center; vertical-align: middle;'><button type='button' class='btn btn-danger btn-sm' onclick='recusaRes(".$row['idpedidoreserva'].")'>Recusar</button></td>";
              $msg .= "</tr>";
                }
                
              
              }
      
        $conn->close();
        return $msg;
    }

    function listaResAceites(){

        global $conn;
        session_start();
              $nifUser = $_SESSION['nif'];
  
        $sql = "SELECT pedidoreserva.*, utilizador.nome FROM pedidoreserva, utilizador
         WHERE 
         pedidoreserva.iddestinatario = utilizador.nif and
         iddestinatario = '".$nifUser."' and
         pedidoreserva.idestado = 2";
  // mudar idremetente para iddestinatario para que apareça os pedidos que o proprietario tem para aceitar
    
        $result = $conn->query($sql);
    
        $msg = "";
  
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
              $msg .= "<tr>";
              $msg .= "<td>".$row['idpedidoreserva']."</td>";
              $msg .= "<td>".$row['idimovel']."</td>";
              $msg .= "<td>".$row['nome']."</td>";
              $msg .= "<td>".$row['data']."</td>";
              $msg .= "<td>".$row['datasaida']."</td>";
              $msg .= "<td>".$row['numpessoas']."</td>";
              $msg .= "<td>".$row['descricao']."</td>";
              $msg .= "<td><button type='button' class='btn btn-success btn-sm' onclick='aceitaPag(".$row['idpedidoreserva'].")'>Aceitar Pagamento</button></td>";
              // $msg .= "<td><button type='button' class='btn btn-danger btn-sm' onclick='recusaInt(".$row['idpedido'].")'>Recusar</button></td>";
              $msg .= "</tr>";
                }
                
              
              }
      
        $conn->close();
        return $msg;
    }


    function aceitaPagamento($id){
      global $conn;
      $sql = "UPDATE pedidoreserva SET idestado = 4 WHERE idpedidoreserva = ".$id;
      $date = new DateTime();
      $current = $date->format("Y-m-d");
      $msg = "";
      if ($conn->query($sql) === TRUE) {
          $resposta = $this -> getPrecoNoite($id);
          $resposta = json_decode($resposta, TRUE);
          $preco = intval($resposta['precopnoite']);

          $resp1 = $this -> getNumDiasFerias($id);
          $resp1 = json_decode($resp1, TRUE);
          $inquilino = $resp1['inquilino'];
          $dias = intval(abs($resp1['diasferias']));

          $resp2 = $this -> updateFinancasFerias($preco, $dias, $inquilino);
          $msg .= "Pagamento recebido";
      } else {
          $msg = "Error: " . $sql . "<br>" . $conn->error;
      }
      $conn->close();
      return $msg;
  }


    function estadoAceite($id){
      global $conn;
      $sql = "UPDATE pedidoreserva SET idestado = 2 WHERE idpedidoreserva = ".$id;
      $date = new DateTime();
      $current = $date->format("Y-m-d");
      $msg = "";
      if ($result = $conn->query($sql)) {
          // $resposta = $this -> getPrecoNoite($id);
          // $resposta = json_decode($resposta, TRUE);
          // $preco = intval($resposta['precopnoite']);

          // $resp1 = $this -> getNumDiasFerias($id);
          // $resp1 = json_decode($resp1, TRUE);
          // $inquilino = $resp1['inquilino'];
          // $dias = intval(abs($resp1['diasferias']));

          // $resp2 = $this -> updateFinancasFerias($preco, $dias, $inquilino);
            $msg .= "Pedido de reserva aceite";
      } else {
          $msg = "Error: " . $sql . "<br>" . $conn->error;
      }
      $conn->close();
      return $msg;
  }

  function getPrecoNoite($id){
    global $conn;
    $sql = "SELECT ferias.precopnoite FROM ferias, pedidoreserva, imovel
    WHERE 
        imovel.idimovel= ferias.idimovel AND
        imovel.idimovel= pedidoreserva.idimovel AND
        pedidoreserva.idpedidoreserva = ".$id;
    $precopnoite = "";
    if ($result = $conn->query($sql)) {
        while($row = $result->fetch_assoc()) {
            $precopnoite = $row['precopnoite'];
        }
    } else {
        $msg = "Error: " . $sql . "<br>" . $conn->error;
    }
    $res = array("precopnoite" => $precopnoite);
    $res = json_encode($res);
    return $res;
}
    
      function getNumDiasFerias($id){

        global $conn;
    
        $sql = "SELECT DATEDIFF(pedidoreserva.data, pedidoreserva.datasaida) AS diasferias, utilizador.nome
         FROM pedidoreserva, utilizador WHERE
         pedidoreserva.idremetente = utilizador.nif AND
        pedidoreserva.idpedidoreserva = ".$id;
       
        $diasferias = "";
        $inquilino = "";
        
      
        if ($result = $conn->query($sql)) {
          while($row = $result->fetch_assoc()) {
            $diasferias = $row['diasferias'];
            $inquilino = $row['nome'];
        }
        } else {
          $msg = "Error: " . $sql . "<br>" . $conn->error;
        }
      
        $res = array("diasferias" => $diasferias, "inquilino" => $inquilino);
        $res = json_encode($res);
      
        return $res;
      
      }


      function updateFinancasFerias($preco, $dias, $inquilino){
        global $conn; 

              session_start();
              $nifUser = $_SESSION['nif'];

              $date = new DateTime();
              $current = $date->format("Y-m-d");
              $total = $preco * $dias;
              $sql = "UPDATE financas SET saldo = (saldo + '".$total."'), 
                      data = '".$current."' WHERE idnif = '".$nifUser."'";

          $msg = "";
          
          if ($result = $conn->query($sql)) {
            $query = $this -> histReceitaFerias($total, $nifUser, $inquilino);
            $msg  = "Pedido de reserva aceite";
          } else {
            $msg = "Error: " . $sql . "<br>" . $conn->error;
          }
          
          return $msg;
      }
      

      function histReceitaFerias($total, $nifUser, $inquilino){
        global $conn; 
        $date = new DateTime();
        $current = $date->format("Y-m-d");
        
              $sql = "INSERT INTO historicomov (iduser, tipomovimento, valor, ref, timestap) 
          VALUES('".$nifUser."', 1, '".$total."', 'Estadia de: ".$inquilino."', '".$current."')";

          $msg = "";
          
                   
          if ($conn->query($sql) === TRUE) {
            $msg  = "Pedido de reserva aceite";
          } else {
            $msg = "Error: " . $sql . "<br>" . $conn->error;
          }
          
    
          return $msg;
      }


      function estadoRecusado($id){

        global $conn;
      
        $sql = "UPDATE pedidoreserva SET idestado = 3 WHERE idpedidoreserva = ".$id;
       
        $msg = "";
        
      
        if ($conn->query($sql) === TRUE) {
          $msg  = "Pedido de reserva recusado";
        } else {
          $msg = "Error: " . $sql . "<br>" . $conn->error;
        }
      
        $conn->close();
      
        return $msg;
      
      }

    }