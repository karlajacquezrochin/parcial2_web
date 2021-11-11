<?php 

        echo $nombre_alumno =$_POST['nombre_alumno'];
        echo $nombre_alumno=$_POST['nombre_alumno'];
        echo $grupo =  $_POST['grupo'];
        $fecha = $_POST['fecha'];
        $pregunta1 = $_POST['pregunta1'];
        $pregunta2 = $_POST['pregunta2'];
        $pregunta3 = $_POST['pregunta3'];
        $pregunta4 = $_POST['pregunta4'];
        $pregunta5 = $_POST['pregunta5'];
        $pregunta6 = $_POST['pregunta6'];
        $pregunta7 = $_POST['pregunta7'];
        $pregunta8 = $_POST['pregunta8'];
        $pregunta9 = $_POST['pregunta9'];
        $pregunta10 = $_POST['pregunta10'];
        $cont = 6;
        






// ------------------------------------------------
        if($pregunta1 == "a"){
            $pregunta1 = "Bosque";
        }elseif ($pregunta1 == "b") {
            $pregunta1 = "Arboles";
        }elseif ($pregunta1 == "c") {
            $pregunta1 = "Conjunto de las cosas que existen en el mundo o que se producen o modifican sin intervención del ser humano";
        }
// -----------------------------------------------
        if ($pregunta2 == 'a') {
            $pregunta2 = 'agua,aire,cielo';
        }elseif ($pregunta2 == 'b') {
            $pregunta2 = 'naturaleza';
        }elseif ($pregunta2 == 'c') {
            $pregunta2 = 'Separa la basura,Apaga las luces,Evita dejar los aparatos enchufados,Cierra los grifos correctamente y cuida el agua,ahorra y usa de una forma eficiente el agua cerrando el grifo';
        }
// -----------------------------------------------
        if ($pregunta3 == 'a') {
            $pregunta3 = 'energias';
        }elseif ($pregunta3 == 'b') {
            $pregunta3 = 'Desarrollo sostenible';
        }elseif ($pregunta3 == 'c') {
            $pregunta3 = 'Naturaleza';
        }
// -----------------------------------------------
        if ($pregunta4 == 'el calentamiento global') {
            $pregunta4 = 'EL CALENTAMIENTO GLOBAL';
        }
// -----------------------------------------------
        if ($pregunta5 == 'dengue') {
            $pregunta5 = 'DENGUE';
        }
// -----------------------------------------------
        if ($pregunta6 == 'a') {
            $pregunta6 = 'Japon';
        }elseif ($pregunta6 == 'b') {
            $pregunta6 = 'Mexico';
        }elseif ($pregunta6 == 'c') {
            $pregunta6 = 'Inglaterra';
        }
// -----------------------------------------------
        for ($i=0; $i < count($pregunta7); $i++) { 
            if($i==0){
                $respuesta7 = $pregunta7[$i].',';
            }elseif ($i == count($pregunta7)-1) {
                $respuesta7 = $respuesta7.$pregunta7[$i];  
            }else {
                $respuesta7 = $respuesta7 . $pregunta7[$i];
            }
        }if ($respuesta7 == "El petroleo") {
            $estado7 = "Correcto";
        }else{
            $estado7 = "";
        }
// -----------------------------------------------
        for ($i=0; $i < count($pregunta8); $i++) { 
            if($i==0){
                $respuesta8 = $pregunta8[$i].',';
            }elseif ($i == count($pregunta8)-1) {
                $respuesta8 = $respuesta8.$pregunta8[$i];  
            }else {
                $respuesta8 = $respuesta8 . $pregunta8[$i];
            }
        }if ($respuesta8 == "Geotermica") {
            $estado8 = "Correcto";
        }else{
            $estado8 = "Incorrecto";
        }
// -----------------------------------------------
        for ($i=0; $i < count($pregunta9); $i++) { 
            if($i==0){
                $respuesta9 = $pregunta9[$i].',';
            }elseif ($i == count($pregunta9)-1) {
                $respuesta9 = $respuesta9.$pregunta9[$i];  
            }else {
                $respuesta9 = $respuesta9 . $pregunta9[$i];
            }
        }if ($respuesta9 == "Energia utiliza los recursos inagotable de la naturaleza") {
            $estado9 = "Correcto";
        }else{
            $estado9 = "Incorrecto";
        }
// -----------------------------------------------

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Resultados</title>
</head>
<body>
    <nav class="navbar navbar-dark bg-dark">
		<span class="navbar-brand mb-8 h1" style="margin:auto">Calificación: <?php echo $cont; ?></span>
	</nav>
    <nav class="navbar navbar-light bg-light">
    <span class="navbar-brand mb-8 h1" style="margin:auto">Grupo: <?php echo $grupo; ?></span>
    <span class="navbar-brand mb-8 h1" style="margin:auto">Nombre: <?php echo $nombre_alumno; ?></span>
    <span class="navbar-brand mb-8 h1" style="margin:auto">Fecha: <?php echo $fecha; ?></span>
	</nav>
	<br>
    <div class="container">
        <div class="row">
            <div class="col-sm-3"><H6><b>PREGUNTA</H6></b></div>
            <div class="col-sm-3"><H6><b>RESPUESTA</H6></b></div>
            <div class="col-sm-3"><h6><b>ESTADO</h6></b></div>
            <div class="col-sm-3"><h6><b>RESPUESTA CORRECTA</h6></b></div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-3"><H6>1.- ¿Qué es la naturaleza? </H6></div>
            <div class="col-sm-3"><H6><?php echo $pregunta1; ?></H6></div>
            <div class="col-sm-3"><h6><?php if($pregunta1 == "Conjunto de las cosas que existen en el mundo o que se producen o modifican sin intervención del ser humano"){ echo "Correcto"; $cont++;}else{ echo "Incorrecto";} ?></h6></div>
            <div class="col-sm-3"><h6></h6></div>
            <label for="exampleFormControlSelect1">Selecciona tu respuesta</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                      <option>Conjunto de las cosas que existen en el mundo o que se producen o modifican sin intervención del ser humano</option>
                      <option>LOS ARBOLES</option>
                      <option>LA ARENA</option>
                      <option>LAS ENERGIAS</opttion>
                    </select>
                  </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-3"><H6>6.-Menciona 5 acciones para cuidar al medio ambiente</H6></div>
            <div class="col-sm-3"><h6><?php if($pregunta2 == "import"){ echo "Correcto"; }else { echo "Incorrecto";} ?></h6></div>
            <label for="exampleFormControlSelect1">Selecciona tu respuesta</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                      <option>NO SE </option>
                      <option>LA BASURA</option>
                      <option>Separa la basura,Apaga las luces,Evita dejar los aparatos enchufados,Cierra los grifos correctamente y cuida el agua,ahorra y usa de una forma eficiente el agua cerrando el grifo</option>
                      <option>LAS ENERGIAS</opttion>
                    </select>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-3"><H6>3.- Es un modelo de desarrollo que podemos mantener y apoyar:</H6></div>
            <div class="col-sm-3"><H6><?php echo $pregunta3; ?></H6></div>
            <div class="col-sm-3"><h6><?php if($pregunta3 == "método"){ echo "Correcto"; $cont++; }else { echo "Incorrecto";} ?></h6></div>
            <label for="exampleFormControlSelect1">Selecciona tu respuesta</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                      <option>LAS ENERGIAS</option>
                      <option>DESARROLLO SOSTENIBLE</option>
                      <option>NO SE</option>
                      <option>LAS ENERGIAS</opttion>
                    </select>
        <br>
        <div class="row">
            <div class="col-sm-3"><H6>4.-Es uno de los principales problemas del medio ambiente </H6></div>
            <div class="col-sm-3"><H6><?php echo $pregunta4; ?></H6></div>
            <div class="col-sm-3"><h6><?php if($pregunta4 == "PHP") { echo "Correcto"; $cont++; }else{ echo "Incorrecto"; } ?></h6></div>
            <div class="col-sm-3"><h6>El calentamiento global</h6></div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-3"><H6>5.-Enfermedad que causa el cambio climatico </H6></div>
            <div class="col-sm-3"><H6><?php echo $pregunta5; ?></H6></div>
            <div class="col-sm-3"><h6><?php if($pregunta5 == "HTML") { echo "Correcto"; $cont++; }else{ echo "Incorrecto"; } ?></h6></div>
            <div class="col-sm-3"><h6>Dengue</h6></div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-3"><H6>6.-Menciona uno de los paises mas afectados por el cambio de clima</H6></div>
            <div class="col-sm-3"><H6><?php echo $pregunta6; ?></H6></div>
                  </div>
                </form>
            </div>
        </div>
            <div class="col-sm-3"><h6><?php if($pregunta6 == "Japon") { echo "Correcto"; $cont++; }else{ echo "Incorrecto"; } ?></h6></div>
            <div class="col-sm-3"><h6>Japon</h6></div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-3"><H6>7.-¿Cual es una de las energias no renovables?</H6></div>
            <div class="col-sm-3"><H6><?php for ($i=0; $i < count($pregunta7); $i++) { echo $pregunta7[$i] .  ','; }?></H6></div>
            <div class="col-sm-3"><h6><?php echo $estado7; ?></h6></div>
            <div class="col-sm-3"><h6>El petroleo</h6></div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-3"><H6>8.-¿Cual es una de las energias renovables?</H6></div>
            <div class="col-sm-3"><H6><?php for ($i=0; $i < count($pregunta8) ; $i++) { echo $pregunta8[$i] . ','; } ?></H6></div>
                    <label for="exampleFormControlSelect1">Selecciona tu respuesta</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                      <option>Carbon</option>
                      <option>Gas natural</option>
                      <option>Geotermica</option>
                      <option>Petroleo</opttion>
                    </select>
                  </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-3"><H6>9.-¿Que es energia renovable?</H6></div>
            <div class="col-sm-3"><H6><?php for ($i=0; $i < count($pregunta9) ; $i++) { echo $pregunta9[$i] . ','; } ?>
            </H6></div>
             <label for="exampleFormControlSelect1">Selecciona tu respuesta</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                      <option>Energia que se utiliza</option>
                      <option>una energia</option>
                      <option>Energia utiliza los recursos inagotable de la naturaleza</option>
                      <option>fuentes naturales</opttion>
                    </select>
            <div class="col-sm-3"><h6><?php echo $estado9; ?></h6></div>
            <div class="col-sm-3"><h6></h6></div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-3"><H6>10.-¿Cual es la importancia de la energia no renovable?</H6></div>
            <div class="col-sm-3"><H6><?php echo $pregunta10; ?></H6></div>
            <div class="col-sm-3"><h6><?php if($pregunta10 == "1998-12-04"){ echo "Correcto";}else{ echo "Incorrecto";} ?></h6></div>
           <label for="exampleFormControlSelect1">Selecciona tu respuesta</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                      <option>es rentable</option>
                      <option>es facil</option>
                      <option>ninguna</option>
                      <option>No se proponen en corto periodo</opttion>
                    </select>
        </div>
    </div>
</body>
</html>