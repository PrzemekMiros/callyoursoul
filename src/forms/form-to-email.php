<?php
  if ( $_POST ) {

    $recepient = 'kontakt@futurewebstudio.pl'; // your e-mail
    $sitename  = 'Przemek'; // your site name
    $subject   = "Wiadomość ze strony \"$sitename\""; // subject template

    $name  = trim( $_POST['visitor_name'] );
    $email = trim( $_POST['visitor_email'] );
    $phone = trim( $_POST['visitor_phone'] );
    $budget = trim( $_POST['visitor_budget'] );
    $msg = trim( $_POST['visitor_msg'] );
    $msg2   = trim( $_POST['visitor_msg2'] );

    $message = "
    -------------------<br><br>
    Imię: $name <br>
    Email: $email <br>
    Telefon: $phone <br>
    Budżet: $budget <br>
    Wiadomość: $msg <br><br>
    $msg2
    <br><br>-------------------
    ";

    mail( 
      $recepient, $subject, $message, 
      "From: $name <$email>" . "\r\n" . "Reply-To: $email" . "\r\n" . 'X-Mailer: PHP/' . phpversion() . "\r\n" . 'Content-type: text/html; charset="utf-8"' );

  }
