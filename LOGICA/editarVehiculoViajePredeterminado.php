<?php
    if (isset($_POST['viaje'])&&isset($_POST['vehiculo']))
    {
        $viaje=$_POST['viaje'];
        $vehiculo=$_POST['vehiculo'];

        $infoVieja=getViajePredeterminadoInfo($viaje);

        if(existViajePredeterminado($vehiculo,$infoVieja[2],$infoVieja[3],$infoVieja[4],$infoVieja[5],
                                    $infoVieja[6],$infoVieja[7],$infoVieja[8])>0)
        {
          echo "Ya existe un viaje identico en la bd.";
        }
        else{
          if(updateVehiculo($viaje,$vehiculo)!==0){
            echo "Ha ocurrido algún error con la base de datos.";
          }
          else{
              echo "El vehiculo del viaje ha sido actualizado correctamente.";
          }
        }
    }

?>
