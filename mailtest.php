<?php
$subject = "Sending Email Using PHP Mailer";
$body ='<p>Congratulations!</p>';
$body .='<p>You have successfully received an email from
<a href="https://www.allphptricks.com/">AllPHPTricks.com</a>.</p>';
// Enter Your Email Address Here To Receive Email
$email_to = "forgot@teamglobal.site";

$email_from = "test@teamglobal.site"; // Enter Sender Email
$sender_name = "AllPHPTricks"; // Enter Sender Name
require("PHPMailer/PHPMailerAutoload.php");
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->Host = "112-210-226-158.cprapid.com"; // Enter Your Host/Mail Server
$mail->SMTPAuth = true;
$mail->Username = "test@teamglobal.site"; // Enter Sender Email
$mail->Password = "P@ssw0rdP@ssw0rd";
$mail->SMTPOptions = array(
'ssl' => array(
'verify_peer' => false,
'verify_peer_name' => false,
'allow_self_signed' => true
)
);
//If SMTP requires TLS encryption then remove comment from below
$mail->SMTPSecure = "ssl";
$mail->SMTPDebug = 3;
$mail->Port = 465;
$mail->IsHTML(true);
$mail->From = $email_from;
$mail->FromName = $sender_name;
$mail->Sender = $email_from; // indicates ReturnPath header
$mail->AddReplyTo($email_from, "No Reply"); // indicates ReplyTo headers
$mail->Subject = $subject;
$mail->Body = $body;
$mail->AddAddress($email_to);
// If you know receiver name use following
//$mail->AddAddress($email_to, "Recepient Name");
// To send CC remove comment from below
//$mail->AddCC('username@email.com', "Recepient Name");
// To send attachment remove comment from below
//$mail->AddAttachment('files/readme.txt');
/*
Please note file must be available on your
host to be attached with this email.
*/

if (!$mail->Send()){
    echo "Mailer Error: " . $mail->ErrorInfo;
    }else{
    echo "<div style='color:#FF0000; font-size:20px; font-weight:bold;'>
    An email has been sent to your email address.</div>";
}
?>
