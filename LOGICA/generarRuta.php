<?php
include "/Applications/MAMP/htdocs/transportgest/LOGICA/cargarDatosRutero.php";

if (isset($_SESSION['datosRuta']))
{
  $datos=$_SESSION['datosRuta'];
  $tiendas=array();
  $volumetrias=array();
  echo '<h4> ESTAS SON LAS CARGAS Y SUS VOLUMETRÍAS: </h4>';
  echo "<table id='infoPuntos' class='table table-striped'>";
  echo        "<thead>";
  echo            "<tr>";
  echo                "<th> Nombre Tienda </th>";
  echo                "<th> Volumetría </th>";
  echo            "</tr>";
  echo        "</thead>";
  echo        "<tbody>";


  for ($i=2;$i<count($datos);$i++)
  {
    echo         "<tr>";
    echo            "<th>". $datos[$i][2]. "</th>";
    echo            "<th>". $datos[$i][8]. "</th>";
    echo        "</tr>";
    $tiendas[$i]=$datos[$i][2];
    $volumetrias[$i]=$datos[$i][8];
  }
  echo        "</tbody>";
  echo "</table>";
  $_SESSION['tiendasRuta']=$tiendas;
  $_SESSION['volumetriasRuta']=$volumetrias;
}
unset($_SESSION['datosRuta']);




?>
