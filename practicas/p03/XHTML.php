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
</body>
</html>