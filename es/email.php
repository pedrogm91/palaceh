<?php
require_once '../-/components/lib/swift_required.php';

$transport = Swift_SmtpTransport::newInstance('smtp.gmail.com', 465, "ssl")
  ->setUsername('reservacionespalacev@gmail.com')
  ->setPassword('dossantos123*');

$mailer = Swift_Mailer::newInstance($transport);

$message = Swift_Message::newInstance('Test Subject')
  ->setFrom(array('reservacionespalacev@gmail.com' => 'Palace Hotel, C.A.'))
  ->setTo(array('ramonlv93@gmail.com'))
  ->setBody('This is a test mail.');
  //$message->attach(Swift_Attachment::fromPath('bidule.pdf'));

$result = $mailer->send($message);
?>