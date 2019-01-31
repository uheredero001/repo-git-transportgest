<?php
    if (isset($_POST['usuario'])&&isset($_POST['nombre']))
    {
        $usuario=$_POST['usuario'];
        $nombre=$_POST['nombre'];
        if(existUser($usuario)>0)
        {
            $info=getUserinfo($usuario);
            if(updateNombre($info[0],$nombre)==0)
            {
              echo "El nombre del usuario ".$usuario." ha sido actualizado correctamente.";
            }
            else {
              echo "Ha ocurrido algún error con la base de datos.";
            }

        }
        else {
           echo "El usuario ". $usuario." no existe.";
        }
    }

?>
