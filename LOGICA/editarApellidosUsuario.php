<?php
    if (isset($_POST['usuario'])&&isset($_POST['apellidos']))
    {
        $usuario=$_POST['usuario'];
        $apellidos=$_POST['apellidos'];
        if(existUser($usuario)>0)
        {
            $info=getUserinfo($usuario);
            if(updateApellidos($info[0],$apellidos)==0)
            {
              echo "Los apellidos del usuario ".$usuario." han sido actualizados correctamente.";
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
