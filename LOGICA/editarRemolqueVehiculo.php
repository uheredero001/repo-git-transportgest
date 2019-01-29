<?php
    if (isset($_POST['vehiculo'])&&isset($_POST['remolque']))
    {
        $vehiculo=$_POST['vehiculo'];
        $remolque=$_POST['remolque'];
        if(existVehicle($vehiculo)>0)
        {
          $info=getVehicleInfo($vehiculo);
          if(updateRemolque($info[0],$remolque)==0)
          {
            echo "El remolque del vehiculo ".$vehiculo." ha sido actualizado correctamente.";
          }
          else {
            echo "Ha ocurrido algún error con la base de datos.";
          }
        }
        else {
           echo "El vehiculo ". $vehiculo." no existe.";
        }
    }

?>
