<?php
if (isset($_SESSION['tiendasRuta'])&&isset($_SESSION['volumetriasRuta']))
{
  $tiendas=$_SESSION['tiendasRuta'];
  $volumetrias=$_SESSION['volumetriasRuta'];
  unset($_SESSION['tiendasRuta']);
  unset($_SESSION['volumetriasRuta']);

  //Distribuimos cargas en los camiones que esten en Circulacion (algoritmo)

  for ($j=0;$j<count($tiendas);$j++)
  {
    
  }

}

?>
