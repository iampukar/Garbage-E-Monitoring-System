 <?php

$from_name = "vasant";
$from_mail = "vasanthegde@mail.com";
$message = "Hell this awsome";


require_once 'swiftmailer/lib/swift_required.php';
/*
// Create the Transport
$transport = Swift_SmtpTransport::newInstance('mail.plo-in.org', 25)
  ->setUsername('ploin15')
  ->setPassword('ploMysorein14')
  ;


You could alternatively use a different transport such as Sendmail or Mail:
// Sendmail
$transport = Swift_SendmailTransport::newInstance('/usr/sbin/sendmail -bs');
// Mail

*/
// Create the Mailer using your created Transport
$transport = Swift_MailTransport::newInstance();
$mailer = Swift_Mailer::newInstance($transport);

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type: text/plain; charset=iso-8859-1\n";
$headers .= "Message-ID: <".time()." TheSystem@".$_SERVER['SERVER_NAME'].">\r\n";
$headers .= "X-Mailer: PHP v".phpversion()."\r\n"; 
// Create a message
$message = Swift_Message::newInstance('ALERTS')
  ->setFrom(array( 'E_garbage@mail.com' => 'E_garbage'))
  ->setTo(array('asassuass@gmail.com'))
  ->setBody("Name : ".$from_name."\n\n"."Email : ".$from_mail."\n\n".'Message : '."\n".$message)
  ;

// Send the message
$result = $mailer->send($message);
 
           if( $result == 1)
           {
            echo "successfully";
           }
           else{
           		  echo "error";
           }
?>