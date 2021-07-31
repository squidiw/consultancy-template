<?php

// Replace this with your own email address
$to = 'example@gmail.com';

function url(){
  return sprintf(
    "%s://%s",
    isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',
    $_SERVER['SERVER_NAME']
  );
}

$name_error = $email_error = $phone_error = $subject_error = $message_error = $success = '';

if($_POST) {


   $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
   if(empty($name)){
      $name_error = 'Please enter your name';
   }

   $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
   if(empty($email) || (!filter_var($email, FILTER_VALIDATE_EMAIL))){
      $email_error = 'Please enter email';
   }

   $phone = filter_var($_POST['phone'], FILTER_SANITIZE_STRING);
   if(empty($phone) || (!preg_match("/^(d[\s-]?)?[\(\[s-]{0,2}?\d{3}[\)\]\s-]{0,2}?\d{3}[\s-]?\d{4}$/i", $phone))){
      $phone_error = 'Please enter phone number';
   }

   $subject = filter_var($_POST['subject'], FILTER_SANITIZE_STRING);
   if(empty($subject)){
      $subject_error = 'Please enter message subject';
   }

   $form_message = filter_var($_POST['message'], FILTER_SANITIZE_STRING);
   if(empty($form_message)){
      $message_error = 'Please enter your message';
   }

   // Set Message

   if( $name_error == '' and $email_error == '' and $phone_error == '' and $subject_error == '' and $form_message == ''){

      unset($_POST['submit']);

      $message .= "Email from: " . $name . "<br />";
      $message .= "Email address: " . $email . "<br />";
      $message .= "Phone: " . $phone . "<br />";
      $message .= "Message Subject: " . $subject . "<br />";
      $message .= "Message: <br />";
      $message .= nl2br($form_message);
      $message .= "<br /> ----- <br /> This email was sent from your site " . url() . " contact form. <br />";

       // Set From: header 
      $from =  $name . " <" . $email . ">";
   
      // Email Headers
      $headers = "From: " . $from . "\r\n";
      $headers .= "Reply-To: ". $email . "\r\n";
       $headers .= "MIME-Version: 1.0\r\n";
      $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
   
      ini_set("sendmail_from", $to); // for windows server
      $mail = mail($to, $subject, $message, $headers);
   
      if ($mail) { 
         $success = "Message sent, I'll be in touch shortly!";
         $name = $email = $phone = $subject = $message = '';
       }
      else { echo "Something went wrong. Please try again."; }
   }


}

?>