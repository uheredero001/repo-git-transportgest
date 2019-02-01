<?php
    if (isset($_POST['viaje'])&&isset($_POST['carga5']))
    {
        $viaje=$_POST['viaje'];
        $carga5=$_POST['carga5'];

        $infoVieja=getViajePredeterminadoInfo($viaje);

        if(existViajePredeterminado($infoVieja[1],$infoVieja[2],$infoVieja[3],$infoVieja[4],$infoVieja[5],
                                    $carga5,$infoVieja[7],$infoVieja[8])>0)
        {
          echo "Ya existe un viaje identico en la bd.";
        }
        else{
          if(updateCarga5($viaje,$carga5)!==0){
            echo "Ha ocurrido algún error con la base de datos.";
          }
          else{
              echo "La carga5 del viaje ha sido actualizada correctamente.";
          }
        }
    }

?>
