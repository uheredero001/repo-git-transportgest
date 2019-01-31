<?php
    if (isset($_POST['usuario'])&&isset($_POST['password']))
    {
        $usuario=$_POST['usuario'];
        $password=$_POST['password'];
        if(existUser($usuario)>0)
        {
            $info=getUserinfo($usuario);
            if(updatePassword($info[0],md5($password))==0)
            {
              echo "El password del usuario ".$usuario." ha sido actualizado correctamente.";
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
