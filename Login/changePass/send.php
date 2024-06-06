<?php
session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if (isset($_POST['send'])) {
    $mail = new PHPMailer(true);

    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'kurtdebelen431@gmail.com';
    $mail->Password = 'uqjgkoibyglrucph';
    $mail->SMTPSecure = 'tls'; // Use TLS encryption
    $mail->Port = 587; // Port for TLS (SSL: 465, TLS/STARTTLS: 587)

    $mail->setFrom('kurtdebelen431@gmail.com');
    $mail->addAddress($_POST["email"]); // Remove single quotes
    $mail->isHTML(true);
    $mail->Subject = 'Change Password';
    $mail->Body = 'http://localhost/login/changePass/indexC.php'; // Change to your actual email content
    $mail->send();

    $_SESSION["cEmail"] = $_POST["email"];

    echo "
    <script>
        document.location.href = 'indexS.php';
    </script>
    ";
    $_SESSION["sent"] = "Check your email!";
}