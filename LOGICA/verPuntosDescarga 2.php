<?php
    include "/Applications/MAMP/htdocs/transportgest/DATAACCESS/accesobdLugarDescarga.php";

    $puntos=getLugaresDescarga();
    echo "<table id='infoPuntos' class='table table-striped'>";
    echo        "<thead>";
    echo            "<tr>";
    echo                "<th> Id </th>";
    echo                "<th> Nombre </th>";
    echo                "<th> Direccion </th>";
    echo                "<th> Poblacion </th>";
    echo                "<th> Provincia </th>";
    echo                "<th> HInicio </th>";
    echo                "<th> HFin </th>";
    echo            "</tr>";
    echo        "</thead>";
    echo        "<tbody>";


    for ($i=0;$i<mysqli_num_rows($puntos);$i++)
    {
        $nombre=mysqli_fetch_row($puntos);
        $info=getLugarDescargaInfo($nombre[0]);


        echo         "<tr>";
        echo            "<th>". $info[0]. "</th>";
        echo            "<th>". $info[1]. "</th>";
        echo            "<th>". $info[2]. "</th>";
        echo            "<th>". $info[3]. "</th>";
        echo            "<th>". $info[4]. "</th>";
        echo            "<th>". $info[5]. "</th>";
        echo            "<th>". $info[6]. "</th>";
        echo        "</tr>";
    }

    echo        "</tbody>";
    echo "</table>";
?>
