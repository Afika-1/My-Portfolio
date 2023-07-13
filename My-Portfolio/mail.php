<?php
$name = $_POST['name'];
$email = $_POST['email'];
$project = $_POST['project'];
$message = $_POST['message'];
$to= "afikashwashwa@gmail.com";

$subject= "Mail from Portfolio";
$txt= "Name = ".$name . "\r\nEmail = " .$email . "\r\nProject= " . $project . " \r\nMessage = " .$message;

$headers = "From: " .$email;
if($email!=NULL){
    mail($to.$subject.$txt.$headers);
}

?>