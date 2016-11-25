<?php  
/////////////////////////////////////////////////////////////////////////////// 
/// 
function sendMail ($destinataire, $Subject, $Body, $AltBody) {
    require 'vendor/autoload.php';

    $mail = new PHPMailer();

    $mail->isSMTP();                                      	
    $mail->Host = 'smtp.gmail.com';  						
    $mail->SMTPAuth = true;                               	// Active l'autentification SMTP
    $mail->Username = 'wf3.mailer@gmail.com';             	// SMTP username
    $mail->Password = 'password';                   		// SMTP password
    $mail->SMTPSecure = 'ssl';                            	// TLS Mode
    $mail->Port = 587;                                    	// Port TCP à utiliser

   

    $mail->setFrom('wf3.mailer@gmail.com', 'mailer.php', false);
    $mail->addAddress($destinataire, 'Victor Von Frankenstein');     		// Ajouter un destinataire
   /* $mail->addAddress('jaffarn@example.com');               	// Le nom est optionnel
    $mail->addReplyTo('contact@monsite.fr', 'Information');
    $mail->addCC('cc@example.com');
    $mail->addBCC('bcc@example.com');*/

    $mail->isHTML(true);                                  	 // Set email format to HTML

    $mail->Subject = $Subject;
    $mail->Body    = $Body;
    $mail->AltBody = $AltBody;

    if(!$mail->send()) {
        echo 'Le message n\'a pas pu être envoyé';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        echo 'Le message a été envoyé';
    }
}/* end sendMail*/


?>