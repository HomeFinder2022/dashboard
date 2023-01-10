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


<<<<<<< Updated upstream

      //  function sendMail($nome, $email){

      //   $mail = new PHPMailer\PHPMailer();
      //   $mail->isSMTP();
      //   $mail->Host = 'smtp.gmail.com';
      //   $mail->SMTPAuth = true;
      //   $mail->SMTPSecure = 'tls';
      //   $mail->Username = 'homefinderpt@gmail.com';
      //   $mail->Password = 'kcissgousqmemhon';
      //   $mail->Port = 587;

      //   $mail->setFrom('homefinderpt@gmail.com', 'Paulo Pedras');
      //   $mail->addReplyTo('homefinderpt@gmail.com', 'HomeFinder');
      //   $mail->addAddress($email, 'Paulo');
      //   // $mail->addCC('dario_bianchi_@hotmail.com', 'Cópia');

      //   $mail->isHTML(true);
      //   $mail->Subject ="Convite de ".$nome." para a HomeFinder";
      //   $mail->Body    = 
      //   '<h1>HomeFinder</h1>
      //   <h2>Olá, '.$nome.' </h2>
      //   <P>Recebeu um convite de </P>
      //   <p>Junte-se à HomeFinder</p>
      //   <link>http://localhost/Dario/fase1/registro.php</>';
      //   $mail->AltBody = 'Para visualizar essa mensagem acesse http://http://localhost/Web/PROJETO%20FINAL/HomeFinder/dashboard/HomeFinder%20Dashboard/html/reg_imovel.php';
      //   $mail->addAttachment('../img/logo-HomeFinder-mini.png', 'homefinder.png');


      //   if(!$mail->send()) {
      //     echo 'Não foi possível enviar o convite<br>';
      //     echo 'Erro: ' . $mail->ErrorInfo;
      // } else {
      //     echo 'Convite enviado com sucesso!';
      // }
      // }


      function sendMail($nome, $email){

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
        '<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional //EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
        <html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
        
        <head>
          <!--[if gte mso 9]>
        <xml>
          <o:OfficeDocumentSettings>
            <o:AllowPNG/>
            <o:PixelsPerInch>96</o:PixelsPerInch>
          </o:OfficeDocumentSettings>
        </xml>
        <![endif]-->
          <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <meta name="x-apple-disable-message-reformatting">
          <!--[if !mso]><!-->
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <!--<![endif]-->
          <title></title>
        
          <style type="text/css">
            @media only screen and (min-width: 620px) {
              .u-row {
                width: 600px !important;
              }
              .u-row .u-col {
                vertical-align: top;
              }
              .u-row .u-col-100 {
                width: 600px !important;
              }
            }
            
            @media (max-width: 620px) {
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
              .u-col>div {
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
            
            a[x-apple-data-detectors="true"] {
              color: inherit !important;
              text-decoration: none !important;
            }
            
            table,
            td {
              color: #000000;
            }
            
            #u_body a {
              color: #0000ee;
              text-decoration: underline;
            }
          </style>
        
        
        
          <!--[if !mso]><!-->
          <link href="https://fonts.googleapis.com/css?family=Cabin:400,700" rel="stylesheet" type="text/css">
          <link href="https://fonts.googleapis.com/css?family=Rubik:400,700" rel="stylesheet" type="text/css">
          <!--<![endif]-->
        
        </head>
        
        <body class="clean-body u_body" style="margin: 0;padding: 0;-webkit-text-size-adjust: 100%;background-color: #f9f9f9;color: #000000">
          <!--[if IE]><div class="ie-container"><![endif]-->
          <!--[if mso]><div class="mso-container"><![endif]-->
          <table id="u_body" style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;min-width: 320px;Margin: 0 auto;background-color: #f9f9f9;width:100%" cellpadding="0" cellspacing="0">
            <tbody>
              <tr style="vertical-align: top">
                <td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top">
                  <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td align="center" style="background-color: #f9f9f9;"><![endif]-->
        
        
                  <div class="u-row-container" style="padding: 0px;background-color: transparent">
                    <div class="u-row" style="Margin: 0 auto;min-width: 320px;max-width: 600px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;">
                      <div style="border-collapse: collapse;display: table;width: 100%;height: 100%;background-color: transparent;">
                        <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding: 0px;background-color: transparent;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:600px;"><tr style="background-color: transparent;"><![endif]-->
        
                        <!--[if (mso)|(IE)]><td align="center" width="600" style="width: 600px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;" valign="top"><![endif]-->
                        <div class="u-col u-col-100" style="max-width: 320px;min-width: 600px;display: table-cell;vertical-align: top;">
                          <div style="height: 100%;width: 100% !important;">
                            <!--[if (!mso)&(!IE)]><!-->
                            <div style="height: 100%; padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;">
                              <!--<![endif]-->
        
                              <table style="font-family:"Cabin",sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                                <tbody>
                                  <tr>
                                    <td style="overflow-wrap:break-word;word-break:break-word;padding:10px;font-family:"Cabin",sans-serif;" align="left">
        
                                      <div style="color: #afb0c7; line-height: 170%; text-align: center; word-wrap: break-word;">
                                        <p style="font-size: 14px; line-height: 170%;"><span style="font-size: 14px; line-height: 23.8px;">View Email in Browser</span></p>
                                      </div>
        
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
        
                              <!--[if (!mso)&(!IE)]><!-->
                            </div>
                            <!--<![endif]-->
                          </div>
                        </div>
                        <!--[if (mso)|(IE)]></td><![endif]-->
                        <!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]-->
                      </div>
                    </div>
                  </div>
        
        
        
                  <div class="u-row-container" style="padding: 0px;background-color: transparent">
                    <div class="u-row" style="Margin: 0 auto;min-width: 320px;max-width: 600px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: #ffffff;">
                      <div style="border-collapse: collapse;display: table;width: 100%;height: 100%;background-color: transparent;">
                        <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding: 0px;background-color: transparent;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:600px;"><tr style="background-color: #ffffff;"><![endif]-->
        
                        <!--[if (mso)|(IE)]><td align="center" width="600" style="width: 600px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;" valign="top"><![endif]-->
                        <div class="u-col u-col-100" style="max-width: 320px;min-width: 600px;display: table-cell;vertical-align: top;">
                          <div style="height: 100%;width: 100% !important;">
                            <!--[if (!mso)&(!IE)]><!-->
                            <div style="height: 100%; padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;">
                              <!--<![endif]-->
        
                              <table style="font-family:"Cabin",sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                                <tbody>
                                  <tr>
                                    <td style="overflow-wrap:break-word;word-break:break-word;padding:20px;font-family:"Cabin",sans-serif;" align="left">
        
                                      <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                        <tr>
                                          <td style="padding-right: 0px;padding-left: 0px;" align="center">
        
                                            <img align="center" border="0" src="https://assets.unlayer.com/projects/123124/1671664190481-LOGO.png" alt="Image" title="Image" style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: inline-block !important;border: none;height: auto;float: none;width: 32%;max-width: 179.2px;"
                                              width="179.2" />
        
                                          </td>
                                        </tr>
                                      </table>
        
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
        
                              <!--[if (!mso)&(!IE)]><!-->
                            </div>
                            <!--<![endif]-->
                          </div>
                        </div>
                        <!--[if (mso)|(IE)]></td><![endif]-->
                        <!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]-->
                      </div>
                    </div>
                  </div>
        
        
        
                  <div class="u-row-container" style="padding: 0px;background-color: transparent">
                    <div class="u-row" style="Margin: 0 auto;min-width: 320px;max-width: 600px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: #003399;">
                      <div style="border-collapse: collapse;display: table;width: 100%;height: 100%;background-color: transparent;">
                        <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding: 0px;background-color: transparent;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:600px;"><tr style="background-color: #003399;"><![endif]-->
        
                        <!--[if (mso)|(IE)]><td align="center" width="600" style="background-color: #2fcb6a;width: 600px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;" valign="top"><![endif]-->
                        <div class="u-col u-col-100" style="max-width: 320px;min-width: 600px;display: table-cell;vertical-align: top;">
                          <div style="background-color: #2fcb6a;height: 100%;width: 100% !important;">
                            <!--[if (!mso)&(!IE)]><!-->
                            <div style="height: 100%; padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;">
                              <!--<![endif]-->
        
                              <table style="font-family:"Cabin",sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                                <tbody>
                                  <tr>
                                    <td style="overflow-wrap:break-word;word-break:break-word;padding:10px;font-family:"Cabin",sans-serif;" align="left">
        
                                      <h1 style="margin: 0px; color: #000000; line-height: 140%; text-align: center; word-wrap: break-word; font-weight: normal; font-family: "Rubik",sans-serif; font-size: 30px;">Recebeu um convite de</h1>
        
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
        
                              <table style="font-family:"Cabin",sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                                <tbody>
                                  <tr>
                                    <td style="overflow-wrap:break-word;word-break:break-word;padding:10px;font-family:"Cabin",sans-serif;" align="left">
        
                                      <h1 style="margin: 0px; color: #000000; line-height: 180%; text-align: center; word-wrap: break-word; font-weight: normal; font-family: "Rubik",sans-serif; font-size: 24px;">José Lebre</h1>
        
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
        
                              <!--[if (!mso)&(!IE)]><!-->
                            </div>
                            <!--<![endif]-->
                          </div>
                        </div>
                        <!--[if (mso)|(IE)]></td><![endif]-->
                        <!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]-->
                      </div>
                    </div>
                  </div>
        
        
        
                  <div class="u-row-container" style="padding: 0px;background-color: transparent">
                    <div class="u-row" style="Margin: 0 auto;min-width: 320px;max-width: 600px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: #ffffff;">
                      <div style="border-collapse: collapse;display: table;width: 100%;height: 100%;background-color: transparent;">
                        <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding: 0px;background-color: transparent;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:600px;"><tr style="background-color: #ffffff;"><![endif]-->
        
                        <!--[if (mso)|(IE)]><td align="center" width="600" style="width: 600px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;" valign="top"><![endif]-->
                        <div class="u-col u-col-100" style="max-width: 320px;min-width: 600px;display: table-cell;vertical-align: top;">
                          <div style="height: 100%;width: 100% !important;">
                            <!--[if (!mso)&(!IE)]><!-->
                            <div style="height: 100%; padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;">
                              <!--<![endif]-->
        
                              <table style="font-family:"Cabin",sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                                <tbody>
                                  <tr>
                                    <td style="overflow-wrap:break-word;word-break:break-word;padding:33px 55px;font-family:"Cabin",sans-serif;" align="left">
        
                                      <div style="line-height: 160%; text-align: center; word-wrap: break-word;">
                                        <p style="line-height: 160%; font-size: 14px;"><span style="font-size: 22px; line-height: 35.2px;">Olá Dário, junte-se à HomeFinder!</span></p>
                                      </div>
        
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
        
                              <table style="font-family:"Cabin",sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                                <tbody>
                                  <tr>
                                    <td style="overflow-wrap:break-word;word-break:break-word;padding:10px;font-family:"Cabin",sans-serif;" align="left">
        
                                      <!--[if mso]><style>.v-button {background: transparent !important;}</style><![endif]-->
                                      <div align="center">
                                        <!--[if mso]><v:roundrect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="http://localhost/Dario/fase1/registro.php" style="height:46px; v-text-anchor:middle; width:180px;" arcsize="8.5%"  stroke="f" fillcolor="#2fcb6a"><w:anchorlock/><center style="color:#000000;font-family:"Cabin",sans-serif;"><![endif]-->
                                        <a href="http://localhost/Dario/fase1/registro.php" target="_blank" class="v-button" style="box-sizing: border-box;display: inline-block;font-family:"Cabin",sans-serif;text-decoration: none;-webkit-text-size-adjust: none;text-align: center;color: #000000; background-color: #2fcb6a; border-radius: 4px;-webkit-border-radius: 4px; -moz-border-radius: 4px; width:auto; max-width:100%; overflow-wrap: break-word; word-break: break-word; word-wrap:break-word; mso-border-alt: none;">
                                          <span style="display:block;padding:14px 44px 13px;line-height:120%;"><span style="font-size: 16px; line-height: 19.2px;"><strong><span style="line-height: 19.2px; font-size: 16px;">Registe-se já!</span></strong>
                                          </span>
                                          </span>
                                        </a>
                                        <!--[if mso]></center></v:roundrect><![endif]-->
                                      </div>
        
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
        
                              <table style="font-family:"Cabin",sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                                <tbody>
                                  <tr>
                                    <td style="overflow-wrap:break-word;word-break:break-word;padding:33px 55px 60px;font-family:"Cabin",sans-serif;" align="left">
        
                                      <div style="line-height: 160%; text-align: center; word-wrap: break-word;">
                                        <p style="line-height: 160%; font-size: 14px;"><span style="font-size: 18px; line-height: 28.8px;">Muito obrigado,</span></p>
                                        <p style="line-height: 160%; font-size: 14px;"><span style="font-size: 18px; line-height: 28.8px;">HomeFinder</span></p>
                                      </div>
        
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
        
                              <!--[if (!mso)&(!IE)]><!-->
                            </div>
                            <!--<![endif]-->
                          </div>
                        </div>
                        <!--[if (mso)|(IE)]></td><![endif]-->
                        <!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]-->
                      </div>
                    </div>
                  </div>
        
        
        
                  <div class="u-row-container" style="padding: 0px;background-color: transparent">
                    <div class="u-row" style="Margin: 0 auto;min-width: 320px;max-width: 600px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: #e5eaf5;">
                      <div style="border-collapse: collapse;display: table;width: 100%;height: 100%;background-color: transparent;">
                        <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding: 0px;background-color: transparent;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:600px;"><tr style="background-color: #e5eaf5;"><![endif]-->
        
                        <!--[if (mso)|(IE)]><td align="center" width="600" style="background-color: #2fcb6a;width: 600px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;" valign="top"><![endif]-->
                        <div class="u-col u-col-100" style="max-width: 320px;min-width: 600px;display: table-cell;vertical-align: top;">
                          <div style="background-color: #2fcb6a;height: 100%;width: 100% !important;">
                            <!--[if (!mso)&(!IE)]><!-->
                            <div style="height: 100%; padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;">
                              <!--<![endif]-->
        
                              <table style="font-family:"Cabin",sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                                <tbody>
                                  <tr>
                                    <td style="overflow-wrap:break-word;word-break:break-word;padding:10px 10px 33px;font-family:"Cabin",sans-serif;" align="left">
        
                                      <div align="center">
                                        <div style="display: table; max-width:195px;">
                                          <!--[if (mso)|(IE)]><table width="195" cellpadding="0" cellspacing="0" border="0"><tr><td style="border-collapse:collapse;" align="center"><table width="100%" cellpadding="0" cellspacing="0" border="0" style="border-collapse:collapse; mso-table-lspace: 0pt;mso-table-rspace: 0pt; width:195px;"><tr><![endif]-->
        
        
                                          <!--[if (mso)|(IE)]><td width="32" style="width:32px; padding-right: 17px;" valign="top"><![endif]-->
                                          <table align="left" border="0" cellspacing="0" cellpadding="0" width="32" height="32" style="width: 32px !important;height: 32px !important;display: inline-block;border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;margin-right: 17px">
                                            <tbody>
                                              <tr style="vertical-align: top">
                                                <td align="left" valign="middle" style="word-break: break-word;border-collapse: collapse !important;vertical-align: top">
                                                  <a href="https://facebook.com/" title="Facebook" target="_blank">
                                                    <img src="https://cdn.tools.unlayer.com/social/icons/circle/facebook.png" alt="Facebook" title="Facebook" width="32" style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: block !important;border: none;height: auto;float: none;max-width: 32px !important">
                                                  </a>
                                                </td>
                                              </tr>
                                            </tbody>
                                          </table>
                                          <!--[if (mso)|(IE)]></td><![endif]-->
        
                                          <!--[if (mso)|(IE)]><td width="32" style="width:32px; padding-right: 17px;" valign="top"><![endif]-->
                                          <table align="left" border="0" cellspacing="0" cellpadding="0" width="32" height="32" style="width: 32px !important;height: 32px !important;display: inline-block;border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;margin-right: 17px">
                                            <tbody>
                                              <tr style="vertical-align: top">
                                                <td align="left" valign="middle" style="word-break: break-word;border-collapse: collapse !important;vertical-align: top">
                                                  <a href="https://linkedin.com/" title="LinkedIn" target="_blank">
                                                    <img src="https://cdn.tools.unlayer.com/social/icons/circle/linkedin.png" alt="LinkedIn" title="LinkedIn" width="32" style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: block !important;border: none;height: auto;float: none;max-width: 32px !important">
                                                  </a>
                                                </td>
                                              </tr>
                                            </tbody>
                                          </table>
                                          <!--[if (mso)|(IE)]></td><![endif]-->
        
                                          <!--[if (mso)|(IE)]><td width="32" style="width:32px; padding-right: 17px;" valign="top"><![endif]-->
                                          <table align="left" border="0" cellspacing="0" cellpadding="0" width="32" height="32" style="width: 32px !important;height: 32px !important;display: inline-block;border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;margin-right: 17px">
                                            <tbody>
                                              <tr style="vertical-align: top">
                                                <td align="left" valign="middle" style="word-break: break-word;border-collapse: collapse !important;vertical-align: top">
                                                  <a href="https://instagram.com/" title="Instagram" target="_blank">
                                                    <img src="https://cdn.tools.unlayer.com/social/icons/circle/instagram.png" alt="Instagram" title="Instagram" width="32" style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: block !important;border: none;height: auto;float: none;max-width: 32px !important">
                                                  </a>
                                                </td>
                                              </tr>
                                            </tbody>
                                          </table>
                                          <!--[if (mso)|(IE)]></td><![endif]-->
        
                                          <!--[if (mso)|(IE)]><td width="32" style="width:32px; padding-right: 0px;" valign="top"><![endif]-->
                                          <table align="left" border="0" cellspacing="0" cellpadding="0" width="32" height="32" style="width: 32px !important;height: 32px !important;display: inline-block;border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;margin-right: 0px">
                                            <tbody>
                                              <tr style="vertical-align: top">
                                                <td align="left" valign="middle" style="word-break: break-word;border-collapse: collapse !important;vertical-align: top">
                                                  <a href="https://whatsapp.com/" title="WhatsApp" target="_blank">
                                                    <img src="https://cdn.tools.unlayer.com/social/icons/circle/whatsapp.png" alt="WhatsApp" title="WhatsApp" width="32" style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: block !important;border: none;height: auto;float: none;max-width: 32px !important">
                                                  </a>
                                                </td>
                                              </tr>
                                            </tbody>
                                          </table>
                                          <!--[if (mso)|(IE)]></td><![endif]-->
        
        
                                          <!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]-->
                                        </div>
                                      </div>
        
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
        
                              <!--[if (!mso)&(!IE)]><!-->
                            </div>
                            <!--<![endif]-->
                          </div>
                        </div>
                        <!--[if (mso)|(IE)]></td><![endif]-->
                        <!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]-->
                      </div>
                    </div>
                  </div>
        
        
        
                  <div class="u-row-container" style="padding: 0px;background-color: #2fcb6a">
                    <div class="u-row" style="Margin: 0 auto;min-width: 320px;max-width: 600px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;">
                      <div style="border-collapse: collapse;display: table;width: 100%;height: 100%;background-color: transparent;">
                        <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding: 0px;background-color: #2fcb6a;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:600px;"><tr style="background-color: transparent;"><![endif]-->
        
                        <!--[if (mso)|(IE)]><td align="center" width="600" style="background-color: #2fcb6a;width: 600px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;" valign="top"><![endif]-->
                        <div class="u-col u-col-100" style="max-width: 320px;min-width: 600px;display: table-cell;vertical-align: top;">
                          <div style="background-color: #2fcb6a;height: 100%;width: 100% !important;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;">
                            <!--[if (!mso)&(!IE)]><!-->
                            <div style="height: 100%; padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;">
                              <!--<![endif]-->
        
                              <table style="font-family:"Cabin",sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                                <tbody>
                                  <tr>
                                    <td style="overflow-wrap:break-word;word-break:break-word;padding:10px;font-family:"Cabin",sans-serif;" align="left">
        
                                      <div style="line-height: 140%; text-align: left; word-wrap: break-word;">
                                        <p style="font-size: 14px; line-height: 140%; text-align: center;">HomeFinder © 2022</p>
                                      </div>
        
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
        
                              <!--[if (!mso)&(!IE)]><!-->
                            </div>
                            <!--<![endif]-->
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
        
        </html>';
        $mail->AltBody = 'Para visualizar essa mensagem acesse http://http://localhost/Web/PROJETO%20FINAL/HomeFinder/fase1/index.php';
        $mail->addAttachment('../img/logo-HomeFinder-mini.png', 'homefinder.png');


        if(!$mail->send()) {
          echo 'Não foi possível enviar o convite<br>';
          echo 'Erro: ' . $mail->ErrorInfo;
      } else {
          echo 'Convite enviado com sucesso!';
      }
      }
































=======
>>>>>>> Stashed changes



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
<<<<<<< Updated upstream
                // $msg .= "<td><button type='button' class='btn btn-danger btn-sm' onclick='delInqui(".$row['id'].")'>Apagar</button>";
                $msg .= "<td><button type='button' class='btn btn-success btn-sm' onclick='sendEmail()'>Enviar Convite</button></td>";
=======
                $msg .= "<td style='text-align: center; vertical-align: middle;'><button type='button' class='btn btn-info btn-sm' onclick='editInqui(".$row['id'].")'>Info</button>";
                $msg .= "<td style='text-align: center; vertical-align: middle;'><button type='button' class='btn btn-danger btn-sm' onclick='delInqui(".$row['id'].")'>Apagar</button>";
                $msg .= "<td style='text-align: center; vertical-align: middle;'><button type='button' class='btn btn-primary btn-sm' onclick='sendEmail(".$row['email'].")'>Enviar Convite</button></td>";
>>>>>>> Stashed changes
                $msg .= "</tr>";
                }
                
              
              }
      
        $conn->close();
        return $msg;
    }

<<<<<<< Updated upstream
=======

    
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

>>>>>>> Stashed changes
    }




