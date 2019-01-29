<?php
    if (isset($_POST['vehiculo'])&&isset($_POST['tipo']))
    {
        $vehiculo=$_POST['vehiculo'];
        $tipo=$_POST['tipo'];
        if(existVehicle($vehiculo)>0)
        {
          $info=getVehicleInfo($vehiculo);
          if(updateTipo($info[0],$tipo)==0)
          {
            echo "El tipo del vehiculo ".$vehiculo." ha sido actualizado correctamente.";
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
