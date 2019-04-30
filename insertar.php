<?php
    require "conexion.php";
    extract($_REQUEST);
    if(isset($_REQUEST['enviar'])){
        $strSQL = "insert into libros (titulo, autor) values";
        $strSQL.= "('{$titulo}', '{$autor}')";
        
        $conn = new conexion();
        $conn->ejecutar($strSQL);
        header("Location: index.php");
    }
        
?>
<html>
    <body>
        <form action="insertar.php" method="post">
            Titulo: <input type="text" name="titulo" required><br>
            Autor: <input type="text" name="autor" required><br>
            <input type="submit" value="Adicionar Libro" name="enviar">
        </form>
    </body>
</html>