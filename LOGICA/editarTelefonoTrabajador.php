<?php
    if (isset($_POST['trabajador'])&&isset($_POST['telefono']))
    {
        $trabajador=$_POST['trabajador'];
        $telefono=$_POST['telefono'];
        if(existWorker($trabajador)>0)
        {
          $info=getWorkerInfo($trabajador);
          if(updateTelefono($info[0],$telefono)==0)
          {
            echo "El telefono del trabajador ".$trabajador." ha sido dado actualizado correctamente.";
          }
          else {
            echo "Ha ocurrido algún error con la base de datos.";
          }
        }
        else {
           echo "El trabajador ". $trabajador." no existe.";
        }
    }

?>
