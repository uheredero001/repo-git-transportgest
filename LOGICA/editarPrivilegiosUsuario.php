<?php
    if (isset($_POST['usuario'])&&isset($_POST['privilegios']))
    {
        $usuario=$_POST['usuario'];
        $privilegios=$_POST['privilegios'];
        if(existUser($usuario)>0)
        {
            $info=getUserinfo($usuario);
            if(updatePrivilegios($info[0],$privilegios)==0)
            {
              echo "Los privilegios del usuario ".$usuario." han sido actualizados correctamente.";
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
