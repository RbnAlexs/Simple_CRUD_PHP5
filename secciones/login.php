<?php
$conexion = mysql_connect("localhost", "examen10_ruben","FF)k8Tooob1#");
mysql_select_db("examen10_prueba", $conexion);

if (isset($_POST['loginform'])) {
    session_start();
    $username = trim(mysql_escape_string($_POST['username']));
    $passwords = trim(mysql_escape_string($_POST['password']));
    $password = md5($passwords); 
    $query = "SELECT * FROM tblUsuarios WHERE (Username='$username' AND password='$password') AND Status = 1";
     $resultado= mysql_query($query,$conexion );
    if(!$resultado){ 
        echo '<div class="error">No se puede acceder al sistema, intentalo en un momento. </div>';
    }
    if ($fila = mysql_fetch_row($resultado)){
        session_start();
        $_SESSION['username'] = $username;
        $sesion_login = true;
        header("Location: desktop.php");
    }
    
     else { 
            echo '
            
            <div class="alert alert-danger">
                Los datos no son correctos.
            </div>';
            include "index.php"; 
    }

  

} 
?>
