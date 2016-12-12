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
            $meses =array("Enero","Febrero",
                          "Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
         echo "Hoy es ".$dias[date('w')]." ".date('d')." de ".$meses[date('n')-1]. " del ".date('Y') ;
         echo "</div>";?>
      
         <div class="col-xs-12 menu">
            <div id='cssmenu'>
                <ul>
                   <li><a href='desktop.php'>Inicio</a></li>
                   <li class='active'><a href='sign_up.php'>Alta</a></li>
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
          <form class="form-horizontal formulario_registro" class="formulario" method="post" action="crear.php" enctype="multipart/form-data">    
                    
                <div class="form-group">
                    <label class="col-md-4 control-label" >Nombre</label>  
                    <div class="col-md-4">
                        <input id="textinput" name="nombre" type="text" placeholder="Nombre" class="form-control input-md" required="">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label" for="textinput">Username</label>  
                    <div class="col-md-4">
                    <input id="textinput" name="username" type="text" placeholder="Username" class="form-control input-md" required="">
                    </div>
                </div>


                <div class="form-group">
                    <label class="col-md-4 control-label" for="email">Email</label>  
                    <div class="col-md-4">
                    <input id="email" name="email" type="email" placeholder="Email" class="form-control input-md" required="">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-4 control-label" for="telefono">Telefono</label>
                    <div class="col-md-4">                     
                    <input  name="telefono" type="text" placeholder="Telefono" type="number" class="form-control input-md" required="">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-4 control-label" for="enviar"></label>
                    <div class="col-md-4">
                    <input id="submit" type="submit" name="submitform" value="Registrar" class="btn btn-success">
                    </div>
                </div>
                    
                </form>
        </div> 
    </div>      
</div>


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