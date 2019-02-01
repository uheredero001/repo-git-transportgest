<?php
    $fichero_credenciales ="credencialesbd.php";
    include $fichero_credenciales;

    /////////////////////////////////FUNCIONES DE INSERCION/////////////////////////////////////////////////////////
    function insertViajePredeterminado($vehiculo,$carga1,$carga2,$carga3,$carga4,$carga5,$carga6,$carga7)//Devuelve 0 si todo va bien y /=0 si no
    {
      global $conexionbd;

      $query="INSERT INTO `ViajePredeterminado`(`Vehiculo`, `Carga1`, `Carga2`, `Carga3`, `Carga4`, `Carga5`, `Carga6`, `Carga7`)
                  VALUES ('$vehiculo','$carga1','$carga2','$carga3','$carga4','$carga5','$carga6','$carga7')";
      if($conexionbd->query($query)){
        return 0;
      }
      else{
        return -1;
      }
    }



    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////


    /////////////////////////////////FUNCIONES DE CONSULTA//////////////////////////////////////////////////////////

    function getViajes(){
      global $conexionbd;

      $query = "SELECT Id FROM ViajePredeterminado";
      $resultado=$conexionbd->query($query);
      return $resultado;
    }


    function existViajePredeterminado ($vehiculo,$carga1,$carga2,$carga3,$carga4,$carga5,$carga6,$carga7) //Devuelve 0 si no existe y /=0 si existe
    {
      global $conexionbd;

      $query = "SELECT * FROM ViajePredeterminado WHERE Vehiculo='$vehiculo' and Carga1='$carga1' and Carga2='$carga2'
                      and Carga3='$carga3' and Carga4='$carga4' and Carga5='$carga5' and Carga6='$carga6' and Carga7='$carga7'";
      $resultado=$conexionbd->query($query);
      return mysqli_num_rows($resultado);
    }

    function getViajePredeterminadoInfo($id) //Devuelve un array de arrays con todos los datos
    {
      global $conexionbd;

      $query = "SELECT * FROM ViajePredeterminado WHERE Id='$id'";
      $resultado=$conexionbd->query($query);
      $fila=mysqli_fetch_row($resultado);
      return $fila;
    }

    function getCarga1($id){ //Devuelve un array con los datos
      global $conexionbd;

      $query = "SELECT Carga1 FROM ViajePredeterminado WHERE Id='$id'";
      $resultado=$conexionbd->query($query);
      return $resultado;
    }


    function getCarga2($id){ //Devuelve un array con los datos
      global $conexionbd;

      $query = "SELECT Carga2 FROM ViajePredeterminado WHERE Id='$id'";
      $resultado=$conexionbd->query($query);
      return $resultado;
    }


    function getCarga3($id){ //Devuelve un array con los datos
      global $conexionbd;

      $query = "SELECT Carga3 FROM ViajePredeterminado WHERE Id='$id'";
      $resultado=$conexionbd->query($query);
      return $resultado;
    }


    function getCarga4($id){ //Devuelve un array con los datos
      global $conexionbd;

      $query = "SELECT Carga4 FROM ViajePredeterminado WHERE Id='$id'";
      $resultado=$conexionbd->query($query);
      return $resultado;
    }


    function getCarga5($id){ //Devuelve un array con los datos
      global $conexionbd;

      $query = "SELECT Carga5 FROM ViajePredeterminado WHERE Id='$id'";
      $resultado=$conexionbd->query($query);
      return $resultado;
    }


    function getCarga6($id){ //Devuelve un array con los datos
      global $conexionbd;

      $query = "SELECT Carga6 FROM ViajePredeterminado WHERE Id='$id'";
      $resultado=$conexionbd->query($query);
      return $resultado;
    }


    function getCarga7($id){ //Devuelve un array con los datos
      global $conexionbd;

      $query = "SELECT Carga7 FROM ViajePredeterminado WHERE Id='$id'";
      $resultado=$conexionbd->query($query);
      return $resultado;
    }



    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////


    /////////////////////////////////FUNCIONES DE ACTUALIZACION/////////////////////////////////////////////////////

    function updateVehiculo($id,$vehiculo){
      global $conexionbd;

      $query="UPDATE `ViajePredeterminado` SET `Vehiculo`='$vehiculo' WHERE `Id`='$id'";

      if($conexionbd->query($query)){
        return 0;
      }
      else{
        return -1;
      }
    }


    function updateCarga1($id,$carga){
      global $conexionbd;

      $query="UPDATE `ViajePredeterminado` SET `Carga1`='$carga' WHERE `Id`='$id'";

      if($conexionbd->query($query)){
        return 0;
      }
      else{
        return -1;
      }
    }

    function updateCarga2($id,$carga){
      global $conexionbd;

      $query="UPDATE `ViajePredeterminado` SET `Carga2`='$carga' WHERE `Id`='$id'";

      if($conexionbd->query($query)){
        return 0;
      }
      else{
        return -1;
      }
    }


    function updateCarga3($id,$carga){
      global $conexionbd;

      $query="UPDATE `ViajePredeterminado` SET `Carga3`='$carga' WHERE `Id`='$id'";

      if($conexionbd->query($query)){
        return 0;
      }
      else{
        return -1;
      }
    }


    function updateCarga4($id,$carga){
      global $conexionbd;

      $query="UPDATE `ViajePredeterminado` SET `Carga4`='$carga' WHERE `Id`='$id'";

      if($conexionbd->query($query)){
        return 0;
      }
      else{
        return -1;
      }
    }


    function updateCarga5($id,$carga){
      global $conexionbd;

      $query="UPDATE `ViajePredeterminado` SET `Carga5`='$carga' WHERE `Id`='$id'";

      if($conexionbd->query($query)){
        return 0;
      }
      else{
        return -1;
      }
    }


    function updateCarga6($id,$carga){
      global $conexionbd;

      $query="UPDATE `ViajePredeterminado` SET `Carga6`='$carga' WHERE `Id`='$id'";

      if($conexionbd->query($query)){
        return 0;
      }
      else{
        return -1;
      }
    }

    function updateCarga7($id,$carga){
      global $conexionbd;

      $query="UPDATE `ViajePredeterminado` SET `Carga7`='$carga' WHERE `Id`='$id'";

      if($conexionbd->query($query)){
        return 0;
      }
      else{
        return -1;
      }
    }
    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////
?>
