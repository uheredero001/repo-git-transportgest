<?php
    include "/Applications/MAMP/htdocs/transportgest/DATAACCESS/accesobdVehiculo.php";

    $vehiculos=getVehicles();
    echo "<table id='usersinfo' class='table table-striped'>";
    echo        "<thead>";
    echo            "<tr>";
    echo                "<th> Id </th>";
    echo                "<th> Matricula </th>";
    echo                "<th> Tipo </th>";
    echo                "<th> Año Matriculacion </th>";
    echo                "<th> Proxima Itv </th>";
    echo                "<th> Capacidad </th>";
    echo                "<th> Telefono </th>";
    echo                "<th> Email </th>";
    echo            "</tr>";
    echo        "</thead>";
    echo        "<tbody>";


    for ($i=0;$i<mysqli_num_rows($vehiculos);$i++)
    {
        $matricula=mysqli_fetch_row($vehiculos);
        $info=getVehicleInfo($matricula[0]);

        echo         "<tr>";
        echo            "<th>". $info[0]. "</th>";
        echo            "<th>". $info[1]. "</th>";
        echo            "<th>". $info[2]. "</th>";
        echo            "<th>". $info[3]. "</th>";
        echo            "<th>". $info[4]. "</th>";
        echo            "<th>". $info[5]. "</th>";
        echo            "<th>". $info[6]. "</th>";
        echo            "<th>". $info[7]. "</th>";
        echo        "</tr>";
    }

    echo        "</tbody>";
    echo "</table>";
?>
