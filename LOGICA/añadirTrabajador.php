<?php
    include "/Applications/MAMP/htdocs/transportgest/DATAACCESS/accesobdTrabajador.php";

    if (isset($_POST['dni'])&&isset($_POST['nombre'])&&isset($_POST['apellidos'])&&isset($_POST['puesto'])
          &&isset($_POST['telefono'])&&isset($_POST['estado']))
    {
        $dni=$_POST['dni'];
        $nombre=$_POST['nombre'];
        $apellidos=$_POST['apellidos'];
        $puesto=$_POST['puesto'];
        $telefono=$_POST['telefono'];
        $estado=$_POST['estado'];

        if(existWorker($dni)>0)
        {
          echo "El trabajdor ya esta en la base de datos.";
        }
        else {
            if(insertTrabajador($dni,$nombre,$apellidos,$puesto,$telefono,$estado)==0)
            {
                echo "Usuario con dni ". $dni ." introducido correctamente."
            }
            else {
                echo "Ha ocurrido algún error con la base de datos."
            }
        }
    }

?>
