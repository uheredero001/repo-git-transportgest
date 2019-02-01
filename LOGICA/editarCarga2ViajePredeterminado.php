<?php
    if (isset($_POST['viaje'])&&isset($_POST['carga2']))
    {
        $viaje=$_POST['viaje'];
        $carga2=$_POST['carga2'];

        $infoVieja=getViajePredeterminadoInfo($viaje);

        if(existViajePredeterminado($infoVieja[1],$infoVieja[2],$carga2,$infoVieja[4],$infoVieja[5],
                                    $infoVieja[6],$infoVieja[7],$infoVieja[8])>0)
        {
          echo "Ya existe un viaje identico en la bd.";
        }
        else{
          if(updateCarga2($viaje,$carga2)!==0){
            echo "Ha ocurrido algún error con la base de datos.";
          }
          else{
              echo "La carga2 del viaje ha sido actualizada correctamente.";
          }
        }
    }

?>
