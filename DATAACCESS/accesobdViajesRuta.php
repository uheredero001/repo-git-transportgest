<?php

$fichero_credenciales ="credencialesbd.php";
include $fichero_credenciales;

/////////////////////////////////FUNCIONES DE INSERCION/////////////////////////////////////////////////////////
function insertViajeRuta($ruta,$vehiculo,$carga1,$carga2,$carga3,$carga4,$carga5,$carga6,$carga7)
{
  global $conexionbd;

  $query="INSERT INTO `ViajesRuta`(`IdRuta`, `Vehiculo`, `Carga1`, `Carga2`, `Carga3`, `Carga4`, `Carga5`, `Carga6`, `Carga7`)
              VALUES ('$ruta','$vehiculo','$carga1','$carga2','$carga3','$carga4','$carga5','$carga6','$carga7')";
  if($conexionbd->query($query)){
    return 0;
  }
  else{
    return -1;
  }
}



////////////////////////////////////////////////////////////////////////////////////////////////////////////////


/////////////////////////////////FUNCIONES DE CONSULTA//////////////////////////////////////////////////////////
function getAllViajes()
{
  global $conexionbd;

  $query="SELECT * FROM ViajesRuta";
  $resultado=$conexionbd->query($query);
  return $resultado;
}

function getViajesDeRuta($ruta) //Devuelve un array de arrays con todos los datos
{
  global $conexionbd;

  $query = "SELECT * FROM ViajesRuta WHERE IdRuta='$ruta'";
  $resultado=$conexionbd->query($query);
  return $resultado;
}


////////////////////////////////////////////////////////////////////////////////////////////////////////////////


/////////////////////////////////FUNCIONES DE ACTUALIZACION/////////////////////////////////////////////////////


///////////////////////////////////////////////////////////////////////////////////////////////////////////////

?>
