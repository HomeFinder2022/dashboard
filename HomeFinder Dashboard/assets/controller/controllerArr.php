<?php

require_once 'connection.php';

  class Arrendamento{

    function regArr($imovel, $inquilino, $inventario, $tipopag, $caucao, $datapag, $doc){
        global $conn; 

            session_start();
            $nifUser = $_SESSION['nif'];

            $sql = "INSERT INTO arrendamento (idproprietario, idimovel, idinquilino, idinventario, idtipopagamento, valorcaucao, datapagamento, iddocumento, idestado, idestadoarrend) 
            VALUES('".$nifUser."', '".$imovel."', '".$inquilino."', '".$inventario."', '".$tipopag."', '".$caucao."', '".$datapag."', '".$doc."', 2, 1)";

          $msg = "";
          
          if ($conn->query($sql) === TRUE) {
            $lastID = mysqli_insert_id($conn);
            $resp = $this -> getInfo($lastID);
            $resp = json_decode($resp, TRUE);
            $query1 = $this -> insertListaArrend($imovel, $inquilino, $nifUser);
            $query2 = $this -> insertCaucao($caucao, $nifUser, $resp['nome']);
            $query3 = $this -> insertEvento($datapag, $resp['nome'], $resp['morada'], $nifUser);
            // $query3 = $this -> insert_renda_mes($imovel, $nifUser);
            // inserir no historicomov a renda para o user proprietario e update das financas
            $msg = "Arrendamento registado com sucesso!";
          } else {
            $msg = "Error: " . $sql . "<br>" . $conn->error;
          }
          
          $conn->close();
  
          return $msg;
       }

       function getInfo($lastID){

        global $conn;
      $sql = "SELECT utilizador.nome, imovel.morada

      FROM imovel, utilizador, arrendamento, inquilino

              WHERE 


              arrendamento.idinquilino = inquilino.id and
              arrendamento.idimovel = imovel.idimovel and
              inquilino.idnifinquilino = utilizador.nif AND 
              arrendamento.idarrendamento = ".$lastID;
        
        $nome = "";
        $morada = "";


        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                $nome = $row['nome'];
                $morada = $row['morada'];
            }
        } 
    
        $res = array("nome"=>$nome, "morada"=>$morada);
        $res = json_encode($res);
      
        return $res;
      }



       function insertEvento($datapag, $inquilino, $morada, $nifUser){
        global $conn; 

        $day = date('d', strtotime($datapag));

          $sql = "INSERT INTO eventos (title, description, start_datetime, end_datetime, rrule, nif) 
          VALUES('Prazo de pagamento', 'Inquilino: ".$inquilino."  ' '|  Imóvel: ".$morada."', '".$datapag."', '".$datapag."', 'FREQ=MONTHLY;BYMONTHDAY=".$day."', ".$nifUser.")";
          $msg = "";
          
          if ($conn->query($sql) === TRUE) {
            $msg = "Evento adicionado com sucesso!";
          } else {
            $msg = "Error: " . $sql . "<br>" . $conn->error;
          }
    
          return $msg;
       }

      //  function insert_renda_mes($imovel, $nifUser){
      //   global $conn; 
      //   $res = "";
      //   $date = new DateTime();
      //   $current = $date->format("Y-m-d");
      //   $query4 = $this -> renda_mes($imovel);
        
      //   $res = json_decode($query4, TRUE);

      //       $sql = "INSERT INTO historicomov (iduser, tipomovimento, valor, timestap, ref) 
      //       VALUES('".$nifUser."', 1, '".$res['precorenda']."','".$current."', 'Renda')";
  
      //     $msg = "";
          
      //     if ($conn->query($sql) === TRUE) {
      //       $query2 = $this -> updateFinancas($res['precorenda'], $nifUser);
      //       $msg = "Arrendamento registado com sucesso!";
      //     } else {
      //       $msg = "Error: " . $sql . "<br>" . $conn->error;
      //     }
          
  
  
      //     return $msg;
      //  }


      //  function renda_mes($imovel){

      //   global $conn;
      //   $sql = "SELECT imoveisarrendamento.precorenda FROM imoveisarrendamento, arrendamento
      //   WHERE imoveisarrendamento.idimovel = arrendamento.idimovel AND
      //   imoveisarrendamento.idimovel = ".$imovel;

      //   $precorenda = "";
      
      //   $result = $conn->query($sql);
      //   if ($result->num_rows > 0) {
      //       // output data of each row
      //       while($row = $result->fetch_assoc()) {
      //           $precorenda = $row['precorenda'];
      //       }
      //   } 
    
      //   $res = array("precorenda"=>$precorenda);
      //   $res = json_encode($res);
      //   return $res;
      // }


       function insertCaucao($caucao, $nifUser, $inquilino){
        global $conn; 
  
        $date = new DateTime();
        $current = $date->format("Y-m-d");
  
            $sql = "INSERT INTO historicomov (iduser, tipomovimento, valor, timestap, ref) 
            VALUES('".$nifUser."', 1, '".$caucao."','".$current."', 'Caução: ".$inquilino."')";
  
          $msg = "";
          
          if ($conn->query($sql) === TRUE) {
            $query2 = $this -> updateFinancas($caucao, $nifUser);
            $msg = "Arrendamento registado com sucesso!";
          } else {
            $msg = "Error: " . $sql . "<br>" . $conn->error;
          }
          
  
  
          return $msg;
       }


       function updateFinancas($caucao, $nifUser){
        global $conn; 
        $date = new DateTime();
        $current = $date->format("Y-m-d");

        $sql = "UPDATE financas SET saldo = (saldo + '".$caucao."'), data = '".$current."'
        WHERE idnif = '".$nifUser."'";

  
          $msg = "";
          
          if ($conn->query($sql) === TRUE) {
            $msg = "Arrendamento registado com sucesso!";
          } else {
            $msg = "Error: " . $sql . "<br>" . $conn->error;
          }
          
  
  
          return $msg;
       }


    function insertListaArrend($imovel, $inquilino, $nifUser){
      global $conn; 



          $sql = "INSERT INTO listainquilino_imovel (idimovel, idinquilino, idutilizador) 
          VALUES('".$imovel."', '".$inquilino."', '".$nifUser."')";

        $msg = "";
        
        if ($conn->query($sql) === TRUE) {
          $msg = "Arrendamento registado com sucesso!";
        } else {
          $msg = "Error: " . $sql . "<br>" . $conn->error;
        }
        


        return $msg;
     }



       function selectImoveis(){
        global $conn;
        session_start();
        $nifUser = $_SESSION['nif'];

        $sql = "SELECT distinct idimovel, morada FROM imovel, tiponegocio WHERE imovel.idtiponegocio = 2 AND  nifutilizador = ".$nifUser;
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

      function selectInquilinos(){
        global $conn;
        session_start();
        $nifUser = $_SESSION['nif'];
        $sql = "SELECT id, nome FROM inquilino WHERE idproprietario = ".$nifUser;
        $msg = "<option value='-1'>Escolha um inquilino</option>";
        
        $result = $conn->query($sql);
    
        if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
          $msg .= "<option value='".$row['id']."'>".$row['nome']."</option>";
        }
        } else {
          $msg = "Sem Resultados";
        
        }
    
        $conn->close();
    
        return $msg;
    
      }

      function selectInventarios(){
        global $conn;
        $sql = "SELECT inventario.*, imovel.morada, imovel.idimovel FROM inventario, imovel
        WHERE imovel.idimovel = inventario.idimovel";
        $msg = "<option value='-1'>Escolha um inventário</option>";
        
        $result = $conn->query($sql);
    
        if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
          if($row['idinventario']>0){
          $msg .= "<option value='".$row['idinventario']."'>".$row['morada']."</option>";
        }
      }
        } else {
          $msg = "Sem Resultados";
        
        }
    
        $conn->close();
    
        return $msg;
    
      }

      function selectDocs(){
        global $conn;
        $sql = "SELECT documento.* FROM documento";

        $msg = "<option value='-1'>Escolha um documento</option>";
        
        $result = $conn->query($sql);
    
        if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
          if($row['iddocumento']>0){
            $msg .= "<option value='".$row['iddocumento']."'>".$row['ref']."</option>";
          }
        
        }
        } else {
          $msg = "Sem Resultados";
        
        }
    
        $conn->close();
    
        return $msg;
    
      }

      function selectEstado(){
        global $conn;
        $sql = "SELECT idestado, descricao FROM estado";
        $msg = "<option value='-1'>Escolha o estado</option>";
        
        $result = $conn->query($sql);
    
        if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
          $msg .= "<option value='".$row['idestado']."'>".$row['descricao']."</option>";
        }
        } else {
          $msg = "Sem Resultados";
        
        }
    
        $conn->close();
    
        return $msg;
    
      }

      function selectTipoPagamento(){
        global $conn;
        $sql = "SELECT idtipopagamento, descricao FROM tipopagamento";
        $msg = "<option value='-1'>Escolha o tipo de pagamento</option>";
        
        $result = $conn->query($sql);
    
        if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
          $msg .= "<option value='".$row['idtipopagamento']."'>".$row['descricao']."</option>";
        }
        } else {
          $msg = "Sem Resultados";
        
        }
    
        $conn->close();
    
        return $msg;
    
      }

      function listaArrends(){

        global $conn;
        session_start();
        $nifUser = $_SESSION['nif'];
        $sql = "SELECT arrendamento.*, inquilino.nome, imovel.morada,
        tipopagamento.descricao as tipopagamento, imoveisarrendamento.precorenda, estadoarrendamento.descricao as estado


          FROM arrendamento, inquilino, imovel, tipopagamento, imoveisarrendamento, estadoarrendamento
          
          WHERE
          arrendamento.idinquilino = inquilino.id AND
          arrendamento.idimovel = imovel.idimovel AND
          arrendamento.idtipopagamento = tipopagamento.idtipopagamento AND
          imoveisarrendamento.idimovel = imovel.idimovel AND
          arrendamento.idestadoarrend = estadoarrendamento.id AND
          arrendamento.idestadoarrend = 1 AND
          imoveisarrendamento.idimovel = imovel.idimovel AND 
       arrendamento.idproprietario =".$nifUser;
    
        $result = $conn->query($sql);
    
        $msg = "";

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                $msg .= "<tr>";
                // $msg .= "<td colspan='0' style='text-align: center;'>";
                $msg .= "<td>".$row['morada']."</td>";
                $msg .= "<td>".$row['nome']."</td>";
                $msg .= "<td>".$row['valorcaucao']." €</td>";
                $msg .= "<td>".$row['precorenda']." €</td>";
                $msg .= "<td>".$row['tipopagamento']."</td>";
                $msg .= "<td>".$row['datapagamento']."</td>";
                $msg .= "<td>".$row['estado']."</td>";
                $msg .= "<td><button type='button' class='btn btn-primary btn-sm' onclick='editArr(".$row['idarrendamento'].", ".$row['precorenda'].")'>Renda</button></td>";
                $msg .= "<td><button type='button' class='btn btn-success btn-sm' onclick='concluiArr(".$row['idarrendamento'].")'>Concluido</button></td>";
                $msg .= "<td><button type='button' class='btn btn-danger btn-sm' onclick='delArr(".$row['idarrendamento'].")'>Apagar</button></td>";
                $msg .= "</tr>";
                }
                
              
              }
      
        $conn->close();
        return $msg;
    }

    function infoArrendamento($id){

      global $conn;
      session_start();
          $nifUser = $_SESSION['nif'];

      $sql = "SELECT arrendamento.*, inquilino.nome, imovel.morada,
      tipopagamento.descricao as tipopagamento, imoveisarrendamento.precorenda


        FROM imovel, inquilino, tipopagamento, arrendamento, imoveisarrendamento

        WHERE
     imovel.idimovel = arrendamento.idimovel AND
     inquilino.id = arrendamento.idinquilino AND
     tipopagamento.idtipopagamento = arrendamento.idtipopagamento AND
     imoveisarrendamento.idimovel = arrendamento.idimovel AND
     arrendamento.idproprietario = ".$nifUser." AND
     arrendamento.idarrendamento = ".$id;



      $morada = "";
      $inquilino = "";
      $precorenda = "";
      $datapagamento = "";
    
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {
              $morada = $row['morada'];
              $inquilino = $row['nome'];
              $precorenda = $row['precorenda'];
              $datapagamento = $row['datapagamento'];
          }
      } 
      $conn->close();
  
      $res = array("morada" => $morada, "inquilino"=>$inquilino, "precorenda"=>$precorenda, "datapagamento"=>$datapagamento);
      $res = json_encode($res);
    
      return $res;
    }

    function confirmRenda($valorReceita, $inquilino){
      global $conn; 
      session_start();
      $nifUser = $_SESSION['nif'];

      $date = new DateTime();
      $current = $date->format("Y-m-d");
      
            $sql = "INSERT INTO historicomov (iduser, tipomovimento, valor, ref, timestap) 
        VALUES('".$nifUser."', 1, '".$valorReceita."', 'Renda: ".$inquilino."', '".$current."')";

        $msg = "";
        
                 
        if ($conn->query($sql) === TRUE) {
          $query = $this -> updateRenda($valorReceita, $nifUser);
          $msg  = "Renda recebida com sucesso!";
        } else {
          $msg = "Error: " . $sql . "<br>" . $conn->error;
        }
        
  
        return $msg;
    }

    function updateRenda($valorReceita, $nifUser){
      global $conn; 

      $date = new DateTime();
      $current = $date->format("Y-m-d");

            $sql = "UPDATE financas SET saldo = (saldo + '".$valorReceita."'), data = '".$current."'
            WHERE idnif = '".$nifUser."'";

        $msg = "";
        
                 
        if ($conn->query($sql) === TRUE) {
          $msg  = "Receita recebida com sucesso!";
        } else {
          $msg = "Error: " . $sql . "<br>" . $conn->error;
        }
        
        $conn->close();
  
        return $msg;
    }

    function estadoArr($id){
      global $conn; 

            $sql = "UPDATE arrendamento SET idestadoarrend = 2
            WHERE idarrendamento = ".$id;

        $msg = "";
        
                 
        if ($conn->query($sql) === TRUE) {
          $msg  = "Arrendamento concluido";
        } else {
          $msg = "Error: " . $sql . "<br>" . $conn->error;
        }
        
        $conn->close();
  
        return $msg;
    }

    }




