<?php
session_start();
if (isset ($_SESSION['username'])){
    $username = $_SESSION['username'];
    include"header.php";
    include "conexion.php";
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
                   <li><a href='desktop.php'>Inicio</a></li>
                   <li><a href='sign_up.php'>Alta</a></li>
                   <li class='active'><a href='ver_usuarios.php'>Consulta</a></li>
                   <li class="cerrar"><a  href='cerrar.php'>Cerrar Sesión</a></li>
                </ul>
            </div> 
        </div>
      </div>
</header>



<div class="main container-fluid">
        <div class="row">
             <div class="col-xs-12">
<script type="text/javascript">
function confirm_delete() {
  return confirm('Estas seguro?');
}
</script>
<?php
                    $consulta_mysql = "SELECT IdEmpleado, Nombre, Email, Telefono FROM tblEmpleados WHERE Status = '1' ";  
                    $resultado_consulta_mysql=mysql_query($consulta_mysql,$conexion); 
                            echo "<div class=''>"; //begin forms
                              echo "<div class='responsive-table'>";
                                echo "<table class='col-md-12 table-bordered table-striped table-condensed cf'>"; 
                                    echo "<tread class='cf '>";    
                                        echo "<tr class='head_table'>";
                                            echo "<th>Nombre</th>";
                                            echo "<th>Email</th>";
                                            echo "<th>Telefono</th>";
                                            echo "<th></th>";
                                            echo "<th></th>";
                                        echo "</tr>"; 
                                    echo "</tread>";
                                echo "<tbody>";
                    while($fila=mysql_fetch_array($resultado_consulta_mysql)){
                                            echo "
                                            <tr>
                                            <th>
                                                    <a href='editar_usuario.php?ID=".$fila['IdEmpleado']."' >".$fila['Nombre']."</a>
                                            </th>
                                            <th>
                                                ".$fila['Email']."
                                            </th>
                                            <th>
                                            ".$fila['Telefono']."
                                            </th>
                                            <th>
                                                <a href='editar_usuario.php?ID=".$fila['IdEmpleado']."' title='".$fila['Nombre']."' 
                                                class='btn btn-sm btn-warning'>
                                                    Editar
                                                </a>
                                            </th>
                                            <th>
                                             <a href='borrar_usuario.php?ID=".$fila['IdEmpleado']."'  class=' btn btn-sm btn-danger'
                                             onclick='return confirm_delete()'>
                                                Baja
                                             </a>
                                            </th>
                                            </tr>
                                            ";
                                            }

                                echo "</tbody>";
                                echo "</table>";
                            echo "</div>";
                            echo "</div>"; //end form

?>
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