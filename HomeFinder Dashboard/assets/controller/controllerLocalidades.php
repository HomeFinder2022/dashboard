<?php

require_once 'connection.php';

class Select{

       function selectDistritos(){
        global $conn;
        $sql = "SELECT iddistrito, nome FROM distrito";
        $msg = "<option value='-1'>Escolha um distrito</option>";
        
        $result = $conn->query($sql);
    
        if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
          $msg .= "<option value='".$row['iddistrito']."'>".$row['nome']."</option>";
        }
        } else {
          $msg = "Sem Resultados";
        
        }
    
        $conn->close();
    
        return $msg;
    
      }
    
      function selectConcelhos(){
        global $conn;
        $sql = "SELECT idconcelho, nome FROM concelho";
        $msg = "<option value='-1'>Escolha um concelho</option>";
        
        $result = $conn->query($sql);
    
        if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
          $msg .= "<option value='".$row['idconcelho']."'>".$row['nome']."</option>";
        }
        } else {
          $msg = "Sem Resultados";
        
        }
    
        $conn->close();
    
        return $msg;
    
      }

      function selectFreguesias(){
        global $conn;
        $sql = "SELECT idfreguesia, nome FROM freguesias";
        $msg = "<option value='-1'>Escolha uma freguesia</option>";
        
        $result = $conn->query($sql);
    
        if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
          $msg .= "<option value='".$row['idfreguesia']."'>".$row['nome']."</option>";
        }
        } else {
          $msg = "Sem Resultados";
        
        }
    
        $conn->close();
    
        return $msg;
    
      }

      function selectTipoNegocio(){
        global $conn;
        $sql = "SELECT idtiponegocio, descricao FROM tiponegocio";
        $msg = "<option value='-1'>Escolha o tipo de negócio</option>";
        
        $result = $conn->query($sql);
    
        if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
          $msg .= "<option value='".$row['idtiponegocio']."'>".$row['descricao']."</option>";
        }
        } else {
          $msg = "Sem Resultados";
        
        }
    
        $conn->close();
    
        return $msg;
    
      }

      function selectEstado(){
        global $conn;
        $sql = "SELECT idcondicao, descricao FROM tipocondicao";
        $msg = "<option value='-1'>Escolha qual o estado do imóvel</option>";
        
        $result = $conn->query($sql);
    
        if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
          $msg .= "<option value='".$row['idcondicao']."'>".$row['descricao']."</option>";
        }
        } else {
          $msg = "Sem Resultados";
        
        }
    
        $conn->close();
    
        return $msg;
    
      }

      function selectCertif(){
        global $conn;
        $sql = "SELECT idcertificado, descricao FROM certificadoenergetico";
        $msg = "<option value='-1'>Escolha o certificado</option>";
        
        $result = $conn->query($sql);
    
        if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
          $msg .= "<option value='".$row['idcertificado']."'>".$row['descricao']."</option>";
        }
        } else {
          $msg = "Sem Resultados";
        
        }
    
        $conn->close();
    
        return $msg;
    
      }

      function selectTipoImovel(){
        global $conn;
        $sql = "SELECT idtipoimovel, descricao FROM tipoimovel";
        $msg = "<option value='-1'>Escolha o tipo de imóvel</option>";
        
        $result = $conn->query($sql);
    
        if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
          $msg .= "<option value='".$row['idtipoimovel']."'>".$row['descricao']."</option>";
        }
        } else {
          $msg = "Sem Resultados";
        
        }
    
        $conn->close();
    
        return $msg;
    
      }

      function selectTipologia(){
        global $conn;
        $sql = "SELECT idtipologia, descricao FROM tipologia";
        $msg = "<option>Escolha a tipologia do imóvel</option>";
        
        $result = $conn->query($sql);
    
        if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
          $msg .= "<option value='".$row['idtipologia']."'>".$row['descricao']."</option>";
        }
        } else {
          $msg = "Sem Resultados";
        
        }
    
        // $conn->close();
    
        return $msg;
    
      }

      function imovelVenda($id){

        global $conn;
      
        $sql = "SELECT * FROM tiponegocio WHERE idtiponegocio = ".$id;
      
        $result = $conn->query($sql);
      
        $msg = "";
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
              if($row['idtiponegocio'] == 1){
                $msg .= "<label for='pImovel' class='form-label'>Preço</label>";
                $msg .= " <input type='number' class='form-control' id='pImovel'>";
                 }else if($row['idtiponegocio'] == 2){
                $msg .= "<label for='rendaImovel' class='form-label'>Renda</label>";
                $msg .= " <input type='number' class='form-control' id='rendaImovel'>";
                }else if($row['idtiponegocio'] == 3){
                  $msg .= "<label for='preçoNoite' class='form-label'>Preço por noite</label>";
                  $msg .= " <input type='number' class='form-control' id='preçoNoite'>";
              }

                
              
              }
      
        $conn->close();
        return $msg;
      }

}

function tipologiaVenda($id){

  global $conn;

  $sql = "SELECT * FROM tipoimovel WHERE idtipoimovel = ".$id;

  $result = $conn->query($sql);

  $msg = "";
  if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
        if($row['idtipoimovel'] == 1 || $row['idtipoimovel'] == 2 || $row['idtipoimovel'] == 3 ){
          
          $msg .= "<div class='input-group'>";
          $msg .= "<span class='input-group-text'>Tipologia do Imóvel</span>
          <select class='form-select' id='tipologiaImovel'>";
          $msg .= $this -> selectTipologia();
          $msg .= "</select></div>";
          
        }
           
          
        
        }

        $conn->close();
  return $msg;
}

}

function filtroDistrito($id){
  global $conn;
  $sql = "SELECT idconcelho, nome FROM concelho WHERE iddistrito=".$id;
  $msg = "<option value='-1'>Escolha um concelho</option>";
  
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $msg .= "<option value='".$row['idconcelho']."'>".$row['nome']."</option>";
  }
  } else {
    $msg = "Sem Resultados";
  
  }

  $conn->close();

  return $msg;

}

function filtroConcelho($id){
  global $conn;
  $sql = "SELECT idfreguesia, nome FROM freguesias WHERE idconcelho = ".$id;
  $msg = "<option value='-1'>Escolha uma freguesia</option>";
  
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $msg .= "<option value='".$row['idfreguesia']."'>".$row['nome']."</option>";
  }
  } else {
    $msg = "Sem Resultados";
  
  }

  $conn->close();

  return $msg;

}
}