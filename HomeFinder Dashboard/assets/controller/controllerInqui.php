<?php
use PHPMailer\PHPMailer;
use PHPMailer\Exception;

require_once 'connection.php';


require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

  class Inquilino{

    function regInqui($nome, $email, $morada, $tel, $obs, $nifInqui){
        global $conn; 

        session_start();
        $nifUser = $_SESSION['nif'];
  
          $sql = "INSERT INTO inquilino (nome, email, morada, contato, observacoes,idnifinquilino , idproprietario, idregisto) 
          VALUES('".$nome."', '".$email."', '".$morada."', '".$tel."', '".$obs."', '".$nifInqui."', '".$nifUser."', 2)";
         
          $msg = "";
          
          if ($conn->query($sql) === TRUE) {
            $msg = "Inquilino adicionado com sucesso!";
          } else {
            $msg = "Error: " . $sql . "<br>" . $conn->error;
          }
          
          // $conn->close();
  
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
        $mail->addAddress($email, $nome);
        // $mail->addCC('dario_bianchi_@hotmail.com', 'Cópia');
        $logo = "/../assets/img/HomeFinder_Logo.png";
        $mail->isHTML(true);
        $mail->Subject ="Convite para entrar no HomeFinder";
        $mail->Body = "<!DOCTYPE HTML PUBLIC '-//W3C//DTD XHTML 1.0 Transitional //EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
        <html xmlns='http://www.w3.org/1999/xhtml' xmlns:v='urn:schemas-microsoft-com:vml' xmlns:o='urn:schemas-microsoft-com:office:office'>
        <head>
        <!--[if gte mso 9]>
        <xml>
          <o:OfficeDocumentSettings>
            <o:AllowPNG/>
            <o:PixelsPerInch>96</o:PixelsPerInch>
          </o:OfficeDocumentSettings>
        </xml>
        <![endif]-->
          <meta http-equiv='Content-Type' content='text/html; charset=UTF-8'>
          <meta name='viewport' content='width=device-width, initial-scale=1.0'>
          <meta name='x-apple-disable-message-reformatting'>
          <!--[if !mso]><!--><meta http-equiv='X-UA-Compatible' content='IE=edge'><!--<![endif]-->
          <title></title>
          
            <style type='text/css'>
              @media only screen and (min-width: 670px) {
          .u-row {
            width: 650px !important;
          }
          .u-row .u-col {
            vertical-align: top;
          }
        
          .u-row .u-col-100 {
            width: 650px !important;
          }
        
        }
        
        @media (max-width: 670px) {
          .u-row-container {
            max-width: 100% !important;
            padding-left: 0px !important;
            padding-right: 0px !important;
          }
          .u-row .u-col {
            min-width: 320px !important;
            max-width: 100% !important;
            display: block !important;
          }
          .u-row {
            width: 100% !important;
          }
          .u-col {
            width: 100% !important;
          }
          .u-col > div {
            margin: 0 auto;
          }
        }
        body {
          margin: 0;
          padding: 0;
        }
        
        table,
        tr,
        td {
          vertical-align: top;
          border-collapse: collapse;
        }
        
        p {
          margin: 0;
        }
        
        .ie-container table,
        .mso-container table {
          table-layout: fixed;
        }
        
        * {
          line-height: inherit;
        }
        
        a[x-apple-data-detectors='true'] {
          color: inherit !important;
          text-decoration: none !important;
        }
        
        table, td { color: #000000; } #u_body a { color: #0000ee; text-decoration: underline; }
            </style>
          
          
        
        </head>
        
        <body class='clean-body u_body' style='margin: 0;padding: 0;-webkit-text-size-adjust: 100%;background-color: #f2f2f2;color: #000000'>
          <!--[if IE]><div class='ie-container'><![endif]-->
          <!--[if mso]><div class='mso-container'><![endif]-->
          <table id='u_body' style='border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;min-width: 320px;Margin: 0 auto;background-color: #f2f2f2;width:100%' cellpadding='0' cellspacing='0'>
          <tbody>
          <tr style='vertical-align: top'>
            <td style='word-break: break-word;border-collapse: collapse !important;vertical-align: top'>
            <!--[if (mso)|(IE)]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td align='center' style='background-color: #f2f2f2;'><![endif]-->
            
        
        <div class='u-row-container' style='padding: 0px 10px;background-color: rgba(255,255,255,0)'>
          <div class='u-row' style='Margin: 0 auto;min-width: 320px;max-width: 650px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: #454545;'>
            <div style='border-collapse: collapse;display: table;width: 100%;height: 100%;background-image: url('images/image-1.png');background-repeat: repeat;background-position: center top;background-color: transparent;'>
             <table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='padding: 0px 10px;background-color: rgba(255,255,255,0);' align='center'><table cellpadding='0' cellspacing='0' border='0' style='width:650px;'><tr style='background-image: url('images/image-1.png');background-repeat: repeat;background-position: center top;background-color: #ff0000;'><
              
        <!--[if (mso)|(IE)]><td align='center' width='650' style='width: 650px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;' valign='top'><![endif]-->
        <div class='u-col u-col-100' style='max-width: 320px;min-width: 650px;display: table-cell;vertical-align: top;'>
          <div style='height: 100%;width: 100% !important;'>
          <!--[if (!mso)&(!IE)]><!--><div style='box-sizing: border-box; height: 100%; padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;'><!--<![endif]-->
          
        <table style='font-family:arial,helvetica,sans-serif;' role='presentation' cellpadding='0' cellspacing='0' width='100%' border='0'>
          <tbody>
            <tr>
              <td style='overflow-wrap:break-word;word-break:break-word;padding:15px 20px 20px;font-family:arial,helvetica,sans-serif;' align='left'>
                
        <table width='100%' cellpadding='0' cellspacing='0' border='0'>
          <tr>
            <td style='padding-right: 0px;padding-left: 0px;' align='center'>
              
              <img src='".$logo."' alt='LOGOHOMEFINDER'/>
              
            </td>
          </tr>
        </table>
        
              </td>
            </tr>
          </tbody>
        </table>
        
        <table style='font-family:arial,helvetica,sans-serif;' role='presentation' cellpadding='0' cellspacing='0' width='100%' border='0'>
          <tbody>
            <tr>
              <td style='overflow-wrap:break-word;word-break:break-word;padding:10px 20px 35px;font-family:arial,helvetica,sans-serif;' align='left'>
                
          <div style='color: #ffffff; line-height: 140%; text-align: center; word-wrap: break-word;'>
            <p style='font-size: 14px; line-height: 140%;'><span style='font-size: 25px; line-height: 25.2px;'>Recebeu um convite de <span style='color: #2fcb6a; font-size: 25px; line-height: 25.2px;'><span style='font-size: 28px; line-height: 25.2px;'>Dário Bianchi</span></span></span></p>
        
          </div>
        
              </td>
            </tr>
          </tbody>
        </table>
        
          <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
          </div>
        </div>
        <!--[if (mso)|(IE)]></td><![endif]-->
              <!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]-->
            </div>
          </div>
        </div>
        
        
        
        <div class='u-row-container' style='padding: 0px 10px;background-color: rgba(255,255,255,0)'>
          <div class='u-row' style='Margin: 0 auto;min-width: 320px;max-width: 650px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: #ffffff;'>
            <div style='border-collapse: collapse;display: table;width: 100%;height: 100%;background-color: transparent;'>
              <!--[if (mso)|(IE)]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='padding: 0px 10px;background-color: rgba(255,255,255,0);' align='center'><table cellpadding='0' cellspacing='0' border='0' style='width:650px;'><tr style='background-color: #ffffff;'><![endif]-->
              
        <!--[if (mso)|(IE)]><td align='center' width='650' style='width: 650px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;' valign='top'><![endif]-->
        <div class='u-col u-col-100' style='max-width: 320px;min-width: 650px;display: table-cell;vertical-align: top;'>
          <div style='height: 100%;width: 100% !important;'>
          <!--[if (!mso)&(!IE)]><!--><div style='box-sizing: border-box; height: 100%; padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;'><!--<![endif]-->
          
        <table style='font-family:arial,helvetica,sans-serif;' role='presentation' cellpadding='0' cellspacing='0' width='100%' border='0'>
          <tbody>
            <tr>
              <td style='overflow-wrap:break-word;word-break:break-word;padding:40px 20px 10px;font-family:arial,helvetica,sans-serif;' align='left'>
                
          <div style='line-height: 150%; text-align: center; word-wrap: break-word;'>
            <p style='font-size: 14px; line-height: 150%;'><span style='font-size: 20px; line-height: 30px;'>Queria convidá-lo pessoalmente a juntar-se a mim no HomeFinder, uma nova plataforma que ajuda as pessoas a encontrar a casa dos seus sonhos.</span></p>
          </div>
        
              </td>
            </tr>
          </tbody>
        </table>
        
        <table style='font-family:arial,helvetica,sans-serif;' role='presentation' cellpadding='0' cellspacing='0' width='100%'>
          <tbody>
            <tr>
              <td style='overflow-wrap:break-word;word-break:break-word;padding:10px 20px;font-family:arial,helvetica,sans-serif;'>
                
          <div style='line-height: 150%; text-align: center; word-wrap: break-word;'>
            <p style='font-size: 14px; line-height: 150%;'><span style='font-size: 20px; line-height: 30px;'>Com o HomeFinder, pode procurar casas na sua área, escolher as melhores opções para si. É a forma mais fácil de encontrar a sua casa perfeita!</span></p>
        <p style='font-size: 14px; line-height: 150%;'><span style='font-size: 20px; line-height: 30px;'>Acho que vai adorar, mal posso esperar para ver o que vai encontrar.</span></p>
          </div>
        
              </td>
            </tr>
          </tbody>
        </table>
        
        <table style='font-family:arial,helvetica,sans-serif;' role='presentation' cellpadding='0' cellspacing='0' width='100%'>
          <tbody>
            <tr>
              <td style='overflow-wrap:break-word;word-break:break-word;padding:10px 20px;font-family:arial,helvetica,sans-serif;'>
                
          <table height='0px' align='center' border='0' cellpadding='0' cellspacing='0' width='100%' style='border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;border-top: 1px solid #CCC;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%'>
            <tbody>
              <tr style='vertical-align: top'>
                <td style='word-break: break-word;border-collapse: collapse !important;vertical-align: top;font-size: 0px;line-height: 0px;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%'>
                  <span>&#160;</span>
                </td>
              </tr>
            </tbody>
          </table>
        
              </td>
            </tr>
          </tbody>
        </table>
        
        <table style='font-family:arial,helvetica,sans-serif;' role='presentation' cellpadding='0' cellspacing='0' width='100%' border='0'>
          <tbody>
            <tr>
              <td style='overflow-wrap:break-word;word-break:break-word;padding:10px 20px;font-family:arial,helvetica,sans-serif;' align='left'>
                
          <div style='color: #2fcb6a; line-height: 150%; text-align: center; word-wrap: break-word;'>
            <p style='line-height: 150%; font-size: 14px;'><span style='font-size: 30px; line-height: 45px;'><strong>Para aderir, basta clicar no botão abaixo:</strong></span></p>
          </div>
        
              </td>
            </tr>
          </tbody>
        </table>
        
        <table style='font-family:arial,helvetica,sans-serif;' role='presentation' cellpadding='0' cellspacing='0' width='100%' border='0'>
          <tbody>
            <tr>
              <td style='overflow-wrap:break-word;word-break:break-word;padding:20px 20px 50px;font-family:arial,helvetica,sans-serif;' align='left'>
                
          <!--[if mso]><style>.v-button {background: transparent !important;}</style><![endif]-->
        <div align='center'>
          <!--[if mso]><v:roundrect xmlns:v='urn:schemas-microsoft-com:vml' xmlns:w='urn:schemas-microsoft-com:office:word' href='' style='height:85px; v-text-anchor:middle; width:220px;' arcsize='59%'  stroke='f' fillcolor='#2fcb6a'><w:anchorlock/><center style='color:#FFF;font-family:arial,helvetica,sans-serif;'><![endif]-->  
            <a href='' target='_blank' class='v-button' style='box-sizing: border-box;display: inline-block;font-family:arial,helvetica,sans-serif;text-decoration: none;-webkit-text-size-adjust: none;text-align: center;color: #FFF; background-color: #2fcb6a; border-radius: 50px;-webkit-border-radius: 50px; -moz-border-radius: 50px; width:auto; max-width:100%; overflow-wrap: break-word; word-break: break-word; word-wrap:break-word; mso-border-alt: none;'>
              <span style='display:block;padding:20px 50px;line-height:150%;'><strong><span style='font-size: 30px; line-height: 45px;'>Registar</span></strong></span>
            </a>
          <!--[if mso]></center></v:roundrect><![endif]-->
        </div>
        <p style='font-size: 14px; line-height: 150%; margin-top: 25px; text-align: center;'><span style='font-size: 20px; line-height: 30px;'>Espero vê-lo em breve no HomeFinder!</span></p>
        <p style='font-size: 14px; line-height: 150%; margin-top: 25px; text-align: center;'><span style='font-size: 20px; line-height: 30px;'>Cumprimentos,<br>Dário Bianchi</span></p>
        
        
              </td>
            </tr>
          </tbody>
        </table>
        
          <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
          </div>
        </div>
        <!--[if (mso)|(IE)]></td><![endif]-->
              <!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]-->
            </div>
          </div>
        </div>
        
        
        
        <div class='u-row-container' style='padding: 10px;background-color: rgba(255,255,255,0)'>
          <div class='u-row' style='Margin: 0 auto;min-width: 320px;max-width: 650px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;'>
            <div style='border-collapse: collapse;display: table;width: 100%;height: 100%;background-color: transparent;'>
              <!--[if (mso)|(IE)]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='padding: 10px;background-color: rgba(255,255,255,0);' align='center'><table cellpadding='0' cellspacing='0' border='0' style='width:650px;'><tr style='background-color: transparent;'><![endif]-->
              
        <!--[if (mso)|(IE)]><td align='center' width='650' style='width: 650px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;' valign='top'><![endif]-->
        <div class='u-col u-col-100' style='max-width: 320px;min-width: 650px;display: table-cell;vertical-align: top;'>
          <div style='height: 100%;width: 100% !important;'>
          <!--[if (!mso)&(!IE)]><!--><div style='box-sizing: border-box; height: 100%; padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;'><!--<![endif]-->
          
        <table style='font-family:arial,helvetica,sans-serif;' role='presentation' cellpadding='0' cellspacing='0' width='100%' border='0'>
          <tbody>
            <tr>
              <td style='overflow-wrap:break-word;word-break:break-word;padding:20px;font-family:arial,helvetica,sans-serif;' align='left'>
        
              </td>
            </tr>
          </tbody>
        </table>
        
          <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
          </div>
        </div>
        <!--[if (mso)|(IE)]></td><![endif]-->
              <!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]-->
            </div>
          </div>
        </div>
        
        
            <!--[if (mso)|(IE)]></td></tr></table><![endif]-->
            </td>
          </tr>
          </tbody>
          </table>
          <!--[if mso]></div><![endif]-->
          <!--[if IE]></div><![endif]-->
        </body>
        
        </html>
        "; 







        // http://localhost/Dario/fase1/registro.php


        $mail->AltBody = 'Para visualizar essa mensagem acesse http://http://localhost/Web/PROJETO%20FINAL/HomeFinder/fase1/index.php';
        $mail->addAttachment('../img/logo-HomeFinder-mini.png', 'homefinder.png');


        if(!$mail->send()) {
          echo 'Não foi possível enviar o convite!<br>';
          echo 'Erro: ' . $mail->ErrorInfo;
      } else {
          echo 'Convite enviado com sucesso!';
      }
      }






      function listaInqui(){

        global $conn;
      
        session_start();
        $nifUser = $_SESSION['nif'];

        $sql = "SELECT *

           FROM inquilino

           WHERE
   
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
                $msg .= "<td>".$row['observacoes']."</td>";

                $msg .= "<td style='text-align: center; vertical-align: middle;'><button type='button' class='btn btn-info btn-sm' onclick='editInqui(".$row['id'].")'>Info</button>";
                $msg .= "<td style='text-align: center; vertical-align: middle;'><button type='button' class='btn btn-danger btn-sm' onclick='delInqui(".$row['id'].")'>Apagar</button>";
                if($row['idregisto'] == 2){
                  $msg .= "<td style='text-align: center; vertical-align: middle;'><button type='button' class='btn btn-primary btn-sm' onclick='sendEmail(\"".$row['email']."\", \"".$row['nome']."\")'>Enviar Convite</button></td>";
                }else{
                  $msg .= "<td></td>";
                }
                

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
              $obs = $row['observacoes'];
          }
      } 
      $conn->close();
  
      $res = array("nome" => $nome, "morada"=>$morada, "contato"=>$contato, "email"=>$email, "obs"=>$obs, "nif"=>$nif);
      $res = json_encode($res);
    
      return $res;
    }

    function guardaInquilino($id, $nome, $email, $nif, $morada, $tel,$obs){

      global $conn;
    
      $sql = "UPDATE inquilino SET nome='".$nome."', contato ='".$tel."', email ='".$email."', morada ='".$morada."', idnifinquilino ='".$nif."', observacoes ='".$obs."'
      WHERE id=".$id;
     
      $msg = "";
          
      if ($conn->query($sql) === TRUE) {
        $msg  = "Inquilino editado com sucesso!";
      } else {
        $msg = "Error: " . $sql . "<br>" . $conn->error;
      }
    
      $conn->close();
    
      return $msg;
    
    }


    function verifyInqui($email){

      global $conn;
      session_start();
      $nifUser = $_SESSION['nif'];
      $flag = "";

      $select_query = "SELECT *
      FROM utilizador WHERE email ='".$email."'";
    $result = $conn->query($select_query);
      if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        // Email is present in the table
        // Insert the values into another table
        $flag = true;
        $insert_query =  "INSERT INTO inquilino (nome, email, morada, contato, idnifinquilino , idproprietario, idregisto) 
        VALUES('".$row['nome']."','".$row['email']."','".$row['morada']."','".$row['telemovel']."','".$row['nif']."', $nifUser, 1)";
       
        if ($conn->query($insert_query) === TRUE) {
           $msg = "Inquilino registado com sucesso!";
        } else {
            echo "Error: " . $conn->error;
        }
    } else {
        // Email is not present in the table
        $flag = false;
        $msg = "O email inserido não foi encontrado na base de dados. Tente novamente!";
    }
      
      $conn->close();

      $res = array("msg"=>$msg, "flag"=>$flag);
      $res = json_encode($res);
    
      return $res;

    }


    }




