<?php 

    session_start();
    if (isset ($_SESSION['username'])){
    $username = $_SESSION['username'];
        $ID = $_GET['ID']; 
        include "conexion.php";
?>

<?php
    $ID = $_POST['id'];
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono']; 

   
    $sql= ("UPDATE tblEmpleados SET Nombre = '$nombre', Email = '$email', Telefono = '$telefono' WHERE IdEmpleado ='$ID' ");


$result=mysql_query($sql, $conexion);

if($result) 
{
echo "<div class='alert alert-success'>
  <strong>Hecho!</strong> El usuario ha actualizado con exito.
</div>";
include "ver_usuarios.php";   
}
else
{
echo "error";
}

?>

<?php } ?>