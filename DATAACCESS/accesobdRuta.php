<?php

$fichero_credenciales ="credencialesbd.php";
include $fichero_credenciales;

/////////////////////////////////FUNCIONES DE INSERCION/////////////////////////////////////////////////////////
function insertRuta($user,$date,$time,$valoration)
{
    global $conexionbd;

    $query="INSERT INTO `Ruta`(`Fecha`, `Hora`, `Valoracion`, `GeneradaPor`)
                VALUES ('$date','$time','$valoration','$user')";
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

  $query = "SELECT * FROM Ruta WHERE Id =(SELECT IDENT_CURRENT('Ruta')) ";
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


///////////////////////////////////////////////////////////////////////////////////////////////////////////////

?>
