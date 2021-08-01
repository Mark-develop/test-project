<?php

require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';


$email = $_POST['emailInp'];
$phone = $_POST['phoneInp'];
$name = $_POST['nameInp'];



>