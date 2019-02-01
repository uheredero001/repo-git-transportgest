<?php
    if (isset($_POST['viaje'])&&isset($_POST['carga6']))
    {
        $viaje=$_POST['viaje'];
        $carga6=$_POST['carga6'];

        $infoVieja=getViajePredeterminadoInfo($viaje);

        if(existViajePredeterminado($infoVieja[1],$infoVieja[2],$infoVieja[3],$infoVieja[4],$infoVieja[5],
                                    $infoVieja[6],$carga6,$infoVieja[8])>0)
        {
          echo "Ya existe un viaje identico en la bd.";
        }
        else{
          if(updateCarga6($viaje,$carga6)!==0){
            echo "Ha ocurrido algún error con la base de datos.";
          }
          else{
              echo "La carga6 del viaje ha sido actualizada correctamente.";
          }
        }
    }

?>
