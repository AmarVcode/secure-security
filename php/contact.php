<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $subject = $_POST["subject"];
  $message = $_POST["message"];

  // recipient email address
  $to = "amarvcode@gmail.com";

  // Compose the email message
  $messageBody = "Name: $name\n";
  $messageBody .= "Email: $email\n";
  $messageBody .= "Message:\n$message";

  // Set additional headers
  $headers = "From: $email\r\n";
  $headers .= "Reply-To: $email\r\n";

  // Use the mail() function to send the email
  if (mail($to, $subject, $messageBody, $headers)) {
    echo "Email sent successfully!";
  } else {
    echo "Failed to send email. Please try again later.";
  }
}
?>
