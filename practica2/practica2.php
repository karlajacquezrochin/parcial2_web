<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Practica 2. PHP dentro de HTML</title>
</head>
<body>
	<?php
		$numero= rand(1,4);
		$color = ["#e1bdff", "#ff5733 ", "#33ff58 ", "#ff33e6"];
		$numcolor = rand(0,3);
		echo "Numero generado = " . $numero ."<br>"; 
		echo "<div style='color:".$color[$numcolor]."'>color generado</div>";

		if ($numero == 1) {	
	?>
		<h1 style="color: <?php echo $color[$numcolor]; ?> ">Titulo de la pagina 1</h1>

	<?php } elseif($numero == 2) { ?>

		<h2 style="color: <?php echo $color[$numcolor]; ?> ">Titulo 2 de la pagina</h2>

	<?php }elseif ($numero == 3) { ?>
	
		<h3 style="color: <?php echo $color[$numcolor]; ?> ">Titulo 3 de la pagina</h3>

	<?php }else { ?>

			<h4 style="color: <?php echo $color[$numcolor]; ?> ">Titulo 4 de la pagina </h4>

	<?php }
	echo "<h1>Nombre: Jacquez Rochin Karla Des 5AVP</h1>"; ?>
</body>
</html>