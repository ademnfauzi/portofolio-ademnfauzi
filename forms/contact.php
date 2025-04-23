<?php

  require __DIR__ . '/vendor/autoload.php';
  use Resend\Resend;

  
  $receiving_email_address = 'ademnfauzi76@gmail.com';

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"]; 
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    // echo "Nama: " . htmlspecialchars($name) . "<br>";
    // echo "Email: " . htmlspecialchars($email) . "<br>";
    // echo "Subject: " . htmlspecialchars($subject) . "<br>";
    // echo "Message: " . htmlspecialchars($message);

    $resend = Resend::client('re_Ky6k7bSU_MjVDNMJKjNDicuVdjeU81iTC');

    $resend->emails->send([
      'from' => $email,
      'to' => $receiving_email_address,
      'subject' => $subject,
      'html' => $message
    ]);

  } else {
      echo "Invalid request method.";
  }
?>
