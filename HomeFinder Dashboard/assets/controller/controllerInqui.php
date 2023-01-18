<?php
use PHPMailer\PHPMailer;
use PHPMailer\Exception;

require_once 'connection.php';


require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

  class Inquilino{

    function regInqui($nome, $email, $morada, $tel, $distrito, $concelho, $freguesia, $obs, $nifInqui){
        global $conn; 

        session_start();
        $nifUser = $_SESSION['nif'];
  
          $sql = "INSERT INTO inquilino (nome, email, morada, contato, iddistrito, idconcelho, idfreguesia, observacoes,idnifinquilino , idproprietario) 
          VALUES('".$nome."', '".$email."', '".$morada."', '".$tel."', '".$distrito."', '".$concelho."', '".$freguesia."', '".$obs."', '".$nifInqui."', '".$nifUser."')";
         
          $msg = "";
          
          if ($conn->query($sql) === TRUE) {
            $msg = "Inquilino adicionado com sucesso!";
          } else {
            $msg = "Error: " . $sql . "<br>" . $conn->error;
          }
          
          $conn->close();
  
          return $msg;
       }



      function sendMail($email, $nome){


        $mail = new PHPMailer\PHPMailer();
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = 'tls';
        $mail->Username = 'homefinderpt@gmail.com';
        $mail->Password = 'kcissgousqmemhon';
        $mail->Port = 587;

        $mail->setFrom('homefinderpt@gmail.com', 'HomeFinder');
        $mail->addReplyTo('homefinderpt@gmail.com', 'HomeFinder');
        $mail->addAddress($email, 'Paulo Pedras');
        // $mail->addCC('dario_bianchi_@hotmail.com', 'Cópia');

        $mail->isHTML(true);
        $mail->Subject ="Convite para entrar no HomeFinder";
        $mail->Body    = 

"<html>
<body>
<div class='container'>
<div style='background-color: #2FCB6A; height: 55px;'></div>

<p align='center'><img src='../img/logo-HomeFinder-mini.png' alt='logo'></p>

<p>Olá ".$nome.",</p>

<p>Queria convidá-lo pessoalmente a juntar-se a mim no HomeFinder, uma nova plataforma que ajuda as pessoas a encontrar 
a casa dos seus sonhos.</p>

<p>Com o HomeFinder, pode procurar casas na sua área, escolher as melhores opções para si. 
É a forma mais fácil de encontrar a sua casa perfeita!</p>

<p>Acho que vai adorar, mal posso esperar para ver o que vai encontrar.</p>

<p>Para aderir, basta clicar no link abaixo:</p>

<h3><a href='http://localhost/Dario/fase1/registro.php'>Registe-se no HomeFinder</a></h3>

<p>Espero vê-lo em breve no HomeFinder!</p>

<p>Cumprimentos,<br>".$nome."</p>

<div style='background-color: #2FCB6A; height: 55px;'></div>
</div>
</body>
</html>
";






        // http://localhost/Dario/fase1/registro.php


        $mail->AltBody = 'Para visualizar essa mensagem acesse http://http://localhost/Web/PROJETO%20FINAL/HomeFinder/fase1/index.php';
        $mail->addAttachment('../img/logo-HomeFinder-mini.png', 'homefinder.png');


        if(!$mail->send()) {
          echo 'Não foi possível enviar o convite<br>';
          echo 'Erro: ' . $mail->ErrorInfo;
      } else {
          echo 'Convite enviado com sucesso!';
      }
      }






      function listaInqui(){

        global $conn;
      
        session_start();
        $nifUser = $_SESSION['nif'];

        $sql = "SELECT inquilino.*, distrito.nome AS nomedistrito, concelho.nome AS nomeconcelho, freguesias.nome AS nomefreg

           FROM inquilino, distrito, concelho, 
           freguesias

           WHERE
           inquilino.iddistrito = distrito.iddistrito AND
           inquilino.idconcelho = concelho.idconcelho AND
           inquilino.idfreguesia = freguesias.idfreguesia AND
           inquilino.idproprietario = ".$nifUser;
    
        $result = $conn->query($sql);
    
        $msg = "";

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                $msg .= "<tr>";
                $msg .= "<td>".$row['nome']."</td>";
                $msg .= "<td><a href='mailto:".$row['email']."'>".$row['email']."</a></td>";
                $msg .= "<td><a href='tel:".$row['contato']."'>".$row['contato']."</a></td>";
                $msg .= "<td>".$row['morada']."</td>";
                $msg .= "<td>".$row['nomedistrito']."</td>";
                $msg .= "<td>".$row['observacoes']."</td>";

                $msg .= "<td style='text-align: center; vertical-align: middle;'><button type='button' class='btn btn-info btn-sm' onclick='editInqui(".$row['id'].")'>Info</button>";
                $msg .= "<td style='text-align: center; vertical-align: middle;'><button type='button' class='btn btn-danger btn-sm' onclick='delInqui(".$row['id'].")'>Apagar</button>";
                $msg .= "<td style='text-align: center; vertical-align: middle;'><button type='button' class='btn btn-primary btn-sm' onclick='sendEmail()'>Enviar Convite</button></td>";

                $msg .= "</tr>";
                }
                
              
              }
      
        $conn->close();
        return $msg;
    }


    function removerInqui($id){
      global $conn;
      $msg="";
    
      $sql = "DELETE FROM inquilino WHERE id = ".$id;
    
      if ($conn->query($sql) === TRUE) {
        $msg  = "Inquilino removido com sucesso!";
      } else {
        $msg = "Error: " . $sql . "<br>" . $conn->error;
      }
    
      $conn->close();
    
      return $msg;
    
    }

    function infoInquilino($id){

      global $conn;
    
      $sql = "SELECT *
      FROM inquilino WHERE id =".$id;
    
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
              $nif = $row['idnifinquilino'];
              $morada = $row['morada'];
              $freguesia = $row['idfreguesia'];
              $distrito = $row['iddistrito'];
              $concelho = $row['idconcelho'];
              $obs = $row['observacoes'];
          }
      } 
      $conn->close();
  
      $res = array("nome" => $nome, "morada"=>$morada, "contato"=>$contato, "email"=>$email, "freguesia"=>$freguesia, "distrito"=>$distrito, "concelho"=>$concelho, "obs"=>$obs, "nif"=>$nif);
      $res = json_encode($res);
    
      return $res;
    }

    function guardaInquilino($id, $nome, $email, $nif, $morada, $tel, $distrito, $concelho, $freguesia, $obs){

      global $conn;
    
      $sql = "UPDATE inquilino SET nome='".$nome."', contato ='".$tel."', email ='".$email."', morada ='".$morada."', idnifinquilino ='".$nif."', idfreguesia ='".$freguesia."', iddistrito ='".$distrito."', idconcelho ='".$concelho."', observacoes ='".$obs."'
      WHERE id=".$id;
     
      $msg = "";
          
      if ($conn->query($sql) === TRUE) {
        $msg  = "Inquilino Editado com Sucesso!";
      } else {
        $msg = "Error: " . $sql . "<br>" . $conn->error;
      }
    
      $conn->close();
    
      return $msg;
    
    }


    }




