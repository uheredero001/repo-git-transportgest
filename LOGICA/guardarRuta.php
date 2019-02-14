<?php

include "/Applications/MAMP/htdocs/transportgest/DATAACCESS/accesobdRuta.php";
include "/Applications/MAMP/htdocs/transportgest/DATAACCESS/accesobdViajesRuta.php";

if (isset($_SESSION['rutaGenerada']))
{
  $fechaRuta=date("Y-m-d");
  $horaRuta=date("h:i:s");
  $usuarioRuta=$_SESSION['user'];
  $valoracionRuta="defectuosa";
  if(insertRuta($fechaRuta,$horaRuta,$valoracionRuta,$usuarioRuta)==0)
  {
    $ruta=$_SESSION['rutaGenerada'];
    $idRuta=getLasRuta();
    for($i=0;$i<count($ruta);$i++)
    {
      if(insertViajeRuta($idRuta,$ruta[$i][0],$ruta[$i][1][0],$ruta[$i][2][0],$ruta[$i][3][0],$ruta[$i][4][0],$ruta[$i][5][0],
                                          $ruta[$i][6][0],$ruta[$i][7][0],$ruta[$i][8][0])!==0)
      {
        echo "<p> Ha ocurrido algun error con la base de datos.</p>";
      }
    }
  }
  else {
    echo "<p> Ha ocurrido algun error con la base de datos.</p>";
  }


}


?>
