<?php

ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';




if(isset($_POST["send"])){
    $mail = new PHPMailer(true);

    $mail->isSMTP();                                            
    $mail->Host       = 'smtp.gmail.com';                    
    $mail->SMTPAuth   = true;                                   
    $mail->Username   = 'prajapatishivangi724@gmail.com';                    
    $mail->Password   = 'lsuz vimv fpex lqcn'; 
    $mail->SMTPSecure = 'ssl';
    $mail->Port       = 465;
    
    $mail->setFrom('prajapatishivangi724@gmail.com');
    $mail->addAddress($_POST["email"]);    

    $mail->isHTML(true);                                  
    $mail->Subject = $_POST["name"];
    $mail->Body    = $_POST["msg"];
 
    $mail->send();
    
    echo "
    <script>
       alert('sent successfully');
       document.location.href='contact.php';
    
    </script>
    ";


}
 