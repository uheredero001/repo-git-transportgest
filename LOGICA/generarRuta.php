<?php
include "/Applications/MAMP/htdocs/transportgest/LOGICA/cargarDatosRutero.php";

if (isset($_SESSION['datosRuta']))
{
  $datos=$_SESSION['datosRuta'];
  $tiendas=array();
  $volumetrias=array();

  for ($i=2;$i<count($datos);$i++)
  {
    $tiendas[$i-2]=$datos[$i][2];
    $volumetrias[$i-2]=$datos[$i][8];
  }

  $_SESSION['tiendasRuta']=$tiendas;
  $_SESSION['volumetriasRuta']=$volumetrias;
}
unset($_SESSION['datosRuta']);


/////GENERAMOS RUTA
include "/Applications/MAMP/htdocs/transportgest/LOGICA/distribuirCargasRuta.php";

/////GUARDAMOS RUTA Y SU VALORACION
if (isset($_SESSION['rutaGenerada']))
{
  include "/Applications/MAMP/htdocs/transportgest/LOGICA/guardarRuta.php";

  //echo'<META HTTP-EQUIV="Refresh" CONTENT="5; URL=../GUI/valorarRuta.php">';

}
unset($_SESSION['rutaGenerada']);




?>
