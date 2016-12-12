<?php
session_start();
if (isset ($_SESSION['username'])){
    $username = $_SESSION['username'];
    include"header.php";
?>
<header class="container-fluid">
     <div clas="row">
         <?php
         echo "<div class='col-xs-12 col-sm-6'><div class='logo'><img src='images/logo.png'/></div></div>";
         echo "<div class='col-xs-12 col-sm-6 mensaje_home'>
            Bienvenido $username <br>";
            $dias = array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sábado");
            $meses =array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto",
                          "Septiembre","Octubre","Noviembre","Diciembre");
         echo "Hoy es ".$dias[date('w')]." ".date('d')." de ".$meses[date('n')-1]. " del ".date('Y') ;
         echo "</div>";?>
      
         <div class="col-xs-12 menu">
            <div id='cssmenu'>
                <ul>
                   <li class='active'><a href='desktop.php'>Inicio</a></li>
                   <li ><a href='sign_up.php'>Alta</a></li>
                   <li><a href='ver_usuarios.php'>Consulta</a></li>
                   <li class="cerrar"><a  href='cerrar.php'>Cerrar Sesión</a></li>
                </ul>
            </div> 
        </div>
      </div>
</header>


<div class="main container-fluid">
        <div class="row">
             <div class="col-xs-12">
                <h1 class="text-center">Hola Mundo</h1>
             </div>  
        </div>
</div>  
    
<footer>
      
</footer>
    
</body>
</html>

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
	