<?php
    if(isset($_FILES['rutero'])){
      if($_FILES['rutero']['error']==0){
        //LEEMOS FICHERO EXCEL / RUTERO
        include '/Applications/MAMP/htdocs/transportgest/PHPExcel-1.8/Classes/PHPExcel/IOFactory.php';
        $nombreFichero=$_FILES['rutero']['tmp_name'];
        $lectorExcel= PHPExcel_IOFactory::createReaderForFile($nombreFichero);

        $lectorExcel->setReadDataOnly();

        $lectorExcel->setLoadAllSheets();

        $objetoExcel= $lectorExcel->load($nombreFichero);

        $objetoExcel->setActiveSheetIndexByName('Oiztrans');

        $hojaExcel=$objetoExcel->getActiveSheet();

        $row_index = $hojaExcel->getHighestRow();
        $col_name = $hojaExcel->getHighestColumn();
        $col_index = PHPExcel_Cell::columnIndexFromString($col_name);
        $datos=array();
        for($row =0; $row <= $row_index; $row++){
               for($col=0; $col<=$col_index; $col++){
                 //echo $hojaExcel->getCellByColumnAndRow($col, $row)->getValue().' ';
                   $datos[$row][$col]=$hojaExcel->getCellByColumnAndRow($col, $row)->getValue();
               }

           }
          $_SESSION['datosRuta']=$datos;
          echo '<h4> FICHERO CARGADO CORRECTAMENTE </h4>';
      }
      else{
          echo '<h3> HA HABIDO ALGUN ERROR EN LA CARGA DEL FICHERO </h3>';
      }

    }
?>
