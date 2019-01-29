<?php
    if (isset($_POST['trabajador'])&&isset($_POST['dni']))
    {
        $trabajador=$_POST['trabajador'];
        $dni=$_POST['dni'];
        if(existWorker($trabajador)>0)
        {
          $info=getWorkerInfo($trabajador);
          if(updateDni($info[0],$dni)==0)
          {
            echo "El dni del trabajador ".$trabajador." ha sido dado actualizado correctamente.";
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
