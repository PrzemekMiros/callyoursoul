<?php
  if ( $_POST ) {

    $recepient = 'kontakt@futurewebstudio.pl'; // your e-mail
    $sitename  = 'Call Your Soul'; // your site name
    $subject   = "New contact from \"$sitename\""; // subject template

    $name  = trim( $_POST['visitor_name'] );
    $email = trim( $_POST['visitor_email'] );
    $msg   = trim( $_POST['visitor_msg'] );
    $honey = trim( $_POST['visitor_surname'] );

    $message = "
    -------------------<br><br>
    Visitor name: $name <br>
    Visitor email: $email <br><br>
    $msg
    <br><br>-------------------
    ";

 
    if( ! empty( $honey ) ) {
      return;
    }
      else {
      mail( $recepient, $subject, $message, "From: $name <$email>" . "\r\n" . "Reply-To: $email" . "\r\n" . 'X-Mailer: PHP/' . phpversion() . "\r\n" . 'Content-type: text/html; charset="utf-8"' );
    }
  }
