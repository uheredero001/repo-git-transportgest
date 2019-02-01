<?php
    if (isset($_POST['viaje'])&&isset($_POST['carga7']))
    {
        $viaje=$_POST['viaje'];
        $carga7=$_POST['carga7'];

        $infoVieja=getViajePredeterminadoInfo($viaje);

        if(existViajePredeterminado($infoVieja[1],$infoVieja[2],$infoVieja[3],$infoVieja[4],$infoVieja[5],
                                    $infoVieja[6],$infoVieja[7],$carga7)>0)
        {
          echo "Ya existe un viaje identico en la bd.";
        }
        else{
          if(updateCarga7($viaje,$carga7)!==0){
            echo "Ha ocurrido algún error con la base de datos.";
          }
          else{
              echo "La carga7 del viaje ha sido actualizada correctamente.";
          }
        }
    }

?>
