<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html;charset=utf-8" />
		<title>Registro</title>
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
        <?php
            $nombre  = $_POST['form-name2'];
            $marca  = $_POST['form-marca2'];
            $modelo = $_POST['form-model2'];
            $precio  = $_POST['form-price2'];
            $detalles  = $_POST['form-detail2'];
            $unidades  = $_POST['form-unit2'];
            $imagen  = $_POST['form-image2'];
            $id = $_POST['id-form'];
        
            /** SE CREA EL OBJETO DE CONEXION */
            @$link = new mysqli('localhost', 'root', 'Oscar.0401', 'marketzone');	

            /** comprobar la conexión */
            if ($link->connect_errno){
                die('Falló la conexión: '.$link->connect_error.'<br/>');
            }

            $sqlUpdate = "UPDATE productos SET nombre='$nombre', marca='$marca', modelo='$modelo', precio='$precio', detalles='$detalles', unidades='$unidades', imagen='$imagen' WHERE id='$id'";

                if($link->query($sqlUpdate)){
                    echo "<h1>Se ha actualizado correctamente el funko con ID: $id</h1>";
                    echo "<h3>Nuevos Datos:</h3>";
                    echo 'Nombre: '.$nombre;
                    echo "</br>";
                    echo 'Marca: '.$marca;
                    echo "</br>";
                    echo 'Modelo: '.$modelo;
                    echo "</br>";
                    echo 'Precio: $ '.$precio;
                    echo "</br>";
                    echo 'Detalles: '.$detalles;
                    echo "</br>";
                    echo 'Unidades: '.$unidades;
                    echo "</br>";
                    echo 'Ruta de la imagen: '.$imagen;
                }else{
                    echo "<h1>El producto no pudo ser actualizado</h1>";
                }

            $link->close();
        ?>
	</body>
</html>