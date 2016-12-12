<?php
session_start();
if (isset ($_SESSION['username'])){
    $username = $_SESSION['username'];
    include"header.php";
?>

<?php

$nombre = $_POST['nombre'];
$username= $_POST['username'];
$email = $_POST['email']; 
$telefono = $_POST['telefono'];

include "conexion.php";

$sql =("INSERT INTO tblEmpleados (Nombre, Email, Telefono,  Status)  VALUES  ('$nombre', '$email', '$telefono', '0') ");

$result=mysql_query($sql, $conexion);

        require("includes/class.phpmailer.php");
        include("includes/class.smtp.php");

        $mail = new PHPMailer();
        $mail->SMTPDebug = 1;
        $mail->PluginDir = "includes/";

        $mail->Host = "mail.telaiotests.com";
        $mail->IsSMTP();
        $mail->SMTPAuth = true;
        $mail->Username = "no-reply@telaiotests.com";
        $mail->Password = "HGJH7Wter5"; 
        $mail->Port = 26; 

        $mail->From = "no-reply@telaiotests.com";
        $mail->FromName = "Prueba";
        $mail->Subject = "Alta de usuario";
        $mail->AddAddress($email);

        
        $body  = "  
        <div style='color:#565656; font-size: 1.35em;'>  
            <strong>Hola</strong> $nombre, haz click en el siguiente botón para activar tu cuenta <br>  
        </div>
        <a href='http://169.53.62.228/~examen10/secciones/activar.php?email=$email' style='color:#ffffff;font-size: 14px;font-weight:bold;font-family:Helvetica,Arial,sans-serif;text-decoration:none;line-height:40px;width: 250px;text-align: center;border-radius: 10px;display:inline-block;background: #0C5197;'>Clic para Activar</a>
        ";

        $mail->Body = $body;
        $mail->AltBody = "Haz click en el siguiente botón";

        $mail->CharSet = 'UTF-8';
        $mail->Send();

if($result) 
{
echo "<div class='alert alert-success text-center'>
  <strong>Hecho!</strong> Un email ha sido enviado al usuario para activar la cuenta.<br>
  <div class='text-center'><button class='btn bth-success'><a href='sign_up.php'>Regresar</a></button></div>
</div>";
}
else
{
echo "error";
}

mysql_close($conexion);

?>

<?php

}

else
	{
		echo '
           
            <div class="alert alert-danger">
                Ha ocurrido un error, por favor inica sesión.
            </div>';
        
            include "../index.php"; 
		
	} 
?>
	

