<?php
    if (isset($_POST['punto'])&&isset($_POST['direccion']))
    {
        $punto=$_POST['punto'];
        $direccion=$_POST['direccion'];
        if(existLugarDescarga($punto)>0)
        {
            $info=getLugarDescargaInfo($punto);
            if(updateDireccion($info[0],$direccion)==0)
            {
              echo "La direccion del punto de descarga ".$punto." ha sido actualizada correctamente.";
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
