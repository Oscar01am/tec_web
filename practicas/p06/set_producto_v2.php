<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="es">
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
            $nombre  = $_POST["nom"];
            $marca  = $_POST["marca"];
            $modelo = $_POST["modelo"];
            $precio  = $_POST["precio"];
            $detalles  = $_POST["detalles"];
            $unidades  = $_POST["unidades"];
            $imagen  = $_POST["imagen"];
            
            /** SE CREA EL OBJETO DE CONEXION */
            @$link = new mysqli('localhost', 'root', 'Oscar.0401', 'marketzone');	

            /** comprobar la conexión */
            if ($link->connect_errno) 
            {
                die('Falló la conexión: '.$link->connect_error.'<br/>');
                /** NOTA: con @ se suprime el Warning para gestionar el error por medio de código */
            }

            //ValidacionModelo
            $validaSqlModelo = "SELECT COUNT(*) FROM productos WHERE modelo = '$modelo'";
            $checkExecuteModel = $link->query($validaSqlModelo);
            $fetchCheckModel = $checkExecuteModel->fetch_all()[0][0];
            $resultadoModel = (integer) $fetchCheckModel;

            //validacionMarca
            $validaSqlMarca = "SELECT COUNT(*) FROM productos WHERE marca = '$marca'";
            $checkExecuteMarca = $link->query($validaSqlMarca);
            $fetchCheckMarca = $checkExecuteMarca->fetch_all()[0][0];
            $resultadoMarca = (integer) $fetchCheckMarca;

            /** Crear una tabla que no devuelve un conjunto de resultados */
            $sql = "INSERT INTO productos VALUES (null, '{$nombre}', '{$marca}', '{$modelo}', {$precio}, '{$detalles}', {$unidades}, '{$imagen}')"; 
            if ($resultadoModel >= 1 && $resultadoMarca >= 1){
                echo "<h1>No se ha podido guardar los datos, la marca y modelo ya existen</h1>";
            }else{
                if($link->query($sql))
                {
                    echo "<h1>Producto insertado</h1>";
                    echo 'Producto insertado con ID: '.$link->insert_id;
                    echo '<br><br><strong>NOMBRE: </strong>;' .$nombre;
                    echo '<br><br><strong>MARCA: </strong>;' .$marca;
                    echo '<br><br><strong>MODELO: </strong>;' .$modelo;
                    echo '<br><br><strong>PRECIO: </strong>;' .$precio;
                    echo '<br><br><strong>DETALLE: </strong>;' .$detalles;
                    echo '<br><br><strong>UNIDADES: </strong>;' .$unidades;
                    echo '<br><br><strong>IMAGEN: </strong>;' .$imagen ;
                    echo '<br><br><strong>ESTATUS: 0</strong>';
                }
                else
                {
                    echo "<h1>El producto no pudo ser insertado </h1>";
                }
            }
            $link->close();
        ?>
	</body>
</html>