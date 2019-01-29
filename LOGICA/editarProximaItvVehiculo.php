<?php
    if (isset($_POST['vehiculo'])&&isset($_POST['proximaItv']))
    {
        $vehiculo=$_POST['vehiculo'];
        $proximaitv=$_POST['proximaItv'];
        if(existVehicle($vehiculo)>0)
        {
          $info=getVehicleInfo($vehiculo);
          if(updateProximaItv($info[0],$proximaitv)==0)
          {
            echo "La proxima itv del vehiculo ".$vehiculo." ha sido actualizada correctamente.";
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
