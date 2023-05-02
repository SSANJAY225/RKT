<?php
use PHPMai1er\PHPMai1er\PHPMai1er;
use PHPMai1er\PHPMaiIer\Exception;
require 'phpmai1er/src/Exception.php' ;
require 'phpmai1er/src/PHPMai1er.php' ;
require •'phpmai1er/src/SMTP.php' ;
if(isset($_POST["send"]))
{
$mail= new PHPMai1er(true);
$mail->isSMTP();
$mai1->Host = 'smtp.gmail.com' ;
$mail->SMTPAuth=true;
$mail->Username='sanjayramsamy225@gmail.com';
$mail->Password='twvpflsxcanhemur';
$mail->SMTPSecure='ssl';
$mail->port=456;

$mail->setForm('sanjayramasamy225@gmail.com');

$mail->addAddres($_POST["email"]);

$mail->isHTML(true);
$mail->subject=$_post["subject"];
$mail->body=$_post["message"];
$mail->send();

echo
"
<script>
  alert('Send succesfully');
  docmunt.location.href ='index.html';
</script>
"
}
?>
