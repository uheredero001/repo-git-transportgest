<?php
    if (isset($_POST['punto'])&&isset($_POST['hinicio']))
    {
        $punto=$_POST['punto'];
        $hinicio=$_POST['hinicio'];
        if(existLugarDescarga($punto)>0)
        {
            $info=getLugarDescargaInfo($punto);
            if(updateHInicio($info[0],$hinicio)==0)
            {
              echo "La hora de inicio del punto de descarga ".$punto." ha sido actualizada correctamente.";
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
