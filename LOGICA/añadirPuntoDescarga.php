<?php
    include "/Applications/MAMP/htdocs/transportgest/DATAACCESS/accesobdLugarDescarga.php";

    if (isset($_POST['nombre'])&&isset($_POST['direccion'])&&isset($_POST['poblacion'])&&isset($_POST['provincia'])
          &&isset($_POST['hinicio'])&&isset($_POST['hfin']))
    {
      $nombre=$_POST['nombre'];
      $direccion=$_POST['direccion'];
      $poblacion=$_POST['poblacion'];
      $provincia=$_POST['provincia'];
      $hinicio=$_POST['hinicio'];
      $hfin=$_POST['hfin'];

       if(existLugarDescarga($nombre)>0)
       {
         echo "Ya existe el punto de descarga que desea introducir: ". $nombre;
       }
       else {
          if(insertLugarDescarga($nombre,$direccion,$poblacion,$provincia,$hinicio,$hfin)==0)
          {
            echo "Punto de descarga ". $nombre ." añadido correctamente.";
          }
          else {
            echo "Ha ocurrido algun error con la base de datos.";
          }
       }
    }

?>
