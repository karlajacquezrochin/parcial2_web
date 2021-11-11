<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Detalle de registro</title>
</head>
<body>
<?php 

	$registros = array(
		array("id" => 1, "nombre" => "Karla", "edad" => 17, "sexo" => "F"),
		array("id" => 2, "nombre" => "Carlos", "edad" => 35, "sexo" => "M"),
		array("id" => 3, "nombre" => "Lupita", "edad" => 12, "sexo" => "F"),
		array("id" => 4, "nombre" => "Romina", "edad" => 20,"sexo" => "F"),
		array("id" => 5, "nombre" => "Alejandro", "edad" => 47, "sexo" => "M"),
		array("id" => 6, "nombre" => "Abraham", "edad" => 63, "sexo" => "M"),
	);

	

	if (isset($_GET["id"])) {
		$id = $_GET["id"] - 1;
		echo "<h1>Datos de la persona</h1><hr>";
		echo "ID: ". $_GET["id"] . "<br>";
		echo "Nombre: ". $registros[$id]["nombre"] . "<br>";
		echo "edad: ". $registros[$id]["edad"] . "<br>";
		echo "sexo: ". $registros[$id]["sexo"] . "<br>";
	}
	else
	{
		echo "<h1>El dato de ID es requerido</h1>";
	}
	echo "<h1>Nombre: Jacquez Rochin Karla De Jesus 5AVP</h1>";
 ?>
</body>
</html>