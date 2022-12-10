<?php

require_once 'connection.php';

class Imovel{

    function regImovel($tipoImovel, $tipologiaImovel, $moradaImovel, $postalImovel, $listaDistritos,
    $listaConcelhos, $listaFreguesias, $areaUtil, $areaBruta, $numWcs, $anoImovel, $certEnerg, $estadoImovel,
    $tipoNegocImovel, $obsImovel, $preco, $renda, $preconoite, $fotos){
        global $conn; 
              // session_start();
              // $_SESSION['nifUser'] = $nifUser;
             
            if($tipoImovel == 1 || $tipoImovel == 2 || $tipoImovel == 3){
          $sql = "INSERT INTO imovel (morada, codigopostal, idconcelho, iddistrito,
           idfreguesia, idtipoimovel, idtipologia, areautil, areabruta, numwc, idcondicao, anoconstrucao,
            idcertificadoenergetico, idtiponegocio, descricao) 
                VALUES('".$moradaImovel."', '".$postalImovel."', '".$listaConcelhos."', '".$listaDistritos."',
                '".$listaFreguesias."', '".$tipoImovel."', '".$tipologiaImovel."', '".$areaUtil."', '".$areaBruta."', '".$numWcs."', 
                '".$estadoImovel."', '".$anoImovel."', '".$certEnerg."', '".$tipoNegocImovel."', '".$obsImovel."')";
            }else{
              $sql = "INSERT INTO imovel (morada, codigopostal, idconcelho, iddistrito,
              idfreguesia, idtipoimovel, areautil, areabruta, numwc, idcondicao, anoconstrucao,
               idcertificadoenergetico, idtiponegocio, descricao) 
                   VALUES('".$moradaImovel."', '".$postalImovel."', '".$listaConcelhos."', '".$listaDistritos."',
                   '".$listaFreguesias."', '".$tipoImovel."', '".$areaUtil."', '".$areaBruta."', '".$numWcs."', 
                   '".$estadoImovel."', '".$anoImovel."', '".$certEnerg."', '".$tipoNegocImovel."', '".$obsImovel."')";
            }

          $msg = "";
          
                   
          if ($conn->query($sql) === TRUE) {
        
            $lastID = mysqli_insert_id($conn);
            if($tipoNegocImovel == 1){
              $query1 = $this -> insertImovelVenda($lastID, $preco);
            }else if($tipoNegocImovel == 2){
              $query2 = $this -> insertImovelArrend($lastID, $renda);
            }else if($tipoNegocImovel == 3){
              $query3 = $this -> insertImovelFerias($lastID, $preconoite);
            }
            $resp = $this -> uploads($fotos, $lastID);

           
            
            $resp = json_decode($resp, TRUE);
    
            if($resp['flag']){
              $msg = $this -> insertFotos($resp['target'], $lastID);
            }else{
           
              $msg = "Imóvel registado sem fotos";
            }
          } else {
            $msg = "Error: " . $sql . "<br>" . $conn->error;
          }
          
          $conn->close();
    
          return $msg;
      }

       
      function insertImovelFerias($idimovel, $preconoite){

        global $conn;
        $msg="";
    
        $sql = "INSERT INTO ferias (precopnoite, idimovel) VALUES('".$preconoite."', '".$idimovel."')";
    
        if ($conn->query($sql) === TRUE) {
          $msg  = "Imóvel para venda registado com sucesso!";
        } else {
          $msg = "Error: " . $sql . "<br>" . $conn->error;
        }
        
        return $msg;
      }
      
      function insertImovelVenda($idimovel, $preco){

        global $conn;
        $msg="";
    
        $sql = "INSERT INTO imoveisvenda (precovenda, idimovel) VALUES('".$preco."', '".$idimovel."')";
    
        if ($conn->query($sql) === TRUE) {
          $msg  = "Imóvel para venda registado com sucesso!";
        } else {
          $msg = "Error: " . $sql . "<br>" . $conn->error;
        }
        
        return $msg;
      }

      function insertImovelArrend($idimovel, $renda){

        global $conn;
        $msg="";
    
        $sql = "INSERT INTO imoveisarrendamento (precorenda, idimovel) VALUES('".$renda."', '".$idimovel."')";
    
        if ($conn->query($sql) === TRUE) {
          $msg  = "Imóvel para venda registado com sucesso!";
        } else {
          $msg = "Error: " . $sql . "<br>" . $conn->error;
        }
        
        return $msg;
      }


      function insertFotos($diretorio, $id){

        global $conn;
        $msg="";
    
        $sql = "INSERT INTO listafotos (fotos, idimovel) VALUES('".$diretorio."', '".$id."')";
    
        if ($conn->query($sql) === TRUE) {
          $msg  = "Registo Efetuado com Sucesso!";
        } else {
          $msg = "Error: " . $sql . "<br>" . $conn->error;
        }
        
        return $msg;
      }


      function uploads($img, $id){
        $dir = "../imagens/imoveis/imovel".$id."/";
        $dir1 = "assets/imagens/imoveis/imovel".$id."/";
        $flag = false;
        $targetBD = "";
    
    
        if(!is_dir($dir)){
            if(!mkdir($dir, 0777, TRUE)){
                die ("Erro não é possivel criar o diretório");
            }
        }
      if(array_key_exists('fotosImovel', $img)){
        if(is_array($img)){
          if(is_uploaded_file($img['fotosImovel']['tmp_name'])){
            $fonte = $img['fotosImovel']['tmp_name'];
            $ficheiro = $img['fotosImovel']['name'];
            $end = explode(".",$ficheiro);
            $extensao = end($end);
    
            $newName = "imovel".date("YmdHis").".".$extensao;
    
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


        function listaImoveis(){

          global $conn;
        
          $sql = "SELECT imovel.idimovel, imovel.morada, distrito.nome AS nomedistrito, concelho.nome AS nomeconcelho, freguesias.nome AS nomefreg,
          tipologia.descricao AS tipologia , tipoimovel.descricao 

             FROM imovel, distrito, concelho, 
             freguesias, tipologia, tipoimovel 

             WHERE
          imovel.iddistrito = distrito.iddistrito AND
          imovel.idconcelho = concelho.idconcelho AND
          imovel.idfreguesia = freguesias.idfreguesia AND
          imovel.idtipologia = tipologia.idtipologia AND
          imovel.idtipoimovel = tipoimovel.idtipoimovel";
      
          $result = $conn->query($sql);
      
          $msg = "";

          if ($result->num_rows > 0) {
              // output data of each row
              while($row = $result->fetch_assoc()) {
                  $msg .= "<tr>";
                  // $msg .= "<td colspan='0' style='text-align: center;'>";
                  $msg .= "<td>".$row['idimovel']."</td>";
                  $msg .= "<td>".$row['morada']."</td>";
                  $msg .= "<td>".$row['nomedistrito']."</td>";
                  $msg .= "<td>".$row['nomeconcelho']."</td>";
                  $msg .= "<td>".$row['nomefreg']."</td>";
                  $msg .= "<td>".$row['descricao']."</td>";
                  $msg .= "<td>".$row['tipologia']."</td>";
                  $msg .= "<td><button type='button' class='btn btn-danger btn-sm' onclick='deleteImovel(".$row['idimovel'].")'>Apagar</button></td>";
                  $msg .= "</tr>";
                  }
                  
                
                }
        
          $conn->close();
          return $msg;
      }

}