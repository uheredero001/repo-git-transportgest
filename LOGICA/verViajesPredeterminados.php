<?php
    include "/Applications/MAMP/htdocs/transportgest/DATAACCESS/accesobdViajePredeterminado.php";

    $viajes=getViajes();
    echo "<table id='viajesinfo' class='table table-striped'>";
    echo        "<thead>";
    echo            "<tr>";
    echo                "<th> Id </th>";
    echo                "<th> Vehiculo </th>";
    echo                "<th> Carga1 </th>";
    echo                "<th> Carga2 </th>";
    echo                "<th> Carga3 </th>";
    echo                "<th> Carga4 </th>";
    echo                "<th> Carga5</th>";
    echo                "<th> Carga6 </th>";
    echo                "<th> Carga7 </th>";
    echo            "</tr>";
    echo        "</thead>";
    echo        "<tbody>";


    for ($i=0;$i<mysqli_num_rows($viajes);$i++)
    {
        $viaje=mysqli_fetch_row($viajes);
        $info=getViajePredeterminadoInfo($viaje[0]);

        echo         "<tr>";
        echo            "<th>". $info[0]. "</th>";
        echo            "<th>". $info[1]. "</th>";
        echo            "<th>". $info[2]. "</th>";
        echo            "<th>". $info[3]. "</th>";
        echo            "<th>". $info[4]. "</th>";
        echo            "<th>". $info[5]. "</th>";
        echo            "<th>". $info[6]. "</th>";
        echo            "<th>". $info[7]. "</th>";
        echo            "<th>". $info[8]. "</th>";
        echo        "</tr>";
    }

    echo        "</tbody>";
    echo "</table>";
?>
