<?php
    if (isset($_POST['viaje'])&&isset($_POST['carga3']))
    {
        $viaje=$_POST['viaje'];
        $carga3=$_POST['carga3'];

        $infoVieja=getViajePredeterminadoInfo($viaje);

        if(existViajePredeterminado($infoVieja[1],$infoVieja[2],$infoVieja[3],$carga3,$infoVieja[5],
                                    $infoVieja[6],$infoVieja[7],$infoVieja[8])>0)
        {
          echo "Ya existe un viaje identico en la bd.";
        }
        else{
          if(updateCarga3($viaje,$carga3)!==0){
            echo "Ha ocurrido algún error con la base de datos.";
          }
          else{
              echo "La carga3 del viaje ha sido actualizada correctamente.";
          }
        }
    }

?>
