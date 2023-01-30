<?php

require_once 'connection.php';

  class Contato{

    function regContato($nome, $tel, $email, $foto){
        global $conn; 
  
          session_start();
          $nifUser = $_SESSION['nif'];

          $sql = "INSERT INTO listacontatos (idutilizador, nome, email, contato) 
          VALUES('".$nifUser."', '".$nome."', '".$email."', '".$tel."')";
         
          $msg = "";
          
          if ($conn->query($sql) === TRUE) {
            $lastID = mysqli_insert_id($conn);
            $resp = $this -> uploads($foto, $lastID);

            $resp = json_decode($resp, TRUE);
    
            if($resp['flag']){
              $msg = $this -> insertFoto($resp['target'], $lastID);
            }else{
           
              $msg = "Contato registado sem foto!";
            }
          } else {
            $msg = "Error: " . $sql . "<br>" . $conn->error;
          }
          
          $conn->close();
  
          return $msg;
       }

       function insertFoto($diretorio, $id){

        global $conn;
        $msg="";
    
        $sql = $sql = "UPDATE listacontatos SET foto = '".$diretorio."' WHERE
        idcontatos = ".$id;
    
        if ($conn->query($sql) === TRUE) {
          $msg  = "Contato registado com sucesso!";
        } else {
          $msg = "Error: " . $sql . "<br>" . $conn->error;
        }
        
        return $msg;
      }

       function uploads($img, $id){
        $dir = "../imagens/contatos/".$id."/";
        $dir1 = "assets/imagens/contatos/".$id."/";
        $flag = false;
        $targetBD = "";
    
    
        if(!is_dir($dir)){
            if(!mkdir($dir, 0777, TRUE)){
                die ("Erro não é possivel criar o diretório");
            }
        }
      if(array_key_exists('fotoContato', $img)){
        if(is_array($img)){
          if(is_uploaded_file($img['fotoContato']['tmp_name'])){
            $fonte = $img['fotoContato']['tmp_name'];
            $ficheiro = $img['fotoContato']['name'];
            $end = explode(".",$ficheiro);
            $extensao = end($end);
    
            $newName = "contato".date("YmdHis").".".$extensao;
    
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


        function listaContatos(){

          global $conn;
        
          $sql = "SELECT listacontatos.idcontatos, listacontatos.nome, listacontatos.email, listacontatos.contato, listacontatos.foto FROM listacontatos
          ORDER BY listacontatos.foto DESC";
      
          $result = $conn->query($sql);
      
          $msg = "";

          if ($result->num_rows > 0) {
              // output data of each row
              while($row = $result->fetch_assoc()) {
                  // $msg .= "<div class='row pb-5 mb-4'>";
                  $msg .= "<div class='col-md-3'>";
                  $msg .= "<div class='card border-0 rounded h-80 mt-3'>";
                  $msg .= "<img src='../".$row['foto']."' alt='Sem foto' class='w-100 card-img-top'>";
                  $msg .= "<div class='card-body p-0'>";
                  $msg .= "<div class='p-2'>";
                  $msg .= "<h5 class='text-center mb-0 fs-4 text'>".$row['nome']."</h5>";
                  $msg .= "<p class='small text-muted text-center'>".$row['email']."</p>";
                  $msg .= "<p class='text-muted text-center'>".$row['contato']."</p>";
                  // $msg .= "<div class='card-footer'>";
                  $msg .= "<ul class='social text-center list-inline'>";
                  $msg .= "<li class='list-inline-item ms-2'><a href='tel:".$row['contato']."' class='social-link'><i class='bx bxs-phone-call bx-md'></i></a></li>";
                  $msg .= "<li class='list-inline-item ms-2'><a href='mailto:".$row['email']."' class='social-link'><i class='bx bxs-envelope bx-md'></i></a></li>";
                  $msg .= "<li class='list-inline-item ms-2'><a href='#' onclick='infoContato(".$row['idcontatos'].")' class='social-link'><i class='bx bxs-info-circle bx-md'></i></a></li>";
                  $msg .= "<li class='list-inline-item ms-2'><a href='#' onclick='delContato(".$row['idcontatos'].")' class='social-link'><i class='delbtn bx bxs-x-circle bx-md'></i></a></li>";
                  $msg .= "</ul>";
                  $msg .= "</div>";
                  $msg .= "</div>";
                  $msg .= "</div>";
                  $msg .= "</div>";
                  // $msg .= "</div>";
                                     
                
                  
                 
                  }
                  
                
                }
        
          $conn->close();
          return $msg;
      }

      function infoContato($id){

        global $conn;
      
        $sql = "SELECT *
        FROM listacontatos WHERE idcontatos =".$id;
      
        $nome = "";
        $contato = "";
        $email = "";
      
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                $nome = $row['nome'];
                $contato = $row['contato'];
                $email = $row['email'];
            }
        } 
        $conn->close();
    
        $res = array("nome" => $nome, "contato"=>$contato, "email"=>$email);
        $res = json_encode($res);
      
        return $res;
      }

      function guardaContato($id, $nome, $tel, $email, $foto){

        $resp = $this -> uploads($foto, $id);
        $resp = json_decode($resp, TRUE);
      
        
      
        if($resp['flag']){
      
          $msg = $this -> updateContato($id, $nome, $tel, $email, $resp['target']);
      
        }else{
          $msg = $this -> updateContato($id, $nome, $tel, $email, $resp['target']);
        }
      
        return $msg;
      }

      function updateContato($id, $nome, $tel, $email, $foto){

        global $conn;
      
        $sql = "UPDATE listacontatos SET nome='".$nome."', contato ='".$tel."', email ='".$email."'";
       
        $msg = "";
        
    
        if($foto == ""){
          $sql .= " WHERE idcontatos =".$id;
        }else{
          $sql .= ", foto = '".$foto."' WHERE idcontatos =".$id;
        }
      
        if ($conn->query($sql) === TRUE) {
          $msg  = "Contato editado com sucesso!";
        } else {
          $msg = "Error: " . $sql . "<br>" . $conn->error;
        }
      
        $conn->close();
      
        return $msg;
      
      }

      function removerContato($id){
        global $conn;
        $msg="";
      
        $sql = "DELETE FROM listacontatos WHERE idcontatos = ".$id;
      
        if ($conn->query($sql) === TRUE) {
          $msg  = "Contato removido com sucesso!";
        } else {
          $msg = "Error: " . $sql . "<br>" . $conn->error;
        }
      
        $conn->close();
      
        return $msg;
      
      }


    }



