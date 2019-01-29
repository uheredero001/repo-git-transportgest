<?php
    if (isset($_POST['punto'])&&isset($_POST['provincia']))
    {
        $punto=$_POST['punto'];
        $provincia=$_POST['provincia'];
        if(existLugarDescarga($punto)>0)
        {
            $info=getLugarDescargaInfo($punto);
            if(updateProvincia($info[0],$provincia)==0)
            {
              echo "La provincia del punto de descarga ".$punto." ha sido actualizada correctamente.";
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
