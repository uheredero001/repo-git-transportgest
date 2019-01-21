<?php
    include "/Applications/MAMP/htdocs/transportgest/DATAACCESS/accesobdUsuario.php";

    $usuarios=getUsers();
    echo "<table id='usersinfo' class='table table-striped'>";
    echo        "<thead>";
    echo            "<tr>";
    echo                "<th> Id </th>";
    echo                "<th> Nick </th>";
    echo                "<th> Nombre </th>";
    echo                "<th> Apellidos </th>";
    echo                "<th> Privilegios </th>";
    echo                "<th> FechaUltAcceso </th>";
    echo            "</tr>";
    echo        "</thead>";
    echo        "<tbody>";


    for ($i=0;$i<mysqli_num_rows($usuarios);$i++)
    {
        $nick=mysqli_fetch_row($usuarios);
        $info=getUserinfo($nick[0]);

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
