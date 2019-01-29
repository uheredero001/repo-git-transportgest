<?php
    if (isset($_POST['vehiculo'])&&isset($_POST['matriculacion']))
    {
        $vehiculo=$_POST['vehiculo'];
        $matriculacion=$_POST['matriculacion'];
        if(existVehicle($vehiculo)>0)
        {
          $info=getVehicleInfo($vehiculo);
          if(updateMatriculacion($info[0],$matriculacion)==0)
          {
            echo "La matriculacion del vehiculo ".$vehiculo." ha sido actualizada correctamente.";
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
