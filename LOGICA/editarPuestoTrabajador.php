<?php
    if (isset($_POST['trabajador'])&&isset($_POST['puesto']))
    {
        $trabajador=$_POST['trabajador'];
        $puesto=$_POST['puesto'];
        if(existWorker($trabajador)>0)
        {
          $info=getWorkerInfo($trabajador);
          if(updatePuesto($info[0],$puesto)==0)
          {
            echo "El puesto del trabajador ".$trabajador." ha sido dado actualizado correctamente.";
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
