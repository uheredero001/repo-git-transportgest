<?php
    $fichero_credenciales ="credencialesbd.php";
    include $fichero_credenciales;

    /////////////////////////////////FUNCIONES DE INSERCION/////////////////////////////////////////////////////////
    function insertTrabajador($dni,$nombre,$apellidos,$puesto,$telefono,$estado)//Devuelve 0 si todo va bien y /=0 si no
    {
      global $conexionbd;
      $query="INSERT INTO `Trabajador`(`Dni`, `Nombre`, `Apellidos`, `PuestoTrabajo`, `TelfPersonal`, `Estado`)
              VALUES ('$dni','$nombre','$apellidos','$puesto','$telefono','$estado',)";

      if($conexionbd->query($query)){
        return 0;
      }
      else{
        return -1;
      }
    }



    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////


    /////////////////////////////////FUNCIONES DE CONSULTA//////////////////////////////////////////////////////////


    function existWorker ($dni) //Devuelve 0 si no existe y /=0 si existe
    {
      global $conexionbd;

      $query = "SELECT Dni FROM Trabajador WHERE Dni='$dni'";
      $resultado=$conexionbd->query($query);
      return mysqli_num_rows($resultado);
    }


    function getWorkerInfo($dni)//Devuelve un array con todos los datos
    {
      global $conexionbd;

      $query = "SELECT * FROM Trabajador WHERE Dni='$dni'";
      $resultado=$conexionbd->query($query);
      $fila=mysqli_fetch_row($resultado);
      return $fila;
    }

    function getWorkersDni()//Devuelve todos los dnis en un array
    {
      global $conexionbd;

      $query = "SELECT Dni FROM Trabajador ";
      $resultado=$conexionbd->query($query);
      return $resultado;
    }



    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////


    /////////////////////////////////FUNCIONES DE ACTUALIZACION/////////////////////////////////////////////////////

    function updateAllTrabajador($id,$dni,$nombre,$apellidos,$puesto,$telefono,$estado)//Devuelve 0 si todo va bien y /=0 si no
    {
      global $conexionbd;

      $query="UPDATE `Trabajador` SET `Dni`='$dni',`Nombre`='$nombre',`Apellidos`='$apellidos',`PuestoTrabajo`='$puesto',
                      `TelfPersonal`='$telefono',`Estado`='$estado', WHERE `Id`='$id'";

      if($conexionbd->query($query)){
        return 0;
      }
      else{
        return -1;
      }

    }

    function updateDni($id,$dni)//Devuelve 0 si todo va bien y /=0 si no
    {
      global $conexionbd;

      $query="UPDATE `Trabajador` SET `Dni`='$dni' WHERE `Id`='$id'";

      if($conexionbd->query($query)){
        return 0;
      }
      else{
        return -1;
      }

    }


    function updateEstado($id,$estado)//Devuelve 0 si todo va bien y /=0 si no
    {
      global $conexionbd;

      $query="UPDATE `Trabajador` SET `Estado`='$estado' WHERE `Id`='$id'";

      if($conexionbd->query($query)){
        return 0;
      }
      else{
        return -1;
      }

    }

    function updateNombre($id,$nombre)//Devuelve 0 si todo va bien y /=0 si no
    {
      global $conexionbd;

      $query="UPDATE `Trabajador` SET `Nombre`='$nombre' WHERE `Id`='$id'";

      if($conexionbd->query($query)){
        return 0;
      }
      else{
        return -1;
      }

    }


    function updateApellidos($id,$apellidos)//Devuelve 0 si todo va bien y /=0 si no
    {
      global $conexionbd;

      $query="UPDATE `Trabajador` SET `Apellidos`='$apellidos' WHERE `Id`='$id'";

      if($conexionbd->query($query)){
        return 0;
      }
      else{
        return -1;
      }

    }

    function updateTelefono($id,$telefono)//Devuelve 0 si todo va bien y /=0 si no
    {
      global $conexionbd;

      $query="UPDATE `Trabajador` SET `TelfPersonal`='$telefono' WHERE `Id`='$id'";

      if($conexionbd->query($query)){
        return 0;
      }
      else{
        return -1;
      }

    }


    function updatePuesto($id,$puesto)//Devuelve 0 si todo va bien y /=0 si no
    {
      global $conexionbd;

      $query="UPDATE `Trabajador` SET `PuestoTrabajo`='$puesto' WHERE `Id`='$id'";

      if($conexionbd->query($query)){
        return 0;
      }
      else{
        return -1;
      }

    }
    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////
?>
