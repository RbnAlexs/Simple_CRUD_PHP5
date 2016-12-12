<?php
$conexion = mysql_connect("localhost", "examen10_ruben"," root");
mysql_select_db("examen10_prueba", $conexion);
if(!$conexion) 
        {
            echo "No se ha podido conectar con el servidor" . mysql_error();
        }
        else
        {
            echo "Hemos conectado al servidor <br />";
        }
$base_datos = mysql_select_db("examen10_prueba", $conexion);

 if(!$base_datos)
        {
            echo "Hay un problema al seleccionar la base de datos" . mysql_error();
        }
        else
        {
            echo "Conectado correctamente a la base de datos <br />";
        }

?>