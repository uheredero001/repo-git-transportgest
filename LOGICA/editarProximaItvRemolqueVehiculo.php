<?php
    if (isset($_POST['vehiculo'])&&isset($_POST['proximaitvremolque']))
    {
        $vehiculo=$_POST['vehiculo'];
        $proximaitvremolque=$_POST['proximaitvremolque'];
        if(existVehicle($vehiculo)>0)
        {
          $info=getVehicleInfo($vehiculo);
          if(updateProximaItvRemolque($info[0],$proximaitvremolque)==0)
          {
            echo "La proxima itv del remolque del vehiculo ".$vehiculo." ha sido actualizada correctamente.";
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
