<?php
    if (isset($_POST['vehiculo']))
    {
        $matricula=$_POST['vehiculo'];
        if(existVehicle($matricula)>0)
        {
          $info=getVehicleInfo($matricula);
          if(updateEnCirculacion($info[0],"No")==0)
          {
            echo "El vehiculo ".$matricula." ha sido dado de baja con éxito.";
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
