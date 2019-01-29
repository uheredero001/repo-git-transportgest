<?php
    if (isset($_POST['vehiculo'])&&isset($_POST['capacidad']))
    {
        $vehiculo=$_POST['vehiculo'];
        $capacidad=$_POST['capacidad'];
        if(existVehicle($vehiculo)>0)
        {
          $info=getVehicleInfo($vehiculo);
          if(updateCapacidad($info[0],$capacidad)==0)
          {
            echo "La capacidad del vehiculo ".$vehiculo." ha sido actualizada correctamente.";
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
