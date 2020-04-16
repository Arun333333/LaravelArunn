
<?php
//use PHPMailer\PHPMailer\PHPMailer;
//use PHPMailer\PHPMailer\Exception;
require_once 'vendor/autoload.php';
$transport =(new Swift_SmtpTransport('smtp.gmail.com' , '587','tls'))
    ->setUsername('arundeepsingh2910')
    ->setPassword('RAMPALGROUP')
    ;
$mailer = new Swift_Mailer($transport);

$message = (new Swift_message('Wonderful Subject'))
   ->setFrom(['arundeepsingh2910@gmial.com'=> 'Mr. Arun'])
    ->setTo(['arsh3874@gmail.com'=>'to guru'])
    ->setBody('Here is the message')
    ;
$result = $mailer->send($message)
    ;
echo "Success email send using php  "
?>    