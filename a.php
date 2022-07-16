<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="a.php" method="post">
        <h1></h1>
        <input type="text" placeholder="name" name="name"><br>
        <input type="email"placeholder="email" name="email"><br>
        <input type="text"placeholder="subject"name="subject"><br>
    <!--<textarea placeholder="enter some text"></textarea>-->
    <input  name="file" type="file" />
        <input type="submit" name="submit"><br>
    </form>
    
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
if(isset($_POST['submit']))
{
require 'includes/PHPMailer.php';
require 'includes/SMTP.php';
require 'includes/Exception.php';



$name=$_POST['name'];
$email=$_POST['email'];
$sub=$_POST['subject'];
$file=$_POST['file'];
 $mail = new PHPMailer();

 $mail->isSMTP();
 $mail->Host =" smtp-mail.outlook.com.";
 $mail->SMTPAuth = "true";
 $mail->SMTPSecure ="tls";
 $mail->Port ="587";
 $mail->Username ="example mail.com";
 $mail->Password="paswd";
 $mail->Subject="Test email";
 $mail->setFrom("example mail.com");
 $mail->Body="$name,$sub";
 $mail->addAddress("$email");
 $mail->addReplyTo("replyer mail");
 $mail->addAttachment("$file");
 if($mail->send()){
     echo "email sent";
 }
 else{
     echo "email not sent";
 }
 $mail->smtpClose();
}
 ?>
</body>
</html>
