<?php
include "conexion.php";

    $email = trim(mysql_escape_string($_GET['email']));


$sql =(" UPDATE tblEmpleados SET Status='1' WHERE Email ='".$email."' ");

$result=mysql_query($sql, $conexion);

if($result) 
{
 echo '
            
            <div class="alert alert-success">
                Se ha activado tu cuenta correctamente.
            </div>';
            include "../index.php"; 

}
else
{
  echo '
            
            <div class="alert alert-danger">
                Ha ocurrido un error, vuelve a intentarlo.
            </div>';
            include "../index.php"; 
}


?>