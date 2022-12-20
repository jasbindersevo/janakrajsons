<?php 
ini_set( 'display_errors', 1 );
error_reporting( E_ALL );

include ("vendor/phpmailer/phpmailer/src/PHPMailer.php");
include ("vendor/phpmailer/phpmailer/src/SMTP.php");
include ("vendor/phpmailer/phpmailer/src/Exception.php");
include ("vendor/phpmailer/phpmailer/src/OAuthTokenProvider.php");
include  "vendor/phpmailer/phpmailer/src/OAuth.php";
    if (isset($_POST['submit'])) {
       
 
            if (empty($_POST['username']) || empty($_POST['email']) || empty($_POST['phone']) || empty($_POST['subject']) || empty($_POST['message'])) {
                echo "Please fill out all fields";
            } else {
             $mailto = "jasbinders@evolvan.com";
             $name = $_POST['username'];
             $fromEmail = $_POST['email'];
             $phone = $_POST['phone'];
             $subject =$_POST['subject'] ;

            //  $message = $_POST['message'];

             $message = "Client Name: " . $name . "\n". "Phone Number: " . $phone . "\n\n" . "Client Message: " . "\n" . $_POST['message'];

            $mail = new PHPMailer\PHPMailer\PHPMailer();

        
            
            $mail->IsSMTP();
            $mail->Mailer = "smtp";
            $mail->SMTPDebug  = 0;
            $mail->Host = "smtp.gmail.com";  
            $mail->SMTPAuth = true;                               
            $mail->Port = 587;                                   
            $mail->Username = 'jasbinders@evolvan.com';                
            $mail->Password = 'evolvan1234';                           
            $mail->SMTPSecure = 'tls';   


            //Set Client ID and Secret Key
            // $mail->AuthType = 'XOAUTH2';
            // $mail->oauthUserEmail = "jasbinders@evolvan.com";
            // $mail->oauthClientId = "576397740516-30ui7u9ftrapokpjtc2j9c8ba16naunr.apps.googleusercontent.com";
            // $mail->oauthClientSecret = "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";
     

            //Create token
            // $gmail_token = new OAuth(
            //     $mail->oauthClientId,
            //     $mail->oauthClientSecret,
            //     OAUTH_SIG_METHOD_HMACSHA1,
            //     OAUTH_AUTH_TYPE_URI
            // );
            
            // $gmail_token->setToken($mail->oauthUserEmail);
            // $mail->oauthRefreshToken = $gmail_token->refreshToken();
            
            //Recipients
            $mail->setFrom('info@janakrajsons.com', 'Janak Raj');
            $mail->addAddress('jasbinders@evolvan.com', $name);
            
            //Content
            $mail->isHTML(true);
            $mail->Subject = $subject;
            $mail->Body    = $message;
            
            //Send Email
            if(!$mail->send()) {
                echo 'Message could not be sent.';
                echo 'Mailer Error: ' . $mail->ErrorInfo;
            } else {
                echo 'Message has been sent';
            }

        }

            
    
        
    }
    
     
?> 





















