<?php
    require "conexion.php";
    
    extract($_REQUEST);
        $strSQL = "DELETE FROM libros ";
        $strSQL.= "WHERE id=".$_REQUEST['delete'].";";
        
        $conn = new conexion();
        $conn->ejecutar($strSQL);
        header("Location: index.php");
?>
