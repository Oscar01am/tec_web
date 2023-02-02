<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd"&gt;
<html>
<head>
    <title>Práctica 2</title>
</head>
<body>
<h2>Inciso 1</h2> 
<p>Determina cuál de las siguientes variables son válidas y explica por qué:</p>
 <p>$_myvar, $_7var, myvar, $myvar, $var7, $_element1, $house*5</p>
 <?php
  $_myvar = "Hola";
  echo '$_myvar es válido, inicia con un guión bajo.<br>';
  $_7var = "Oscar Diaz";
  echo '$_7var es válido, inicia con un guión bajo.<br>' ;
  // myvar = 1726;  echo 'myvar es incorrecta, no inicia con el signo de dolar.<br>';
  $myvar = 172;
  echo '$myvar es correcta válido, inicia con el signo de dolar.<br>';
  $var7 = 265;
  echo '$var7 es válido, inicia con el signo de dolar.<br>';
  $_element1 = "Tecnologias web";
  echo '$_element1 es válido, inicia con un guión bajo.<br>';
  // $house*5 = "SEPTIMO"; echo '$house*5 es incorrecta, intenta hacer una multiplicacion con la variable.<br>';
  ?>
  <h2>Inciso 2</h2>
        <p>Proporcionar los valores de $a, $b, $c como sigue:</p>
        <p>$a = "ManejadorSQL";</p>
        <p>$b = 'MySQL';</p>
        <p>$c = &$a;</p>
    <?php
        $a = "ManejadorSQL<br>";
        $b = 'MySQL<br>';
        $c = &$a;
    ?>
  <ol type = "a">
    <li>
        <p>Ahora muestra el contennido de cada variable</p>
        <?php
            echo "a = ".$a;
            echo "b = ".$b;
            echo "c = ".$c."<br>";
        ?>
    </li>
    <li>
        <p>Agrega al código actual las siguientes asignaciones:</p>
        <?php
         echo "a = “PHP server”;<br>";
         echo "b = &a;<br><br>";
        ?>
    </li>
    <li>
        <p>Vuelve a mostrar el contenido de cada uno:</p>
        <?php
         $a = "PHP server<br>";
         $b = &$a."<br>";
         echo "a = ".$a;
         echo "b = ".$b;
        ?>
    </li>
    <li>
        <p>Describe en y muestra en la página obtenida qué ocurrió en el segundo bloque de asignaciones</p>
        <?php
            echo "R= No ha habino ningun cambio en los valores de las variables, ya que cada valor de cada variable es diferente."
        ?>
    </li>
  </ol>
</body>
</html>