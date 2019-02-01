<?php
    include "/Applications/MAMP/htdocs/transportgest/DATAACCESS/accesobdViajePredeterminado.php";

    if (isset($_POST['vehiculo'])&&isset($_POST['carga1'])&&isset($_POST['carga2'])&&isset($_POST['carga3'])
          &&isset($_POST['carga4'])&&isset($_POST['carga5'])&&isset($_POST['carga6'])
          &&isset($_POST['carga7']))
    {
        $vehiculo=$_POST['vehiculo'];
        $carga1=$_POST['carga1'];
        $carga2=$_POST['carga2'];
        $carga3=$_POST['carga3'];
        $carga4=$_POST['carga4'];
        $carga5=$_POST['carga5'];
        $carga6=$_POST['carga6'];
        $carga7=$_POST['carga7'];


        if(existViajePredeterminado($vehiculo,$carga1,$carga2,$carga3,$carga4,$carga5,$carga6,$carga7)>0)
        {
          echo "Ya existe ese viaje predeterminado para el vehiculo ". $vehiculo ." en la base de datos.";
        }
        else {
           if(insertViajePredeterminado($vehiculo,$carga1,$carga2,$carga3,$carga4,$carga5,$carga6,$carga7)==0)
          {
            echo "Viaje predeterminado para el vehiculo ". $vehiculo ." introducido correctamente en la base de datos.";
          }
          else {
            echo "Ha ocurrido algun error con la base de datos.";
          }
        }

    }

?>
