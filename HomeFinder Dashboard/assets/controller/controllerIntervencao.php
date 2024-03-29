<?php

require_once 'connection.php';

class Intervencao{

    function regInt($tipo, $data, $desc, $imovel){
        global $conn; 

              session_start();
              $nifUser = $_SESSION['nif'];

              $resp = $this -> getProp();
              // function p ir buscar o proprietario atraves do nif do user(inquilino)
              $resp = json_decode($resp, TRUE);
              $sql = "INSERT INTO pedidointervencao (idtipointervencao, data, descricao, idremetente, iddestinatario, idimovel, idestado) 
                   VALUES('".$tipo."','".$data."', '".$desc."', '".$nifUser."','".$resp['idprop']."','".$imovel."', 1)";

          $msg = "";
          
                   
          if ($conn->query($sql) === TRUE) {          
              $msg = "Pedido de intervenção registado com sucesso!";
          } else {
            $msg = "Error: " . $sql . "<br>" . $conn->error;
          }
          
          $conn->close();
    
          return $msg;
      }

      function getProp(){

        global $conn;
      $sql = "SELECT utilizador.nif

      FROM listainquilino_imovel, imovel, utilizador, inquilino 
      
              WHERE listainquilino_imovel.idimovel = imovel.idimovel and
                listainquilino_imovel.idutilizador = utilizador.nif AND 
                listainquilino_imovel.idinquilino = inquilino.id"
      ;
        $idprop = "";
      
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
      //           $idimovel = $row['idimovel'];
                $idprop = $row['nif'];
            }
        } 
    
        $res = array("idprop"=>$idprop);
        $res = json_encode($res);
      
        return $res;
      }


      function selectTipoInt(){
        global $conn;
        $sql = "SELECT idtipointervencao, descricao FROM tipointervencao";
        $msg = "<option value='-1'>Escolha um tipo de intervenção</option>";
        
        $result = $conn->query($sql);
    
        if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
          $msg .= "<option value='".$row['idtipointervencao']."'>".$row['descricao']."</option>";
        }
        } else {
          $msg = "Sem Resultados";
        
        }
    
        $conn->close();
    
        return $msg;
    
      }

      function selectImovel(){
        global $conn;
        session_start();
              $nifUser = $_SESSION['nif'];
        $sql = "SELECT DISTINCT imovel.idimovel, imovel.morada ,utilizador.nome, utilizador.nif

        FROM listainquilino_imovel, imovel, utilizador, inquilino 
        
                WHERE listainquilino_imovel.idimovel = imovel.idimovel and
                  listainquilino_imovel.idutilizador = utilizador.nif AND 
                  listainquilino_imovel.idinquilino = inquilino.id ANd
                  inquilino.idnifinquilino =".$nifUser;

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

      function listaInts(){

        global $conn;
        session_start();
              $nifUser = $_SESSION['nif'];

        $sql = "SELECT pedidointervencao.*, utilizador.nome, imovel.morada FROM pedidointervencao, utilizador, imovel
         WHERE 
         pedidointervencao.idimovel = imovel.idimovel and
         pedidointervencao.idremetente = utilizador.nif and
         iddestinatario = '".$nifUser."' and
         pedidointervencao.idestado = 1";
// mudar idremetente para iddestinatario para que apareça os pedidos que o proprietario tem para aceitar
    
        $result = $conn->query($sql);
    
        $msg = "";

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
              $msg .= "<tr>";
              $msg .= "<td>".$row['idpedido']."</td>";
              $msg .= "<td>".$row['morada']."</td>";
              $msg .= "<td>".$row['nome']."</td>";
              $msg .= "<td>".$row['data']."</td>";
              $msg .= "<td>".$row['descricao']."</td>";
              $msg .= "<td style='text-align: center; vertical-align: middle;'><button type='button' class='btn btn-success btn-sm' onclick='aceitaInt(\"".$row['idpedido']."\", \"".$row['data']."\", \"".$row['nome']."\", \"".$row['morada']."\")'>Aceitar</button></td>";
              $msg .= "<td style='text-align: center; vertical-align: middle;'><button type='button' class='btn btn-danger btn-sm' onclick='recusaInt(".$row['idpedido'].")'>Recusar</button></td>";
              $msg .= "</tr>";
                }
                
              
              }
      
        $conn->close();
        return $msg;
    }
     

    function listaIntsAceites(){

      global $conn;
      session_start();
            $nifUser = $_SESSION['nif'];

      $sql = "SELECT pedidointervencao.idpedido, pedidointervencao.idimovel, pedidointervencao.data, pedidointervencao.descricao, utilizador.nome, imovel.morada FROM pedidointervencao, utilizador, imovel
       WHERE 
       pedidointervencao.idimovel = imovel.idimovel and
       pedidointervencao.iddestinatario = utilizador.nif and
       iddestinatario = '".$nifUser."' and
       pedidointervencao.idestado = 2";
// mudar idremetente para iddestinatario para que apareça os pedidos que o proprietario tem para aceitar
  
      $result = $conn->query($sql);
  
      $msg = "";

      if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {
            $msg .= "<tr>";
            $msg .= "<td>".$row['idpedido']."</td>";
            $msg .= "<td>".$row['morada']."</td>";
            $msg .= "<td>".$row['nome']."</td>";
            $msg .= "<td>".$row['data']."</td>";
            $msg .= "<td>".$row['descricao']."</td>";
            // $msg .= "<td><button type='button' class='btn btn-success btn-sm' onclick='aceitaInt(".$row['idpedido']."')'>Aceitar</button></td>";
            // $msg .= "<td><button type='button' class='btn btn-danger btn-sm' onclick='recusaInt(".$row['idpedido'].")'>Recusar</button></td>";
            $msg .= "</tr>";
              }
              
            
            }
    
      $conn->close();
      return $msg;
  }

  function listaIntsFeitos(){

    global $conn;
    session_start();
          $nifUser = $_SESSION['nif'];

    $sql = "SELECT estado.descricao as estado, pedidointervencao.idpedido, pedidointervencao.idimovel, pedidointervencao.data, pedidointervencao.descricao, utilizador.nome, imovel.morada FROM pedidointervencao, utilizador, estado, imovel
     WHERE 
     pedidointervencao.idimovel = imovel.idimovel and
     pedidointervencao.iddestinatario = utilizador.nif and
     estado.idestado = pedidointervencao.idestado and
     idremetente = '".$nifUser."'";
// mudar idremetente para iddestinatario para que apareça os pedidos que o proprietario tem para aceitar

    $result = $conn->query($sql);

    $msg = "";

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
          $msg .= "<tr>";
          $msg .= "<td>".$row['idpedido']."</td>";
          $msg .= "<td>".$row['morada']."</td>";
          $msg .= "<td>".$row['nome']."</td>";
          $msg .= "<td>".$row['data']."</td>";
          $msg .= "<td>".$row['descricao']."</td>";
          $msg .= "<td>".$row['estado']."</td>";
          // $msg .= "<td><button type='button' class='btn btn-success btn-sm' onclick='aceitaInt(".$row['idpedido']."')'>Aceitar</button></td>";
          // $msg .= "<td><button type='button' class='btn btn-danger btn-sm' onclick='recusaInt(".$row['idpedido'].")'>Recusar</button></td>";
          $msg .= "</tr>";
            }
            
          
          }
  
    $conn->close();
    return $msg;
}

    function estadoAceite($id, $data, $nome, $morada){

      global $conn;
    
      $sql = "UPDATE pedidointervencao SET idestado = 2 WHERE idpedido = ".$id;
     
      $msg = "";
      
      if ($conn->query($sql) === TRUE) {
        // $resp = $this -> criar evento();
        $query = $this -> insertEvento($data, $nome, $morada);
        $msg  = "Pedido de intervenção aceite!";
      } else {
        $msg = "Error: " . $sql . "<br>" . $conn->error;
      }
    
      $conn->close();
    
      return $msg;
    
    }

    function insertEvento($data, $nome, $morada){
      global $conn; 

      session_start();
      $nifUser = $_SESSION['nif'];

        $sql = "INSERT INTO eventos (title, description, start_datetime, end_datetime, nif) 
        VALUES('Intervenção: ".$nome."', 'Imóvel: ".$morada."', '".$data."', '".$data."', '".$nifUser."')";

        $msg = "";
        
        if ($conn->query($sql) === TRUE) {
          $msg = "Evento adicionado com sucesso!";
        } else {
          $msg = "Error: " . $sql . "<br>" . $conn->error;
        }

        return $msg;
     }

    function estadoRecusado($id){

      global $conn;
    
      $sql = "UPDATE pedidointervencao SET idestado = 3 WHERE idpedido = ".$id;
     
      $msg = "";
      
    
      if ($conn->query($sql) === TRUE) {
        $msg  = "Pedido de intervenção recusado!";
      } else {
        $msg = "Error: " . $sql . "<br>" . $conn->error;
      }
    
      $conn->close();
    
      return $msg;
    }



}