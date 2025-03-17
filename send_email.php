<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $to = "your-email@example.com";  // Ваш email
    $subject = "Новое сообщение с сайта";
    $body = "Имя: $name\nEmail: $email\nСообщение: $message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "Сообщение отправлено!";
    } else {
        echo "Ошибка при отправке сообщения.";
    }
}
?>