<?php

require_once 'connection.php';

class Imovel{

    function regImovel($tipoImovel, $tipologiaImovel, $moradaImovel, $postalImovel, $listaDistritos,
    $listaConcelhos, $listaFreguesias, $areaUtil, $areaBruta, $numWcs, $anoImovel, $certEnerg, $estadoImovel,
    $tipoNegocImovel, $obsImovel, $fotos){
        global $conn; 
        // session_start();
        // $_SESSION['nifUser'] = $nifUser;


          $sql = "INSERT INTO imovel (morada, codigopostal, idconcelho, iddistrito,
           idfreguesia, idtipoimovel, idtipologia, areautil, areabruta, numwc, idcondicao, anoconstrucao,
            idcertificadoenergetico, idtiponegocio, descricao) 
                VALUES('".$moradaImovel."', '".$postalImovel."', '".$listaConcelhos."', '".$listaDistritos."',
                '".$listaFreguesias."', '".$tipoImovel."', '".$tipologiaImovel."', '".$areaUtil."', '".$areaBruta."', '".$numWcs."', 
                '".$estadoImovel."', '".$anoImovel."', '".$certEnerg."', '".$tipoNegocImovel."', '".$obsImovel."')";
  
              
          $msg = "";
          
                   
          if ($conn->query($sql) === TRUE) {
        
            $lastID = mysqli_insert_id($conn);
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


}