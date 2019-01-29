<?php
    if (isset($_POST['trabajador'])&&isset($_POST['apellidos']))
    {
        $trabajador=$_POST['trabajador'];
        $apellidos=$_POST['apellidos'];
        if(existWorker($trabajador)>0)
        {
          $info=getWorkerInfo($trabajador);
          if(updateApellidos($info[0],$apellidos)==0)
          {
            echo "Los apellidos del trabajador ".$trabajador." han sido dado actualizados correctamente.";
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
