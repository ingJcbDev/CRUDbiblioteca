<?php
	require "conexion.php";
	$conn = new conexion();

	$sql ="SELECT * FROM libros";
	$data = $conn->consultar($sql);
	$conn->consultar($sql);

?>
<html>
	<head></head>
	<body>
		<ul>
			<li><a href="insertar.php">Insertar</a></li>
			<li><a href="consultar.php">Consultar</a></li>
		</ul>
		<table border="1">
			<tr>
				<ht>Titulo</th>
				<ht>Auctor</th>			
			</tr>
			<?php foreach ($data as $fila) {?>
			<tr>
				<td><?php echo $fila['titulo'] ?></td>
				<td><?php echo $fila['autor'] ?></td>
                                <td><a href="update.php?update=<?php echo $fila['id'] ?>">Editar</a></td>
                                <td><a href="javascript:borrar(<?php echo $fila['id'] ?>)">Borrar</a></td>
			</tr>
			<?php } ?>
		</table>
<script>
    function borrar(id){
        if(confirm("Seguro desea borrar el libro?")){
            location = "delete.php?delete="+id;
        }
    }
</script>
	</body>
</html>

