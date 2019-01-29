<?php
    if (isset($_POST['vehiculo'])&&isset($_POST['telefono']))
    {
        $vehiculo=$_POST['vehiculo'];
        $telefono=$_POST['telefono'];
        if(existVehicle($vehiculo)>0)
        {
          $info=getVehicleInfo($vehiculo);
          if(updateTelefono($info[0],$telefono)==0)
          {
            echo "El telefono del vehiculo ".$vehiculo." ha sido actualizado correctamente.";
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
