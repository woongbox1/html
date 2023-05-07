<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    $to = "woongbox1@naver.com";
    $subject = "New message from your website";
    $body = "Name: $name\nEmail: $email\nMessage: $message";
    $headers = "From: $email";
    if (mail($to, $subject, $body, $headers)) {
        echo "Thank you for your message!";
    } else {
        echo "Oops! Something went wrong.";
    }
}
?>
