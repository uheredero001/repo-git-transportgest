<?php
include "/Applications/MAMP/htdocs/transportgest/DATAACCESS/accesobdVehiculo.php";
include "/Applications/MAMP/htdocs/transportgest/DATAACCESS/accesobdViajePredeterminado.php";


if (isset($_SESSION['tiendasRuta'])&&isset($_SESSION['volumetriasRuta']))
{
  $tiendas=$_SESSION['tiendasRuta'];
  $volumetrias=$_SESSION['volumetriasRuta'];
  $vehiculosDisponibles= getVehiclesInCirculation();
  $idviajesPredeterminados=getViajes();
  $viajesPredeterminados=array();
  for ($i=0;$i<mysqli_num_rows($idviajesPredeterminados);$i++)
  {
      $viaje=mysqli_fetch_row($idviajesPredeterminados);
      $viajesPredeterminados[$i]=getViajePredeterminadoInfo($viaje[0]);
  }

  //Distribuimos cargas en los camiones que esten en Circulacion (algoritmo)
  $ruta=array();
  echo '<h3> RUTA GENERADA:</h3>';

  for ($j=2,$i=0;$j<count($tiendas),$i<mysqli_num_rows($vehiculosDisponibles);$j++,$i++)
  {
    $vehiculo=mysqli_fetch_row($vehiculosDisponibles);

    $ruta[$i]=array($vehiculo[0],$tiendas[$j],$volumetrias[$j],$vehiculo[1],$vehiculo[1]-$volumetrias[$j]);

    echo'<p>'.$ruta[$i][0].'----'.$ruta[$i][1].'----'.$ruta[$i][2].'----'.$ruta[$i][3].'----  '.$ruta[$i][4].'</p>';
  }

  for ($i=0;$i<mysqli_num_rows($vehiculosDisponibles);$i++)
  {

  }

  unset($_SESSION['tiendasRuta']);
  unset($_SESSION['volumetriasRuta']);
}

?>
