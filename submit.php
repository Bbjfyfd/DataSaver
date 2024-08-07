<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$file = 'messages.txt';
$content = "Name: $name\nEmail: $email\nMessage: $message\n\n";

file_put_contents($file, $content, FILE_APPEND);

echo "Thank you for contacting us, $name!";
?>
