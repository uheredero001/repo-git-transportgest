<?php
include "/Applications/MAMP/htdocs/transportgest/DATAACCESS/accesobdVehiculo.php";
include "/Applications/MAMP/htdocs/transportgest/DATAACCESS/accesobdViajePredeterminado.php";


///////////////////////FUNCION QUE COMPRUEBA SI UN VIAJE PREDETERMINADO ESTA ENTRE LAS CARGAS DE UNA RUTA /////////////////
function estaViajePredeterminadoEnRuta($cargasruta,$carga1,$carga2,$carga3,$carga4,$carga5,$carga6,$carga7)
{
  if(strcmp($carga7,"")!==0)
  {
    if(in_array($carga1,$cargasruta)&&in_array($carga2,$cargasruta)&&in_array($carga3,$cargasruta)&&in_array($carga4,$cargasruta)&&
        in_array($carga5,$cargasruta)&&in_array($carga6,$cargasruta)&&in_array($carga7,$cargasruta))
        {
          return true;
        }
  }
  elseif(strcmp($carga6,"")!==0)
  {
    if(in_array($carga1,$cargasruta)&&in_array($carga2,$cargasruta)&&in_array($carga3,$cargasruta)&&in_array($carga4,$cargasruta)&&
        in_array($carga5,$cargasruta)&&in_array($carga6,$cargasruta))
    {
      return true;
    }

  }
  elseif(strcmp($carga5,"")!==0)
  {
    if(in_array($carga1,$cargasruta)&&in_array($carga2,$cargasruta)&&in_array($carga3,$cargasruta)&&in_array($carga4,$cargasruta)&&
        in_array($carga5,$cargasruta))
    {
      return true;
    }
  }
  elseif(strcmp($carga4,"")!==0)
  {
    if(in_array($carga1,$cargasruta)&&in_array($carga2,$cargasruta)&&in_array($carga3,$cargasruta)&&in_array($carga4,$cargasruta))
    {
      return true;
    }
  }
  elseif(strcmp($carga3,"")!==0)
  {
    if(in_array($carga1,$cargasruta)&&in_array($carga2,$cargasruta)&&in_array($carga3,$cargasruta))
    {
      return true;
    }
  }
  elseif(strcmp($carga2,"")!==0)
  {
    if(in_array($carga1,$cargasruta)&&in_array($carga2,$cargasruta))
    {
      return true;
    }
  }
  else
  {
    if(in_array($carga1,$cargasruta))
    {
      return true;
    }
    else {
      return false;
    }
  }
}
////////////////////////////////////FIN FUNCION////////////////////////////////////////////////////////////


if (isset($_SESSION['tiendasRuta'])&&isset($_SESSION['volumetriasRuta']))
{
  ///RECOGIDA DE INFORMACION//////////
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
  /////FIN RECOGIDA DE INFORMACION//////






  //Distribuimos cargas en los camiones que esten en Circulacion (algoritmo)
  $ruta=array();
  $contadorRuta=0;
  for($i=0;$i<count($viajesPredeterminados);$i++)
  {
    if(estaViajePredeterminadoEnRuta($tiendas,$viajesPredeterminados[$i][2],$viajesPredeterminados[$i][3],$viajesPredeterminados[$i][4],
                                  $viajesPredeterminados[$i][5],$viajesPredeterminados[$i][6],$viajesPredeterminados[$i][7],$viajesPredeterminados[$i][8]))
      {
        $volumetria1=0;
        $volumetria2=0;
        $volumetria3=0;
        $volumetria4=0;
        $volumetria5=0;
        $volumetria6=0;
        $volumetria7=0;

        if(($valorBusqueda=array_search($viajesPredeterminados[$i][2],$tiendas))!==false)
        {
          $volumetria1=$volumetrias[$valorBusqueda];
          unset($tiendas[$valorBusqueda]);
          unset($volumetrias[$valorBusqueda]);
        }
        if(($valorBusqueda=array_search($viajesPredeterminados[$i][3],$tiendas))!==false)
        {
          $volumetria2=$volumetrias[$valorBusqueda];
          unset($tiendas[$valorBusqueda]);
          unset($volumetrias[$valorBusqueda]);
        }
        if(($valorBusqueda=array_search($viajesPredeterminados[$i][4],$tiendas))!==false)
        {
          $volumetria3=$volumetrias[$valorBusqueda];
          unset($tiendas[$valorBusqueda]);
          unset($volumetrias[$valorBusqueda]);
        }
        if(($valorBusqueda=array_search($viajesPredeterminados[$i][5],$tiendas))!==false)
        {
          $volumetria4=$volumetrias[$valorBusqueda];
          unset($tiendas[$valorBusqueda]);
          unset($volumetrias[$valorBusqueda]);
        }
        if(($valorBusqueda=array_search($viajesPredeterminados[$i][6],$tiendas))!==false)
        {
          $volumetria5=$volumetrias[$valorBusqueda];
          unset($tiendas[$valorBusqueda]);
          unset($volumetrias[$valorBusqueda]);
        }
        if(($valorBusqueda=array_search($viajesPredeterminados[$i][7],$tiendas))!==false)
        {
          $volumetria6=$volumetrias[$valorBusqueda];
          unset($tiendas[$valorBusqueda]);
          unset($volumetrias[$valorBusqueda]);
        }
        if(($valorBusqueda=array_search($viajesPredeterminados[$i][8],$tiendas))!==false)
        {
          $volumetria7=$volumetrias[$valorBusqueda];
          unset($tiendas[$valorBusqueda]);
          unset($volumetrias[$valorBusqueda]);
        }

        $ruta[$contadorRuta]=array($viajesPredeterminados[$i][1],array($viajesPredeterminados[$i][2],$volumetria1),
                    array($viajesPredeterminados[$i][3],$volumetria2),array($viajesPredeterminados[$i][4],$volumetria3),
                    array($viajesPredeterminados[$i][5],$volumetria4),array($viajesPredeterminados[$i][6],$volumetria5),
                    array($viajesPredeterminados[$i][7],$volumetria6),array($viajesPredeterminados[$i][8],$volumetria7));
        $contadorRuta++;

        $tiendas=array_values($tiendas);
        $volumetrias=array_values($volumetrias);
      }
  }

  for($i=0;$i<count($viajesPredeterminados);$i++)
  {
    if(estaViajePredeterminadoEnRuta($tiendas,$viajesPredeterminados[$i][2],$viajesPredeterminados[$i][3],$viajesPredeterminados[$i][4],
                                  $viajesPredeterminados[$i][5],$viajesPredeterminados[$i][6],$viajesPredeterminados[$i][7],$viajesPredeterminados[$i][8]))
      {
        $volumetria1=0;
        $volumetria2=0;
        $volumetria3=0;
        $volumetria4=0;
        $volumetria5=0;
        $volumetria6=0;
        $volumetria7=0;

        if(($valorBusqueda=array_search($viajesPredeterminados[$i][2],$tiendas))!==false)
        {
          $volumetria1=$volumetrias[$valorBusqueda];
          unset($tiendas[$valorBusqueda]);
          unset($volumetrias[$valorBusqueda]);
        }
        if(($valorBusqueda=array_search($viajesPredeterminados[$i][3],$tiendas))!==false)
        {
          $volumetria2=$volumetrias[$valorBusqueda];
          unset($tiendas[$valorBusqueda]);
          unset($volumetrias[$valorBusqueda]);
        }
        if(($valorBusqueda=array_search($viajesPredeterminados[$i][4],$tiendas))!==false)
        {
          $volumetria3=$volumetrias[$valorBusqueda];
          unset($tiendas[$valorBusqueda]);
          unset($volumetrias[$valorBusqueda]);
        }
        if(($valorBusqueda=array_search($viajesPredeterminados[$i][5],$tiendas))!==false)
        {
          $volumetria4=$volumetrias[$valorBusqueda];
          unset($tiendas[$valorBusqueda]);
          unset($volumetrias[$valorBusqueda]);
        }
        if(($valorBusqueda=array_search($viajesPredeterminados[$i][6],$tiendas))!==false)
        {
          $volumetria5=$volumetrias[$valorBusqueda];
          unset($tiendas[$valorBusqueda]);
          unset($volumetrias[$valorBusqueda]);
        }
        if(($valorBusqueda=array_search($viajesPredeterminados[$i][7],$tiendas))!==false)
        {
          $volumetria6=$volumetrias[$valorBusqueda];
          unset($tiendas[$valorBusqueda]);
          unset($volumetrias[$valorBusqueda]);
        }
        if(($valorBusqueda=array_search($viajesPredeterminados[$i][8],$tiendas))!==false)
        {
          $volumetria7=$volumetrias[$valorBusqueda];
          unset($tiendas[$valorBusqueda]);
          unset($volumetrias[$valorBusqueda]);
        }

        $ruta[$contadorRuta]=array($viajesPredeterminados[$i][1],array($viajesPredeterminados[$i][2],$volumetria1),
                    array($viajesPredeterminados[$i][3],$volumetria2),array($viajesPredeterminados[$i][4],$volumetria3),
                    array($viajesPredeterminados[$i][5],$volumetria4),array($viajesPredeterminados[$i][6],$volumetria5),
                    array($viajesPredeterminados[$i][7],$volumetria6),array($viajesPredeterminados[$i][8],$volumetria7));
        $contadorRuta++;

        $tiendas=array_values($tiendas);
        $volumetrias=array_values($volumetrias);
      }
  }


  echo '<h3> RUTA GENERADA:</h3>';
  echo "<table id='ruta' class='table table-striped'>";
  echo        "<thead>";
  echo            "<tr>";
  echo                "<th> Vehiculo </th>";
  echo                "<th> Tienda y Volumetria </th>";
  echo                "<th> Tienda y Volumetria </th>";
  echo                "<th> Tienda y Volumetria </th>";
  echo                "<th> Tienda y Volumetria </th>";
  echo                "<th> Tienda y Volumetria </th>";
  echo                "<th> Tienda y Volumetria </th>";
  echo                "<th> Tienda y Volumetria </th>";
  echo            "</tr>";
  echo        "</thead>";
  echo        "<tbody>";
  for ($i=0;$i<$contadorRuta;$i++)
  {
    echo         "<tr>";
    echo            "<th>". $ruta[$i][0]. "</th>";
    echo            "<th>". $ruta[$i][1][0]. " - ".$ruta[$i][1][1]."</th>";
    echo            "<th>". $ruta[$i][2][0]. " - ".$ruta[$i][2][1]."</th>";
    echo            "<th>". $ruta[$i][3][0]. " - ".$ruta[$i][3][1]."</th>";
    echo            "<th>". $ruta[$i][4][0]. " - ".$ruta[$i][4][1]."</th>";
    echo            "<th>". $ruta[$i][5][0]. " - ".$ruta[$i][5][1]."</th>";
    echo            "<th>". $ruta[$i][6][0]. " - ".$ruta[$i][6][1]."</th>";
    echo            "<th>". $ruta[$i][7][0]. " - ".$ruta[$i][7][1]."</th>";
    echo        "</tr>";
  }
  echo        "</tbody>";
  echo "</table>";

  echo '<h3> TIENDAS SIN INCLUIR EN RUTA:</h3>';

  for($i=0;$i<count($tiendas);$i++)
  {
    if(isset($tiendas[$i]))
    {
      echo'<p>'.$tiendas[$i].'</p>';
    }
  }

  unset($_SESSION['tiendasRuta']);
  unset($_SESSION['volumetriasRuta']);
}

?>
