<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Get the form data
  $name = $_POST["name"];
  $email = $_POST["email"];
  $subject = $_POST["subject"];
  $message = $_POST["message"];

  // Perform any necessary validation or processing of the form data

  // Send an email with the form data
  $to = "jeremy.ivy@gmail.com";
  $subject = "New Form Submission";
  $body = "Name: " . $name . "\n";
  $body .= "Email: " . $email . "\n";
  $body .= "Subject: " . $subject . "\n";
  $body .= "Message: " . $message . "\n";

  if (mail($to, $subject, $body)) {
    // Email sent successfully
    echo "success";
  } else {
    // Error sending email
    echo "error";
  }
}
?>
