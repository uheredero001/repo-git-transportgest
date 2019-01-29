<?php
    if (isset($_POST['punto'])&&isset($_POST['nombre']))
    {
        $punto=$_POST['punto'];
        $nombre=$_POST['nombre'];
        if(existLugarDescarga($punto)>0)
        {
          if(existLugarDescarga($nombre)>0)
          {
            echo "El punto de descarga ". $nombre." ya existe en la base de datos.";
          }
          else {
            $info=getLugarDescargaInfo($punto);
            if(updateNombre($info[0],$nombre)==0)
            {
              echo "El nombre del punto de descarga ".$punto." ha sido actualizado correctamente.";
            }
            else {
              echo "Ha ocurrido algún error con la base de datos.";
            }
          }
        }
        else {
           echo "El punto de descarga ". $punto." no existe.";
        }
    }

?>
