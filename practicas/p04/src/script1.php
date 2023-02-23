<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html;charset=utf-8" />
		<title>Registro Completado</title>
		<style type="text/css">
			body {margin: 20px; 
			background-color: #C4DF9B;
			font-family: Verdana, Helvetica, sans-serif;
			font-size: 90%;}
			h1 {color: #005825;
			border-bottom: 1px solid #005825;}
			h2 {font-size: 1.2em;
			color: #4A0048;}
		</style>
	</head>
	<body>
		<h1>RESPUESTA</h1>

		<?php
			$age = $_POST['edad'];
			$sex = $_POST['sexo'];

			if (!empty($age)&&!empty($sex)){
				if($sex == 'Femenino' || $sex == 'femenino' || $sex == 'FEMENINO' || $sex == 'F' || $sex == 'f'){
					if($age >= 18 && $age <= 35){
						echo "<h1>Bienvenida</h1> Usted es mujer y se encuentra en el rango de edad permitido.";
					}else{
						echo "<h1>Error</h1> Usted es mujer pero NO se encuentra en el rango de edad permitido.";
					}
				}elseif($sex == 'Masculino' || $sex == 'masculino' || $sex == 'Masculino' || $sex == 'M' || $sex == 'm'){
					echo "<h1>Error</h1> El registro para hombres no esta disponible por el momento, intente más tarde";
				}else{
					echo "<h1>Error</h1> Los datos ingresados son incorrectos, intentelo nuevamente";
				}
			}else{
				echo "<h1>Error</h1> Los campos están vacios o incompletos, intentelo nuevamente";
			}
		?>
	</body>
</html>