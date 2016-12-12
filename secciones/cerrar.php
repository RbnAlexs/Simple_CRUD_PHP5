		
<?php 
ini_set('display_errors', 'Off');
ini_set('display_startup_errors', 'Off');
error_reporting(0);

	session_start(); 

	  
	session_unset();
	session_destroy();  

	/*if(session_destroy)
	  {
		echo "Sesion cerrada exitosamente";
	  }
	else
	  {
		echo "Error al cerrar sesion";
	  }
	  
	  
else
	{
		echo "No estas registrado";
	} */

	echo '
           
            <div class="alert alert-success">
                Se ha cerrado sesion con exito.
            </div>';
        
            include "../index.php"; 
		
	

	
?>