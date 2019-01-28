<?php
    if (isset($_POST['tipo-baja'])&&isset($_POST['trabajador']))
    {
        $trabajador=$_POST['trabajador'];
        $tipo=$_POST['tipo-baja'];

        if(existWorker($trabajador)>0)
        {
          $info=getWorkerInfo($trabajador);
          if(updateEstado($info[0],$tipo)==0)
          {
            echo "El trabajador ".$trabajador." ha sido dado de baja con éxito.";
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
