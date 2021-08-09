<?php

$message = $_POST["message"];
$email = $_POST["email"];
$subject = $_POST["subject"];
$name = $_POST["name"];

echo $message;

mail($email, $name, $message);
