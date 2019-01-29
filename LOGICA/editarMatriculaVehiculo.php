<?php
    if (isset($_POST['vehiculo'])&&isset($_POST['matricula']))
    {
        $vehiculo=$_POST['vehiculo'];
        $matricula=$_POST['matricula'];
        if(existVehicle($vehiculo)>0)
        {
          if(existVehicle($matricula)>0)
          {
            echo "El vehiculo ". $matricula." ya existe en la base de datos.";
          }
          else {
            $info=getVehicleInfo($vehiculo);
            if(updateMatricula($info[0],$matricula)==0)
            {
              echo "La matricula del vehiculo ".$vehiculo." ha sido actualizada correctamente.";
            }
            else {
              echo "Ha ocurrido algún error con la base de datos.";
            }
          }
        }
        else {
           echo "El vehiculo ". $vehiculo." no existe.";
        }
    }

?>
