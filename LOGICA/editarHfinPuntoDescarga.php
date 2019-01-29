<?php
    if (isset($_POST['punto'])&&isset($_POST['hfin']))
    {
        $punto=$_POST['punto'];
        $hfin=$_POST['hfin'];
        if(existLugarDescarga($punto)>0)
        {
            $info=getLugarDescargaInfo($punto);
            if(updateHFin($info[0],$hfin)==0)
            {
              echo "La hora de finalizacion del punto de descarga ".$punto." ha sido actualizada correctamente.";
            }
            else {
              echo "Ha ocurrido algún error con la base de datos.";
            }

        }
        else {
           echo "El punto de descarga ". $punto." no existe.";
        }
    }

?>
