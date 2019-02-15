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
include "/Applications/MAMP/htdocs/transportgest/LOGICA/guardarRuta.php";
/////GUARDAMOS RUTA Y SU VALORACION
if (isset($_SESSION['rutaGuardada']))
{

  echo'<form method="post" action="../GUI/valorarRuta.php">
        <div class="form-group">
            <input type="submit" class="btn btn-lg btn-success" value="Continuar"></input>
        </div>
        </form>';

}

?>
