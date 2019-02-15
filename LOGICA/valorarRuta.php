<?php
session_start();
if (isset($_POST['valoracion'])&&isset($_SESSION['rutaGenerada']))
{
  include "/Applications/MAMP/htdocs/transportgest/DATAACCESS/accesobdRuta.php";
  $valoracion=$_POST['valoracion'];
  $idruta=$_SESSION['rutaGenerada'];
  if(updateValoracion($idruta,$valoracion)!==0){
      echo "<p> Ha ocurrido algun error con la base de datos.</p>";
  }
  else {
      echo "<p> Valoracion enviada correctamente </p>";
  }

}
unset($_SESSION['rutaGenerada']);


?>
