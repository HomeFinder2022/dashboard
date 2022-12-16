<?php

require_once 'connection.php';

  class Arrendamento{

    function regArr($imovel, $inquilino, $inventario, $estado, $tipopag, $caucao, $datapag){
        global $conn; 
  
          $sql = "INSERT INTO arrendamento (idimovel, idinquilino, idinventario, idestado, idtipopagamento, valorcaucao, datapagamento) 
          VALUES('".$imovel."', '".$inquilino."', '".$inventario."', '".$estado."', '".$tipopag."', '".$caucao."', '".$datapag."')";
         
          $msg = "";
          
          if ($conn->query($sql) === TRUE) {
            $msg = "Arrendamento registado com sucesso!";
          } else {
            $msg = "Error: " . $sql . "<br>" . $conn->error;
          }
          
          $conn->close();
  
          return $msg;
       }

       function selectImoveis(){
        global $conn;
        $sql = "SELECT idimovel, morada FROM imovel";
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
        $sql = "SELECT id, nome FROM inquilino";
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
          $msg .= "<option value='".$row['idinventario']."'>".$row['morada']."</option>";
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
      
        $sql = "SELECT arrendamento.*, inquilino.nome, imovel.morada, 
        estado.descricao as estado, tipopagamento.descricao as tipopagamento, imoveisarrendamento.precorenda


           FROM imovel, inquilino, estado, tipopagamento, arrendamento, imoveisarrendamento

           WHERE
        imovel.idimovel = arrendamento.idimovel AND
        inquilino.id = arrendamento.idinquilino AND
        estado.idestado = arrendamento.idestado AND
        tipopagamento.idtipopagamento = arrendamento.idtipopagamento AND
        imoveisarrendamento.idimovel = arrendamento.idimovel";
    
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
                $msg .= "<td>".$row['estado']."</td>";
                $msg .= "<td>".$row['tipopagamento']."</td>";
                $msg .= "<td>".$row['datapagamento']."</td>";
                $msg .= "<td><button type='button' class='btn btn-danger btn-sm' onclick='delArr(".$row['idarrendamento'].")'>Apagar</button></td>";
                $msg .= "</tr>";
                }
                
              
              }
      
        $conn->close();
        return $msg;
    }


    }




