<?php

require "conexion.php";
$conn = new conexion();


if (!empty($_REQUEST['update'])) {

    $sql = "SELECT * FROM libros where id=$_REQUEST[update];";
    $data = $conn->consultar($sql);
    $conn->consultar($sql);
    
} else {
    $sql = "update libros set titulo='$_REQUEST[titulo]', autor='$_REQUEST[autor]' where id=$_REQUEST[id];";
    $conn = new conexion();
    $conn->ejecutar($sql);
    header("Location: index.php");
}

    
?>

<html>
    <body>
        <form action="update.php?id=<?php echo $data['0']['id'] ?>" method="post">
            Titulo: <input type="text" name="titulo" value="<?php echo $data['0']['titulo'] ?>" required><br>
            Autor: <input type="text" name="autor" value="<?php echo $data['0']['autor'] ?>" required><br>
            <input type="submit" value="Adicionar Libro" name="enviar">
        </form>
    </body>
</html>
