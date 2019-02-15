<?php

$fichero_credenciales ="credencialesbd.php";
include $fichero_credenciales;

/////////////////////////////////FUNCIONES DE INSERCION/////////////////////////////////////////////////////////
function insertRuta($iduser,$user,$date,$time,$valoration)//Devuelve 0 en caso de ir bien y -1 en caso contrario
{
    global $conexionbd;
    $query="INSERT INTO `Ruta`(`Fecha`, `Hora`, `Valoracion`, `GeneradaPor`,`nombreUsuario`)
                VALUES ('$date','$time','$valoration','$iduser','$user')";

    if($conexionbd->query($query)){
      return 0;
    }
    else{
      return -1;
    }
}


////////////////////////////////////////////////////////////////////////////////////////////////////////////////


/////////////////////////////////FUNCIONES DE CONSULTA//////////////////////////////////////////////////////////
function getAllRutas() //Devuelve un array con todos los datos
{
  global $conexionbd;

  $query = "SELECT * FROM Ruta ";
  $resultado=$conexionbd->query($query);
  return $resultado;
}

function getLasRuta()
{
  global $conexionbd;

  $query = "SELECT MAX(ID) From Ruta";
  $resultado=$conexionbd->query($query);
  $fila=mysqli_fetch_row($resultado);
  return $fila;
}

function getRutaInfo($id)
{
  global $conexionbd;

  $query = "SELECT * FROM Ruta WHERE Id =$id";
  $resultado=$conexionbd->query($query);
  return $resultado;
}


////////////////////////////////////////////////////////////////////////////////////////////////////////////////


/////////////////////////////////FUNCIONES DE ACTUALIZACION/////////////////////////////////////////////////////
function updateValoracion($id,$valoracion)//Devuelve 0 en caso de ir bien y -1 en caso contrario
{
  global $conexionbd;

  $query = "UPDATE Ruta SET Valoracion='$valoracion' WHERE Id =$id";
  if($conexionbd->query($query)){
    return 0;
  }
  else{
    return -1;
  }
}

///////////////////////////////////////////////////////////////////////////////////////////////////////////////

?>
