<?php

$recepient = "ufa.courses@gmail.com"; 
$sitename = ""; 

$name = trim($_POST["name"]); 
$email = trim($_POST["email"]); 
$message = trim($_POST["message"]); 
$cours = trim($_POST["cours"]); 
$text = trim($_POST["text"]); 
$message =  "Имя: $name \nПочта: $email \nСообщение: $message "; 

$pagetitle = "Новая заявка с сайта \"$sitename\"";  
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");
?>
