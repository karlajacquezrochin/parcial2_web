<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Práctica 5. Intercambio de variable PHP</title>
</head>
<body>
	<?php 
		$registros = array(
			array("id" => 1, "nombre" => "Karla", "edad" => 17, "sexo" => "F"),
			array("id" => 2, "nombre" => "Carlos", "edad" => 35, "sexo" => "M"),
			array("id" => 3, "nombre" => "Lupita", "edad" => 12, "sexo" => "F"),
			array("id" => 4, "nombre" => "Romina", "edad" => 20, "sexo" => "F"),
			array("id" => 5, "nombre" => "Alejandro", "edad" => 47, "sexo" => "M"),
			array("id" => 6, "nombre" => "Abraham", "edad" => 63, "sexo" => "M"),
		);
	?>
	<h1>Tabla de registros</h1><hr>
	<table border=1>
		<thead>
			<tr>
				<td>ID</td>
				<td>Nombre</td>
				<td>Edad</td>
				<td>Sexo</td>
				<td>Detalle</td>
			</tr>
		</thead>
		<tbody>
			<?php 
				for ($i=0; $i < count($registros); $i++) { 
					echo "<tr>";
						echo "<td>".$registros[$i]["id"]."</td>";
						echo "<td>".$registros[$i]["nombre"]."</td>";
						echo "<td>".$registros[$i]["edad"]."</td>";
						echo "<td>".$registros[$i]["sexo"]."</td>";
						echo "<td><a href='practica5_detalle.php?id=".$registros[$i]["id"]."'>Ver detalle</a></td>";
					echo "</tr>";
				}
				echo "<h1>Nombre: Jacquez Rochin Karla De Jesus 5AVP</h1>"; 	
				?>
		</tbody>
	</table>
</body>
</html>