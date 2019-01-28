<?php
    include "/Applications/MAMP/htdocs/transportgest/DATAACCESS/accesobdVehiculo.php";

    if (isset($_POST['matricula'])&&isset($_POST['tipo'])&&isset($_POST['remolque'])&&isset($_POST['matriculacion'])
          &&isset($_POST['proximaItv'])&&isset($_POST['proximaItvRemolque'])&&isset($_POST['capacidad'])
          &&isset($_POST['telefono'])&&isset($_POST['email']))
    {
        $matricula=$_POST['matricula'];
        $tipo=$_POST['tipo'];
        $remolque=$_POST['remolque'];
        $matriculacion=$_POST['matriculacion'];
        $proximaItv=$_POST['proximaItv'];
        $proximaitvRemolque=$_POST['proximaItvRemolque'];
        $capacidad=$_POST['capacidad'];
        $telefono=$_POST['telefono'];
        $email=$_POST['email'];

        if(existVehicle($matricula)>0)
        {
          echo "Ya existe el vehiculo ". $matricula ." en la base de datos.";
        }
        else {
           if(insertVehiculo($matricula,$tipo,$remolque,$matriculacion,$proximaItv,$proximaitvRemolque,$capacidad,
                              $telefono,$email)==0)
          {
            echo "Vehiculo ". $matricula ." introducido correctamente en la base de datos.";
          }
          else {
            echo "Ha ocurrido algun error con la base de datos.";
          }
        }

    }

?>
