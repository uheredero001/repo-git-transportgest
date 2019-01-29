<?php
    if (isset($_POST['vehiculo'])&&isset($_POST['email']))
    {
        $vehiculo=$_POST['vehiculo'];
        $email=$_POST['email'];
        if(existVehicle($vehiculo)>0)
        {
          $info=getVehicleInfo($vehiculo);
          if(updateEmail($info[0],$email)==0)
          {
            echo "El email del vehiculo ".$vehiculo." ha sido actualizado correctamente.";
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
