<?php
    if (isset($_POST['vehiculo']))
    {
        $matricula=$_POST['vehiculo'];

        if(existVehicle($matricul)>0)
        {
          $info=getVehicleInfo($matricula);
          if(updateEnCirculacion($info[0],"Si")==0)
          {
            echo "El vehiculo ".$matricula." ha sido dado de alta con éxito.";
          }
          else {
            echo "Ha ocurrido algún error con la base de datos.";
          }
        }
        else {
           echo "El vehiculo ". $matricula." no existe.";
        }
    }

?>
