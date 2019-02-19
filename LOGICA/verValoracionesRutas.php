<?php
include "/Applications/MAMP/htdocs/transportgest/DATAACCESS/accesobdRuta.php";

$rutas=getAllRutas();
echo "<table id='usersinfo' class='table table-striped'>";
echo        "<thead>";
echo            "<tr>";
echo                "<th> Id </th>";
echo                "<th> Fecha </th>";
echo                "<th> Hora </th>";
echo                "<th> Valoracion </th>";
echo                "<th> GeneradaPor </th>";
echo            "</tr>";
echo        "</thead>";
echo        "<tbody>";


for ($i=0;$i<mysqli_num_rows($rutas);$i++)
{
    $info=mysqli_fetch_row($rutas);

    echo         "<tr>";
    echo            "<th>". $info[0]. "</th>";
    echo            "<th>". $info[1]. "</th>";
    echo            "<th>". $info[2]. "</th>";
    echo            "<th>". $info[3]. "</th>";
    echo            "<th>". $info[5]. "</th>";
    echo        "</tr>";
}

echo        "</tbody>";
echo "</table>";
?>
