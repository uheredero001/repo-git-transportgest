<?php
    $fichero_credenciales ="credencialesbd.php";
    include $fichero_credenciales;

    /////////////////////////////////FUNCIONES DE INSERCION/////////////////////////////////////////////////////////

    function insertVehiculo($matricula,$tipo,$remolque,$añomatriculacion,$proximaitv,$proximaitvremolque,
                              $capacidad,$telefono,$email)//Devuelve 0 si todo va bien y /=0 si no
    {
      global $conexionbd;

      $query="INSERT INTO `Vehiculo`( `Matricula`, `Tipo`, `Remolque`, `AñoMatriculacion`, `ProximaItv`,
                                    `ProximaItvRemolque`, `Capacidad`, `NTelefono`, `Email`)
                            VALUES ('$matricula','$tipo','$remolque','$añomatriculacion','$proximaitv','$proximaitvremolque',
                                    '$capacidad','$telefono','$email')";
      if($conexionbd->query($query)){
        return 0;
      }
      else{
        return -1;
      }
    }


    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////


    /////////////////////////////////FUNCIONES DE CONSULTA//////////////////////////////////////////////////////////


    function existVehicle ($matricula) //Devuelve 0 si no existe y /=0 si existe
    {
      global $conexionbd;

      $query = "SELECT Matricula FROM Vehiculo WHERE Matricula='$matricula'";
      $resultado=$conexionbd->query($query);
      return mysqli_num_rows($resultado);
    }


    function getVehicleInfo($matricula)//Devuelve un array con todos los datos
    {
      global $conexionbd;

      $query = "SELECT * FROM Vehiculo WHERE Matricula='$matricula'";
      $resultado=$conexionbd->query($query);
      $fila=mysqli_fetch_row($resultado);
      return $fila;
    }

    function getVehicles()//Devuelve un array con la matricula de todos los Vehiculos
    {
      global $conexionbd;

      $query = "SELECT Matricula FROM Vehiculo";
      $resultado=$conexionbd->query($query);
      return $resultado;
    }




    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////


    /////////////////////////////////FUNCIONES DE ACTUALIZACION/////////////////////////////////////////////////////
    function updateAllVehiculo($id,$matricula,$tipo,$remolque,$añomatriculacion,$proximaitv,$proximaitvremolque,
                              $capacidad,$telefono,$email)//Devuelve 0 si todo va bien y /=0 si n
    {
      global $conexionbd;

      $query="UPDATE `Vehiculo` SET `Matricula`='$matricula',`Tipo`='$tipo',`Remolque`='$remolque',`AñoMatriculacion`='$añomatriculacion',
                                    `ProximaItv`='$proximaitv',`ProximaItvRemolque`='$proximaitvremolque',
                                    `Capacidad`='$capacidad',`NTelefono`='$telefono',`Email`='$email' WHERE `Id`='$id'";

      if($conexionbd->query($query)){
        return 0;
      }
      else{
        return -1;
      }
    }


    function updateTipo($id,$tipo)//Devuelve 0 si todo va bien y /=0 si n
    {
      global $conexionbd;

      $query="UPDATE `Vehiculo` SET `Tipo`='$tipo' WHERE `Id`='$id'";

      if($conexionbd->query($query)){
        return 0;
      }
      else{
        return -1;
      }
    }


    function updateRemolque($id,$remolque)//Devuelve 0 si todo va bien y /=0 si n
    {
      global $conexionbd;

      $query="UPDATE `Vehiculo` SET `Remolque`='$remolque' WHERE `Id`='$id'";

      if($conexionbd->query($query)){
        return 0;
      }
      else{
        return -1;
      }
    }


    function updateProximaItv($id,$proximaitv)//Devuelve 0 si todo va bien y /=0 si n
    {
      global $conexionbd;

      $query="UPDATE `Vehiculo` SET `ProximaItv`='$proximaitv' WHERE `Id`='$id'";

      if($conexionbd->query($query)){
        return 0;
      }
      else{
        return -1;
      }
    }


    function updateProximaItvRemolque($id,$proximaitvremolque)//Devuelve 0 si todo va bien y /=0 si n
    {
      global $conexionbd;

      $query="UPDATE `Vehiculo` SET `ProximaItvRemolque`='$proximaitvremolque' WHERE `Id`='$id'";

      if($conexionbd->query($query)){
        return 0;
      }
      else{
        return -1;
      }
    }


    function updateCapacidad($id,$capacidad)//Devuelve 0 si todo va bien y /=0 si n
    {
      global $conexionbd;

      $query="UPDATE `Vehiculo` SET `Capacidad`='$capacidad' WHERE `Id`='$id'";

      if($conexionbd->query($query)){
        return 0;
      }
      else{
        return -1;
      }
    }

    function updateNTelefono($id,$telefono)//Devuelve 0 si todo va bien y /=0 si n
    {
      global $conexionbd;

      $query="UPDATE `Vehiculo` SET `Telefono`='$telefono' WHERE `Id`='$id'";

      if($conexionbd->query($query)){
        return 0;
      }
      else{
        return -1;
      }
    }


    function updateEmail($id,$email)//Devuelve 0 si todo va bien y /=0 si n
    {
      global $conexionbd;

      $query="UPDATE `Vehiculo` SET `Email`='$email' WHERE `Id`='$id'";

      if($conexionbd->query($query)){
        return 0;
      }
      else{
        return -1;
      }
    }


    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////
?>
