<?php
    if (isset($_POST['viaje'])&&isset($_POST['carga1']))
    {
        $viaje=$_POST['viaje'];
        $carga1=$_POST['carga1'];

        $infoVieja=getViajePredeterminadoInfo($viaje);

        if(existViajePredeterminado($infoVieja[1],$carga1,$infoVieja[3],$infoVieja[4],$infoVieja[5],
                                    $infoVieja[6],$infoVieja[7],$infoVieja[8])>0)
        {
          echo "Ya existe un viaje identico en la bd.";
        }
        else{
          if(updateCarga1($viaje,$carga1)!==0){
            echo "Ha ocurrido algún error con la base de datos.";
          }
          else{
              echo "La carga1 del viaje ha sido actualizada correctamente.";
          }
        }
    }

?>
