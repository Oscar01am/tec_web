<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es">

<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title>Producto Vigentes</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	</head>
	<body>
    <?php
		$vigentes = 0;
		
		/** SE CREA EL OBJETO DE CONEXION */
		@$link = new mysqli('localhost', 'root', 'Oscar.0401', 'marketzone');	

		/** comprobar la conexión */
		if ($link->connect_errno) 
		{
			die('Falló la conexión: '.$link->connect_error.'<br/>');
			    /** NOTA: con @ se suprime el Warning para gestionar el error por medio de código */
		}

		/** Crear una tabla que no devuelve un conjunto de resultados */
		if ( $result = $link->query("SELECT * FROM productos WHERE eliminado = $vigentes") )
		{
			$row = $result->fetch_all(MYSQLI_ASSOC);
			/** útil para liberar memoria asociada a un resultado con demasiada información */
			$result->free();

            foreach($row as $num => $registro) {            // Se recorren tuplas
                foreach($registro as $key => $value) {      // Se recorren campos
                    $data[$num][$key] = utf8_encode($value);
                }
            }
            
		}

		$link->close();
	?>

		<h3>PRODUCTOS VIGENTES</h3>

		<br/>
		
		<?php if( isset($row) ) :            ?>

			<table class="table">
				<thead class="thead-dark">
					<tr>
					<th scope="col">#</th>
					<th scope="col">Nombre</th>
					<th scope="col">Marca</th>
					<th scope="col">Modelo</th>
					<th scope="col">Precio</th>
					<th scope="col">Unidades</th>
					<th scope="col">Detalles</th>
					<th scope="col">Imagen</th>
					</tr>
				</thead>
				<tbody>
                <?php
                
                    foreach($data as $key => $value){
					    echo '<tr>';
						echo '<th scope=value>' . $value["id"] . '</th>';
						echo '<td>' . $value["nombre"] . ' </td>';
                        echo '<td>' . $value["marca"] . ' </td>';
                        echo '<td>' . $value["modelo"] . ' </td>';
                        echo '<td>' . $value["precio"] . ' </td>';
                        echo '<td>' . $value["unidades"] . ' </td>';
                        echo '<td>' . $value["detalles"] . ' </td>';
						echo '<td>' . "<img width= 100 height= 126 src= $value[imagen] >" . '</td>';
					    echo "</tr>";
                }
                ?>
				</tbody>
			</table>

		<?php elseif(!empty($id)) : ?>

			 <script>
                alert('El ID del producto no existe');
             </script>

		<?php endif; ?>
	
</body>
</html>