<?php 

    session_start();
    if (isset ($_SESSION['username'])){
    $username = $_SESSION['username'];
        $ID = $_GET['ID']; 
        include "conexion.php";
?>

<?php

   
    $sql= ("UPDATE tblEmpleados SET Status = '0' WHERE IdEmpleado ='$ID' ");


$result=mysql_query($sql, $conexion);

if($result) 
{
echo "<div class='alert alert-success'>
  <strong>Hecho!</strong> El usuario ha sido dado de bajo con exito.
</div>";
include "ver_usuarios.php"; 
 

}
else
{
           echo '
            
            <div class="alert alert-danger">
                No se ha podido borrar al usuario.
            </div>';
            include "ver_usuarios.php"; 
}
/*


    $query_verify_email = "SELECT * FROM tblEmpleados WHERE email ='$email' and Status = 1";
    $result=mysql_query($sql, $conexion);

    if (mysql_num_rows($result_verify_email) == 1) {
        echo '<div class="success">Tu cuenta ya existe Da clic <a href="login.html">aquí</a></div>';
    }
    else {
        if (isset($email)) {

        }
    mysql_close($conexion);
    }
*/

?>

<?php } ?>