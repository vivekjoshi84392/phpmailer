Simple Example
<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

  $Correo = new PHPMailer();

  $Correo->IsSMTP();
  $Correo->SMTPAuth = true;
  $Correo->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
  $Correo->Host = "smtp.gmail.com";
  $Correo->Port = 587;
  $Correo->Username = "vivekjoshi84392@gmail.com";
  $Correo->Password = "#Vivek123";
  $Correo->SetFrom('vivekjoshi84392@gmail.com','De Yo');
  $Correo->FromName = "From";
  $Correo->AddAddress("vivekjoshicse@gmail.com");
  $Correo->Subject = "Prueba con PHPMailer";
  $Correo->Body = "<H3>Bienvenido! Esto Funciona!</H3>";
  $Correo->IsHTML (true);
  if (!$Correo->Send())
  {
    echo "Error: $Correo->ErrorInfo";
  }
  else
  {
    echo "Message Sent!";
  }
?>
