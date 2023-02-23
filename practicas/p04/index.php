<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Práctica 3</title>
    <style type="text/css">
      ol { 
      list-style-type: none;
      }
    </style>
</head>
<body>
    <?php
    require_once __DIR__.'/src/funciones.php';
    ?>
    <div>
        <h3>Ejercicio 1</h3>
        <p>Escribir programa para comprobar si un número es un múltiplo de 5 y 7.</p>
        <p>
            R:
            <?php
            if (!empty($_GET['numero'])) {
                $numero = $_GET['numero'];
                echo multiplo5y7($numero);
            } else {
                echo '(vacio)';
            }
            ?>
<div>
        <h3>Ejercicio 2</h3>
        <p>
            Crea un programa para la generación repetitiva de 3 números aleatorios hasta obtener una secuencia compuesta por:
            <br><strong>impar, par, impar</strong>
        </p>
        <p>
            R: <br>
            <?php
             $ejercicio2 = matriz(1,3,100,999);
             //$ejercicio2($a,$b,$min,$max);
            ?>
        </p>
    </div>
    <hr>
    <div>
        <h3>Ejercicio 3</h3>
        <p>Utiliza un ciclo <strong>while</strong> para encontrar el primer número entero obtenido aleatoriamente, pero que además sea múltiplo de un número dado.</p>
        <p>
            R:
            <?php
             if (!empty($_GET['numero'])) {
                $numero = $_GET['numero'];
                echo cicloWhile($numero);
            } else {
                echo '(vacio)';
            }
            ?>
            </br>
        <strong>Crear una variante de este script utilizando el ciclo do-while:</strong>
            <?php
            if (!empty($_GET['numero'])) {
                $numero = $_GET['numero'];
                echo cicloDoWhile($numero);
            } else {
                echo 'No existen parametros en la URL';
            }
            ?>
        </p>
    </div>
    <hr>
    <div>
        <h3>Ejercicio 4</h3>
        <p>Crear un arreglo cuyos <strong>índices</strong> van de 97 a 122 y cuyos <strong>valores</strong> son las letras de la 'a' a la 'z'. Usa la función <strong>chr(n)</strong> que devuelve el caracter cuyo código ASCII es <strong>n</strong> para poner el valor en cada índice. Es decir:</p>
        <p>
            [97] => a <br>
            [98] => b <br>
            [99] => c <br>
            … <br>
            [122] => z
        </p>
        <p>
            R:
            <?php
            $tabla = '<table border>';
            foreach(codeAscii() as $key => $value){
                //$tabla .= '<tr>';
                $tabla .= '<td>' . $key . ' => ' . $value . '</td>';
                //$tabla .= '</tr>';
            }
            $tabla .= '</table>';
            echo $tabla;
            ?>
        </p>
    </div>
    <hr>
    <div>
        <h3>Ejercicio 5</h3>
        <p>
            Usar las variables <strong>$edad</strong> y <strong>$sexo</strong> en una instrucción if para identificar una persona de sexo "femenino", 
            cuya edad oscile entre los 18 y 35 años y mostrar un mensaje de bienvenida apropiado. Por ejemplo:
        </p>
        <p>
            <em>Bienvenida, usted está en el rango de edad permitido.</em>
        </p>
        <p>
            En caso contrario, deberá devolverse otro mensaje indicando el error.
        </p>
        <ul>
            <li>Los valores para $edad y $sexo se deben obtener por medio de un formulario en HTML.</li>
            <li>Utilizar el la Variable Superglobal $_POST (revisar documentación).</li>
        </ul>
        <p>
            R:
            <style>
            fieldset {background-color: #adc2ce;}
            legend {background-color: #118ab2 ;color: #f1faee;padding: 5px 10px;}
            input {margin: 5px;}
            </style>
        </p>
        <form id="form" action="./src/script1.php" method="post">
        <fieldset>
            <legend>Información Personal</legend>
            <ol>
            <li><label>Edad:</label> <input type="text" name="edad"></li>
            <li><label>Sexo:</label> <input type="text" name="sexo"></li>
            </ol>
        </fieldset>
        <p>
            <input type="submit" value="¡OK!">
        </p>
        </form>
    </div>
    <hr>
    <div>
        <h3>Ejercicio 6</h3>
        <p>
        Crea en código duro un arreglo asociativo que sirva para registrar el parque vehicular de
        una ciudad. Cada vehículo debe ser identificado por:
        </p>
        <ul>
            <li>Matricula.</li>
            <li>Auto (Marca, Modelo, Tipo)</li>
            <li>Propietario (Nombre, Ciudad, Dirección)</li>
        </ul>
        <p>
        La matrícula debe tener el siguiente formato LLLNNNN, donde las L pueden ser letras de
        la A-Z y las N pueden ser números de 0-9.
        </br>
        Usa print_r para mostrar la estructura general del arreglo.
        </p>
        <p>
            R:
            <?php
            $parqueVehicular = array();

            $parqueVehicular['ABC1234'] = array(
                'Auto' => array(
                    'Marca' => "Audi",
                    'Modelo'  => "A4",
                    'Tipo'  => "Sedán"
                ),
                'Propietario' => array(
                    'Nombre' => "Oscar Díaz Amaro",
                    'Ciudad'  => "Puebla, Pue.",
                    'Direccion'  => "Agricola ignacio zaragoza 36 lt 41."
                )
            );
            $parqueVehicular['XYZ5678'] = array(
                'Auto' => array(
                    'Marca' => "BMW",
                    'Modelo'  => "3 SERIE",
                    'Tipo'  => "DEPORTIVO"
                ),
                'Propietario' => array(
                    'Nombre' => "Cristian crisostomo Alvarez",
                    'Ciudad'  => "Puebla, Pue.",
                    'Direccion'  => "Isis 287, Tepeaca."
                )
            );
            $parqueVehicular['JKL9012'] = array(
                'Auto' => array(
                    'Marca' => "DODGE",
                    'Modelo'  => "CHALLENGER",
                    'Tipo'  => "DEPORTIVO"
                ),
                'Propietario' => array(
                    'Nombre' => "Nemesio Oseguera Cervantes",
                    'Ciudad'  => "Aguililla, Michoacan.",
                    'Direccion'  => "6237 Pinkie Estates."
                )
            );
            $parqueVehicular['DEF3456'] = array(
                'Auto' => array(
                    'Marca' => "FORD",
                    'Modelo'  => "MUSTANG",
                    'Tipo'  => "DEPORTIVO"
                ),
                'Propietario' => array(
                    'Nombre' => "Jesus Olmos Pineda",
                    'Ciudad'  => "Jerusalen.",
                    'Direccion'  => "859 Victoria Union."
                )
            );
            $parqueVehicular['GHI7890'] = array(
                'Auto' => array(
                    'Marca' => "Bentley",
                    'Modelo'  => "Continental GT",
                    'Tipo'  => "Coupe"
                ),
                'Propietario' => array(
                    'Nombre' => "Pedro Navarro Juarez",
                    'Ciudad'  => "Veracruz, Veracruz de Ignacio de la Llave.",
                    'Direccion'  => "91426 Mayert Valley."
                )
            );
            $parqueVehicular['MNO2345'] = array(
                'Auto' => array(
                    'Marca' => "Hyundai",
                    'Modelo'  => "Veloster",
                    'Tipo'  => "Hatchback"
                ),
                'Propietario' => array(
                    'Nombre' => "Cristian Pulido Hernandez",
                    'Ciudad'  => "Puebla, Puebla.",
                    'Direccion'  => "65247 Lang Parks."
                )
            );
            $parqueVehicular['PQR6789'] = array(
                'Auto' => array(
                    'Marca' => "Mazda",
                    'Modelo'  => "CX-9",
                    'Tipo'  => "SUV"
                ),
                'Propietario' => array(
                    'Nombre' => "Martin Ruiz Medrano",
                    'Ciudad'  => "Monterrey, Nuevo Leon.",
                    'Direccion'  => "285 Stamm Summit."
                )
            );
            $parqueVehicular['STU1012'] = array(
                'Auto' => array(
                    'Marca' => "Porsche",
                    'Modelo'  => "Cayman",
                    'Tipo'  => "Coupe"
                ),
                'Propietario' => array(
                    'Nombre' => "Daniel Lagunas Ferral",
                    'Ciudad'  => "Tlaxcala de Xicohténcatl, Tlaxcala.",
                    'Direccion'  => "10756 Rohan Meadow."
                )
            );
            $parqueVehicular['UVW5678'] = array(
                'Auto' => array(
                    'Marca' => "Jeep",
                    'Modelo'  => "Grand Cherokee",
                    'Tipo'  => "SUV"
                ),
                'Propietario' => array(
                    'Nombre' => "Arturo Zenteno Martinez",
                    'Ciudad'  => "Zacatecas, Zacatecas.",
                    'Direccion'  => "7428 Barrows Row."
                )
            );
            $parqueVehicular['RST9123'] = array(
                'Auto' => array(
                    'Marca' => "Lexus",
                    'Modelo'  => "NX",
                    'Tipo'  => "Crossover SUV"
                ),
                'Propietario' => array(
                    'Nombre' => "Aruth Elizalde",
                    'Ciudad'  => "Navojoa, Sonora.",
                    'Direccion'  => "03434 Gaylord Ridges."
                )
            );
            $parqueVehicular['YZW1234'] = array(
                'Auto' => array(
                    'Marca' => "Maserati",
                    'Modelo'  => "GranCabrio",
                    'Tipo'  => "Descapotable"
                ),
                'Propietario' => array(
                    'Nombre' => "Arath Diez Denche",
                    'Ciudad'  => "Puerto Escondido, Oaxaca.",
                    'Direccion'  => "91833 Romaguera Cliff."
                )
            );
            $parqueVehicular['JKM6789'] = array(
                'Auto' => array(
                    'Marca' => "Mercedes",
                    'Modelo'  => "Vito",
                    'Tipo'  => "Furgoneta"
                ),
                'Propietario' => array(
                    'Nombre' => "Mauricio Aguilar Anaya",
                    'Ciudad'  => "Villahermosa, Tabasco.",
                    'Direccion'  => "04447 Favian Dale."
                )
            );
            $parqueVehicular['JKM6789'] = array(
                'Auto' => array(
                    'Marca' => "Jaguar",
                    'Modelo'  => "Rapide",
                    'Tipo'  => "Sedan"
                ),
                'Propietario' => array(
                    'Nombre' => "Gael Estrada Aguilar",
                    'Ciudad'  => "Ciudad de Mexico.",
                    'Direccion'  => "1349 Kamille Brook."
                )
            );
            $parqueVehicular['DEF2345'] = array(
                'Auto' => array(
                    'Marca' => "BMW",
                    'Modelo'  => "i8",
                    'Tipo'  => "Coupe"
                ),
                'Propietario' => array(
                    'Nombre' => "Julian Arenas Arroyo",
                    'Ciudad'  => "San Jose Cabo, Baja California Sur.",
                    'Direccion'  => "419 Christiansen River."
                )
            );
            $parqueVehicular['GHI7890'] = array(
                'Auto' => array(
                    'Marca' => "Tesla",
                    'Modelo'  => "Model S",
                    'Tipo'  => "Sedan"
                ),
                'Propietario' => array(
                    'Nombre' => "Eduardo Romero Miranda",
                    'Ciudad'  => "Culiacan, Sinaloa.",
                    'Direccion'  => "05484 Eleanora Place."
                )
            );
            echo "<pre>";
            print_r($parqueVehicular);
            echo "</pre>";
            ?>
        </p>
        <p>
        Finalmente crea un formulario simple donde puedas consultar la información:
        </p>
        <ul>
            <li>Por matricula de auto.</li>
        </ul>
        <p>
            R:
            <form id="formulario2" action="index.php" method="post">
            <strong>Busqueda por matricula</strong>
            <fieldset>
                <legend>Ingrese la matricula a buscar</legend>
                <ol>
                <li><label>Matricula: </label> <input type="text" name="matricula"></li>
                </ol>
            </fieldset>
            <p>
                <input type="submit" value="Buscar">
            </p>
            </form>
            <?php
            

            if (!empty($_POST['matricula'])){
                $busqueda = $_POST['matricula'];
                $fin = true;
                foreach ($parqueVehicular as $key => $value) {
                    if($busqueda == $key){
                        echo "La matricula <strong> $key </strong> contiene los datos:";
                        echo "<pre>";
                        print_r($value);
                        echo "</pre>";
                        $fin = true;
                        break;
                    }else{
                        $fin = false;
                    }
                }
                if($fin == false){
                    echo "La matricula <strong> $busqueda </strong> NO se encuentra en el array";
                }
            }
            ?>
        </p>
    </div>
</body>
</html>