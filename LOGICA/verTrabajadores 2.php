<?php
    include "/Applications/MAMP/htdocs/transportgest/DATAACCESS/accesobdTrabajador.php";

    $trabajadores=getWorkersDni();
    echo "<table id='workersinfo' class='table table-striped'>";
    echo        "<thead>";
    echo            "<tr>";
    echo                "<th> Id </th>";
    echo                "<th> Dni </th>";
    echo                "<th> Nombre </th>";
    echo                "<th> Apellidos </th>";
    echo                "<th> Puesto Trabajo</th>";
    echo                "<th> Telf Personal</th>";
    echo            "</tr>";
    echo        "</thead>";
    echo        "<tbody>";


    for ($i=0;$i<mysqli_num_rows($trabajadores);$i++)
    {
        $dni=mysqli_fetch_row($trabajadores);
        $info=getWorkerInfo($dni[0]);

        echo         "<tr>";
        echo            "<th>". $info[0]. "</th>";
        echo            "<th>". $info[1]. "</th>";
        echo            "<th>". $info[2]. "</th>";
        echo            "<th>". $info[3]. "</th>";
        echo            "<th>". $info[4]. "</th>";
        echo            "<th>". $info[5]. "</th>";
        echo        "</tr>";
    }

    echo        "</tbody>";
    echo "</table>";
?>
