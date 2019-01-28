<?php
    if (isset($_POST['trabajador']))
    {
        $trabajador=$_POST['trabajador'];

        if(existWorker($trabajador)>0)
        {
          $info=getWorkerInfo($trabajador);
          if(updateEstado($info[0],"Alta Laboral")==0)
          {
            echo "El trabajador ".$trabajador." ha sido dado de alta con éxito.";
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
