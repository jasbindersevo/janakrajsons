<?php 
ini_set( 'display_errors', 1 );
error_reporting( E_ALL );

require("vendor/phpmailer/phpmailer/src/PHPMailer.php");
require("vendor/phpmailer/phpmailer/src/SMTP.php");
require("vendor/phpmailer/phpmailer/src/Exception.php");
    if (isset($_POST['submit'])) {
       
 
            if (empty($_POST['email']) || empty($_POST['username'])) {
                echo "Please fill out the field";
            } else {

                echo'hii';
             $mailto = "jasbinders@evolvan.com";
             $name = $_POST['username'];
             $fromEmail = $_POST['email'];
             $subject = "Quotes Form Data";

            //  $message = $_POST['message'];

             $message ="Client Name: " . $name . "<br/>". "Client Email: " . $fromEmail . "<br/> ";

            $mail = new PHPMailer\PHPMailer\PHPMailer();

            $mail->isSMTP();                                       
            $mail->Host = 'smtp.mailtrap.io';  
            $mail->SMTPAuth = true;                               
            $mail->Port = 2525;                                   
            $mail->Username = '7d5c448f227beb';                
            $mail->Password = 'd8299141568057';                           
            $mail->SMTPSecure = 'tls';    
            
   


            $mail->setFrom($fromEmail);
            $mail->addAddress($mailto);     
            // $mail->addAddress('ellen@example.com');              
            $mail->addReplyTo($fromEmail);
            // $mail->addCC('cc@example.com');
            // $mail->addBCC('bcc@example.com');

            // $mail->addAttachment('/var/tmp/file.tar.gz');        
            // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');   
            $mail->isHTML(true);                                  

            $mail->Subject = $subject;
            $mail->Body    = $message;
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            if(!$mail->send()) {
                echo 'Message could not be sent.';
                echo 'Mailer Error: ' . $mail->ErrorInfo;
            } else {
                header('Location: '.'index.php');
                die();
            }
            
          
        }

            
    
        
    }
    
     
?> 





















