<?php
    if (isset($_POST['punto'])&&isset($_POST['poblacion']))
    {
        $punto=$_POST['punto'];
        $poblacion=$_POST['poblacion'];
        if(existLugarDescarga($punto)>0)
        {
            $info=getLugarDescargaInfo($punto);
            if(updatePoblacion($info[0],$poblacion)==0)
            {
              echo "La poblacion del punto de descarga ".$punto." ha sido actualizada correctamente.";
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
