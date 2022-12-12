<?php

require_once 'connection.php';

  class Arrendamento{

    function regInqui($nome, $email, $morada, $tel, $distrito, $concelho, $freguesia, $obs){
        global $conn; 
  
          $sql = "INSERT INTO inquilino (nome, email, morada, contato, iddistrito, idconcelho, idfreguesia, observacoes) 
          VALUES('".$nome."', '".$email."', '".$morada."', '".$tel."', '".$distrito."', '".$concelho."', '".$freguesia."', '".$obs."')";
         
          $msg = "";
          
          if ($conn->query($sql) === TRUE) {
            $msg = "Inquilino adicionado com sucesso!";
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
        $sql = "SELECT idinventario, descricao FROM inventario";
        $msg = "<option value='-1'>Escolha um inventário</option>";
        
        $result = $conn->query($sql);
    
        if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
          $msg .= "<option value='".$row['id']."'>".$row['descricao']."</option>";
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



    }




