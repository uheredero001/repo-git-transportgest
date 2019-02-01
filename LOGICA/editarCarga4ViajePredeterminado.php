<?php
    if (isset($_POST['viaje'])&&isset($_POST['carga4']))
    {
        $viaje=$_POST['viaje'];
        $carga4=$_POST['carga4'];

        $infoVieja=getViajePredeterminadoInfo($viaje);

        if(existViajePredeterminado($infoVieja[1],$infoVieja[2],$infoVieja[3],$infoVieja[4],$carga4,
                                    $infoVieja[6],$infoVieja[7],$infoVieja[8])>0)
        {
          echo "Ya existe un viaje identico en la bd.";
        }
        else{
          if(updateCarga4($viaje,$carga4)!==0){
            echo "Ha ocurrido algún error con la base de datos.";
          }
          else{
              echo "La carga4 del viaje ha sido actualizada correctamente.";
          }
        }
    }

?>
