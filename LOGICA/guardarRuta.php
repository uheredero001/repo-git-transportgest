<?php

include "/Applications/MAMP/htdocs/transportgest/DATAACCESS/accesobdRuta.php";
include "/Applications/MAMP/htdocs/transportgest/DATAACCESS/accesobdViajesRuta.php";

if (isset($_SESSION['rutaGenerada']))
{
  $fechaRuta=date("Y-m-d");
  $horaRuta=date("h:i:s");
  $idusuarioRuta=$_SESSION['iduser'];
  $usuarioRuta=$_SESSION['user'];
  $valoracionRuta="defectuosa";


  if(insertRuta($idusuarioRuta,$usuarioRuta,$fechaRuta,$horaRuta,$valoracionRuta)==0)
  {
    $ruta=$_SESSION['rutaGenerada'];
    $idRuta=getLasRuta();

    for($i=0;$i<count($ruta);$i++)
    {
      $vehiculo=$ruta[$i][0];
      $carga1=$ruta[$i][1][0];
      $carga2=$ruta[$i][2][0];
      $carga3=$ruta[$i][3][0];
      $carga4=$ruta[$i][4][0];
      $carga5=$ruta[$i][5][0];
      $carga6=$ruta[$i][6][0];
      $carga7=$ruta[$i][7][0];
      if(insertViajeRuta($idRuta[0],$vehiculo,$carga1,$carga2,$carga3,$carga4,$carga5,$carga6,$carga7)!==0)
      {
        echo "<p> Ha ocurrido algun error con la base de datos.</p>";
        echo '<p>'.$vehiculo.' - '.$carga1.' - '.$carga2.' - '.$carga3.' - '.$carga4.' - '.$carga5.' - '.$carga6.' - '.$carga7.'</p>';
        unset($_SESSION['rutaGenerada']);
      }
    }
  }
  else {
    echo "<p> Ha ocurrido algun error con la base de datos.</p>";
    unset($_SESSION['rutaGenerada']);
  }
}


?>
