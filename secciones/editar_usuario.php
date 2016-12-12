<?php 

    session_start();
    if (isset ($_SESSION['username'])){
    $username = $_SESSION['username'];
        $ID = $_GET['ID']; 
        include "conexion.php";
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
            <div class="table-responsive">
                <table class="table">
                    <thead>
                      <tr>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th>Telefono</th>
                      </tr>
                    </thead>
                    <tbody>
                    <div class="main container-fluid">
                            <div class="row">
                                 <div class="col-xs-12">
                    <script type="text/javascript">
                    function confirm_save() {
                      return confirm('Estas seguro?');
                    }
                    </script>
  
        <?php

   
        $sql = "SELECT  idEmpleado, Nombre, Email, Telefono FROM tblEmpleados WHERE IdEmpleado = '$ID'"; 
        $result = mysql_query($sql,$conexion);
                if ($row = mysql_fetch_row($result)){
                echo "  
                <form action='actualizar_usuario.php'method='post' class='col-xs-12'>
                
                <textarea style='display:none;' name=id>$row[0]</textarea>
               <th class='col-xs-12 col-sm-3'><input name='nombre' value='$row[1]' class='form-control'></th>
               <th class='col-xs-12 col-sm-3'><input class='form-control' name='email' type='email' value='$row[2] '></th>              
               <th class='col-xs-12 col-sm-3'><input type='number' name='telefono' class='form-control' value='$row[3]'></th>  
                <th><button type='submit' class='btn btn-success' onclick='return confirm_save()'> Guardar</button> </th>

               </form>
                 
                ";
                }

$result=mysql_query($sql, $conexion);

/*if($result) 
{
echo "Success";

}
else
{
echo "error";
}
*/

?>
          </tbody>
      </table>
            </div>
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