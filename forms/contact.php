<?php
  /**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */

  // Replace contact@example.com with your real receiving email address


if (isset($_POST['submit'])) {

  $receiving_email_address = 'rahulkishorlohar@gmail.com';
  $from_name = $_POST['name'];
  $from_email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['Message'];
  $headers = "Form: ".$email;

  if (mail($receiving_email_address, $from_name, $subject, $message , $headers)){
    echo "message sent successful";
  }
  else {
  echo "Error: please try again.";
  }
}

?>
