<?php

require_once 'connection.php';

class Inventario{

    function regInventario($imovel, $doc){
        global $conn; 
              // session_start();
              // $_SESSION['nifUser'] = $nifUser;
              $resp = $this -> uploads($doc, $imovel);
              $resp = json_decode($resp, TRUE);
              $sql = "INSERT INTO inventario (descricao, idimovel) 
                   VALUES('".$resp['target']."', '".$imovel."')";

          $msg = "";
          
                   
          if ($conn->query($sql) === TRUE) {          
    
            if($resp['flag']){
              $msg = "Inventário registado com sucesso!";
            }else{
           
              $msg = "Não foi possível guardar o inventário, tente carregar o ficheiro novamente.";
            }
          } else {
            $msg = "Error: " . $sql . "<br>" . $conn->error;
          }
          
          $conn->close();
    
          return $msg;
      }


      function uploads($img, $id){
        $dir = "../imagens/imoveis/imovel".$id."/inventario/";
        $dir1 = "assets/imagens/imoveis/imovel".$id."/inventario/";
        $flag = false;
        $targetBD = "";
    
    
        if(!is_dir($dir)){
            if(!mkdir($dir, 0777, TRUE)){
                die ("Erro não é possivel criar o diretório");
            }
        }
      if(array_key_exists('docInvent', $img)){
        if(is_array($img)){
          if(is_uploaded_file($img['docInvent']['tmp_name'])){
            $fonte = $img['docInvent']['tmp_name'];
            $ficheiro = $img['docInvent']['name'];
            $end = explode(".",$ficheiro);
            $extensao = end($end);
    
            $newName = "inventario".date("YmdHis").".".$extensao;
    
            $target = $dir.$newName;
            $targetBD = $dir1.$newName;
    
            if(move_uploaded_file($fonte, $target)){
              $flag = true;
            }
    
            
          } 
        }
      }
        return (json_encode(array(
          "flag" => $flag,
          "target" => $targetBD
        )));
    
        }


        function listaInventarios(){

          global $conn;
        
          $sql = "SELECT inventario.*, imovel.morada as imovel, imovel.idimovel 
             FROM imovel, inventario

             WHERE
          inventario.idimovel = imovel.idimovel";
      
          $result = $conn->query($sql);
      
          $msg = "";

          if ($result->num_rows > 0) {
              // output data of each row
              while($row = $result->fetch_assoc()) {
                  $msg .= "<tr>";
                  // $msg .= "<td colspan='0' style='text-align: center;'>";
                  $msg .= "<td>".$row['idinventario']."</td>";
                  $msg .= "<td>".$row['imovel']."</td>";
                  $msg .= "<td><a href='../".$row['descricao']."' download>Download</a></td>";
                  $msg .= "<td style='text-align: center; vertical-align: middle;'><button type='button' class='btn btn-danger btn-sm' onclick='deleteInvent(".$row['idinventario'].")'>Apagar</button></td>";
                  $msg .= "</tr>";
                  }
                  
                
                }
        
          $conn->close();
          return $msg;
      }

      function selectTipoDoc(){
        global $conn;
        $sql = "SELECT idtipodocumento, descricao FROM tipodocumento";
        $msg = "<option value='-1'>Escolha um tipo de documento</option>";
        
        $result = $conn->query($sql);
    
        if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
          $msg .= "<option value='".$row['idtipodocumento']."'>".$row['descricao']."</option>";
        }
        } else {
          $msg = "Sem Resultados";
        
        }
    
        $conn->close();
    
        return $msg;
    
      }

   
      function saveDoc($tipo, $ref, $doc){
        global $conn; 

        
              session_start();
              $nifUser = $_SESSION['nif'];
              
              
              $sql = "INSERT INTO documento (idnif, idtipodoc, ref) 
                   VALUES('".$nifUser."', '".$tipo."', '".$ref."' )";

          $msg = "";
          
          
                   
          if ($conn->query($sql) === TRUE) {    

            $lastID = mysqli_insert_id($conn);
              $resp = $this -> uploadDoc($doc, $lastID);
              $msg = "Documento registado com sucesso!";
              $resp = json_decode($resp, TRUE);
    
              if($resp['flag']){
                $msg = $this -> guardarDoc($resp['target'], $lastID);
              }else{
             
                $msg = "O documento não foi carregado!";
              }
      
          } else {
            $msg = "Error: " . $sql . "<br>" . $conn->error;
          }
          
          $conn->close();
    
          return $msg;
      }

      function uploadDoc($img, $id){
        $dir = "../imagens/documentos/".$id."/";
        $dir1 = "assets/imagens/documentos/".$id."/";
        $flag = false;
        $targetBD = "";
    
    
        if(!is_dir($dir)){
            if(!mkdir($dir, 0777, TRUE)){
                die ("Erro não é possivel criar o diretório");
            }
        }
      if(array_key_exists('userDoc', $img)){
        if(is_array($img)){
          if(is_uploaded_file($img['userDoc']['tmp_name'])){
            $fonte = $img['userDoc']['tmp_name'];
            $ficheiro = $img['userDoc']['name'];
            $end = explode(".",$ficheiro);
            $extensao = end($end);
    
            $newName = "documento".date("YmdHis").".".$extensao;
    
            $target = $dir.$newName;
            $targetBD = $dir1.$newName;
    
            if(move_uploaded_file($fonte, $target)){
              $flag = true;
            }
    
            
          } 
        }
      }
        return (json_encode(array(
          "flag" => $flag,
          "target" => $targetBD
        )));
    
        }

        function guardarDoc($diretorio, $id){

          global $conn;
          $msg="";
      
          $sql = "UPDATE documento SET descricao = '".$diretorio."' WHERE
          iddocumento = ".$id;
      
          if ($conn->query($sql) === TRUE) {
            $msg  = "Documento guardado com sucesso!";
          } else {
            $msg = "Error: " . $sql . "<br>" . $conn->error;
          }
          
          return $msg;
        }

        
        function listaDocs(){

          global $conn;
        
          $sql = "SELECT documento.*, tipodocumento.descricao as tipodocumento 
             FROM documento, tipodocumento

             WHERE

          tipodocumento.idtipodocumento = documento.idtipodoc";
      
          $result = $conn->query($sql);
      
          $msg = "";

          if ($result->num_rows > 0) {
              // output data of each row
              while($row = $result->fetch_assoc()) {
                  $msg .= "<tr>";
                  // $msg .= "<td colspan='0' style='text-align: center;'>";
                  $msg .= "<td>".$row['ref']."</td>";
                  $msg .= "<td>".$row['tipodocumento']."</td>";
                  $msg .= "<td><a href='../".$row['descricao']."' download>Download</a></td>";
                  $msg .= "<td style='text-align: center; vertical-align: middle;'><button type='button' class='btn btn-danger btn-sm' onclick='deleteFicheiro(".$row['iddocumento'].")'>Apagar</button></td>";
                  $msg .= "</tr>";
                  }
                  
                
                }
        
          $conn->close();
          return $msg;
      }

}