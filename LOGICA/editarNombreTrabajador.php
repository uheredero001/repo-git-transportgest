<?php
    if (isset($_POST['trabajador'])&&isset($_POST['nombre']))
    {
        $trabajador=$_POST['trabajador'];
        $nombre=$_POST['nombre'];
        if(existWorker($trabajador)>0)
        {
          $info=getWorkerInfo($trabajador);
          if(updateNombre($info[0],$nombre)==0)
          {
            echo "El nombre del trabajador ".$trabajador." ha sido dado actualizado correctamente.";
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
