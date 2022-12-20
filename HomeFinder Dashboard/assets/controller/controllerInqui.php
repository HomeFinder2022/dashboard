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



       function sendMail($nome, $email){

        $mail = new PHPMailer\PHPMailer();
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = 'tls';
        $mail->Username = 'homefinderpt@gmail.com';
        $mail->Password = 'kcissgousqmemhon';
        $mail->Port = 587;

        $mail->setFrom('homefinderpt@gmail.com', 'Paulo Pedras');
        $mail->addReplyTo('homefinderpt@gmail.com', 'HomeFinder');
        $mail->addAddress($email, 'Paulo');
        // $mail->addCC('dario_bianchi_@hotmail.com', 'Cópia');

        $mail->isHTML(true);
        $mail->Subject ="Convite de ".$nome." para a HomeFinder";
        $mail->Body    = 
        '<h1>HomeFinder</h1>
        <h2>Olá, '.$nome.' </h2>
        <P>Recebeu um convite de </P>
        <p>Junte-se à HomeFinder</p>
        <link>http://localhost/Dario/fase1/registro.php</>';
        $mail->AltBody = 'Para visualizar essa mensagem acesse http://http://localhost/Web/PROJETO%20FINAL/HomeFinder/dashboard/HomeFinder%20Dashboard/html/reg_imovel.php';
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




