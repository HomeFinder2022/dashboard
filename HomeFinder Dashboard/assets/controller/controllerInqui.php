<?php
use PHPMailer\PHPMailer;
use PHPMailer\Exception;

require_once 'connection.php';


require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

  class Inquilino{

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
        $mail->addAddress($email, 'Dário Bianchi');
        // $mail->addCC('dario_bianchi_@hotmail.com', 'Cópia');

        $mail->isHTML(true);
        $mail->Subject ="Convite de José Lebre para a HomeFinder";
        $mail->Body    = 

"<html>
<body>
<div class='container'>
<div style='background-color: #2FCB6A; height: 55px;'></div>

<p align='center'><img src='../img/logo-HomeFinder-mini.png' alt='logo'></p>

<p>Hi ".$nome.",</p>

<p>I wanted to personally invite you to join me on HomeFinder, a new platform that helps people find their dream home.</p>

<p>With HomeFinder, you can search for homes in your area, save your favorite listings, and connect with top real estate agents. It's the easiest way to find your perfect home!</p>

<p>I think you'll love it, and I can't wait to see what you find.</p>

<p>To join, just click the link below:</p>

<p><a href='http://localhost/web/PROJETO FINAL/HomeFinder/fase1/registro.php'>Sign up for HomeFinder</a></p>

<p>I hope to see you on HomeFinder soon!</p>

<p>Best,<br>".$nome."</p>

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
      
        $sql = "SELECT inquilino.*, distrito.nome AS nomedistrito, concelho.nome AS nomeconcelho, freguesias.nome AS nomefreg

           FROM inquilino, distrito, concelho, 
           freguesias

           WHERE
           inquilino.iddistrito = distrito.iddistrito AND
           inquilino.idconcelho = concelho.idconcelho AND
           inquilino.idfreguesia = freguesias.idfreguesia";
    
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
                // $msg .= "<td><button type='button' class='btn btn-danger btn-sm' onclick='delInqui(".$row['id'].")'>Apagar</button>";
                $msg .= "<td><button type='button' class='btn btn-success btn-sm' onclick='sendEmail()'>Enviar Convite</button></td>";
                $msg .= "</tr>";
                }
                
              
              }
      
        $conn->close();
        return $msg;
    }

    }




