<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es">

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title>Productos Vigentes</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<script>
            function show() {

                var rowId = event.target.parentNode.parentNode.id;
                var data = document.getElementById(rowId).querySelectorAll(".row-data");

                var id = data[0].innerText;
                var nombre = data[1].innerText;
				var marca = data[2].innerText;
				var modelo = data[3].innerText;
				var precio = data[4].innerText;
				var unidades = data[5].innerText;
				var detalles = data[6].innerText;
				var ruta = data[7].firstChild.getAttribute('src');
				var imagen = ruta.slice(4);

                alert("La siguiente entrada será modificada: \n" + "Nombre: " 
				+ nombre + "\nMarca: " + marca + "\nModelo: " + modelo + "\nPrecio: " + precio
				+ "\nUnidades: " + unidades + "\nDetalles: " + detalles + "\nImagen: " + imagen);
            
				send2form(id, nombre, marca, modelo, precio, unidades, detalles, imagen);
			}
        </script>
	</head>
	<body>

	<?php

		$vigentes = 0;

		@$link = new mysqli('localhost', 'root', 'Oscar.0401', 'marketzone');	

		if ($link->connect_errno){
			die('Falló la conexión: '.$link->connect_error.'<br/>');
		}

		if ( $result = $link->query("SELECT * FROM productos WHERE eliminado = $vigentes")){
			$row = $result->fetch_all(MYSQLI_ASSOC);

			$result->free();

            foreach($row as $num => $registro) {          
                foreach($registro as $key => $value) {   
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
					<th scope="col">Modificar</th>
					</tr>
				</thead>
				<tbody>
                	<?php
                
                    	foreach($data as $key => $value){
					    	echo "<tr id= $value[id]>";
							echo '<th scope=value class= row-data>' . $value["id"] . '</th>';
							echo '<td class= row-data>' . $value["nombre"] . ' </td>';
                     		echo '<td class= row-data>' . $value["marca"] . ' </td>';
                        	echo '<td class= row-data>' . $value["modelo"] . ' </td>';
                        	echo '<td class= row-data>' . $value["precio"] . ' </td>';
                        	echo '<td class= row-data>' . $value["unidades"] . ' </td>';
                        	echo '<td class= row-data>' . $value["detalles"] . ' </td>';
							echo '<td class= row-data>' . "<img width= 100 height= 126 src= $value[imagen] >" . '</td>';
							echo '<td>' . "<input type= button value= Modificar onclick= show() </input>" . '</td>';
					    	echo "</tr>";
                		}
                	?>
				</tbody>
			</table>
		<?php endif; ?>
		<script>
            function send2form(id, nombre, marca, modelo, precio, unidades, detalles, imagen){
                var form = document.createElement("form");

                var idSend = document.createElement("input");
                idSend.type = 'hidden';
                idSend.name = 'id-form';
                idSend.value = id;
                form.appendChild(idSend);

                var nombreIn = document.createElement("input");
                nombreIn.type = 'hidden';
                nombreIn.name = 'nombre-form';
                nombreIn.value = nombre;
                form.appendChild(nombreIn);

				var marcaIn = document.createElement("input");
                marcaIn.type = 'hidden';
                marcaIn.name = 'marca-form';
                marcaIn.value = marca;
                form.appendChild(marcaIn);

				var modeloIn = document.createElement("input");
                modeloIn.type = 'hidden';
                modeloIn.name = 'model-form';
                modeloIn.value = modelo;
                form.appendChild(modeloIn);

				var precioIn = document.createElement("input");
                precioIn.type = 'hidden';
                precioIn.name = 'precio-form';
                precioIn.value = precio;
                form.appendChild(precioIn);

				var unitIn = document.createElement("input");
                unitIn.type = 'hidden';
                unitIn.name = 'unit-form';
                unitIn.value = unidades;
                form.appendChild(unitIn);

				var detailIn = document.createElement("input");
                detailIn.type = 'hidden';
                detailIn.name = 'detail-form';
                detailIn.value = detalles;
                form.appendChild(detailIn);

				var imageIn = document.createElement("input");
                imageIn.type = 'hidden';
                imageIn.name = 'image-form';
                imageIn.value = imagen;
                form.appendChild(imageIn);

                form.method = 'POST';
                form.action = 'http://localhost/tecnologiasweb/practicas/p07/fromulario_productos_v2.php';  

                document.body.appendChild(form);
                form.submit();
            }
        </script>
	</body>
</html>