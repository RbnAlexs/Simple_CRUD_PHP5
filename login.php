<?php
define("DB_SERVER", "localhost");
define("DB_USER", "root");
define("DB_PASSWORD", "");
define("DB_DATABASE", "examen10_ruben");

$conexion = mysqli_connect(DB_SERVER , DB_USER, DB_PASSWORD, DB_DATABASE);
mysqli_select_db($conexion, "examen10_ruben"); 
if (isset($_POST['loginform'])) {
    session_start();
    $username = trim(mysqli_real_escape_string ($conexion, $_POST['username']));
    $passwords = trim(mysqli_real_escape_string( $conexion, $_POST['password']));
    $password = md5($passwords); 
    $query = "SELECT * FROM tblUsuarios WHERE (Username='$username' AND password='$password') AND Status = 1";
    $resultado= mysqli_query($query,$conexion );
   if (mysqli_connect_errno());
        {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }
    if ($fila = mysqli_fetch_row($resultado)){
        session_start();
        $_SESSION['username'] = $username;
        $sesion_login = true;
        header("Location: secciones/desktop.php");
    }
    
     else { 
            echo $password;
            echo '
            
            <div class="alert alert-danger">
                Los datos no son correctos.
            </div>';
            include "index.php"; 
    }

  

} 
?>
