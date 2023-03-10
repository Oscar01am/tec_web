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
  <h2>Inciso 3</h2>
    <p>Muestra el contenido de cada variable inmediatamente después de cada asignación,
        verificar la evolución del tipo de estas variables (imprime todos los componentes de los
        arreglo):
    </p>
    <ol>
        <li>
            <?php
             $a = "PHP5";
             echo "a = $a <br>";
            ?>
        </li>
        <li>
            <?php
             $z[] = &$a;
             echo '$z[] contiene: ';
             var_dump($z);
            ?>
        </li>
        <li>
            <?php
             $b = " 5a version de PHP";
             echo '$b = '.$b."<br>";
            ?>
        </li>
        <li>
            <?php
             echo '$c = $b*10: Esta asignacion de variable no se puede realizar 
             ya que un string (cadena de caracteres) no se puede multiplicar 
             por un int (entero).';
            ?>
        </li>
        <li>
            <?php
             $a .= $b;
             echo "$a<br>".'Comentario: la variable $a se le asigno ahora el valor
             de la variable $b, a la hora de agregar un punto a la varible que se esta
             asignando, lo que ocurre es que el valor que se le asigno aparecera dos veces.';
            ?>
        </li>
        <li>
            <?php
             echo '$b *= $c: Esta asignación no puede realizarse, ya que en el paso 
             anterior no se puedo asignar un valor a la variable $c, por las razones
             ya antes mencionados.<br>';
            ?>
        </li>
        <li>
            <?php
             $z[0] = "MySQL";
             var_dump($z);
            ?>
        </li>
    </ol>
    <h2>Inciso 4</h2>
    <p>Lee y muestra los valores de las variables del ejercicio anterior, pero ahora con la ayuda de la matriz 
       $GLOBALS o del modificador global de PHP.
    </p>
    <?php
        $aa = "PHP5";
        $z[] = &$a;
        $bb = "5a version de PHP";
        $aa .= $b;
        $z[0] = "MySQL";
        function mostar()
        {
            $GLOBALS['m'] = $GLOBALS['aa']."<br>".$GLOBALS['bb'];
        }
        mostar();
        echo $m."<br> Comentario: Los array no se pueden imprimir, ya que la función no puede convertir los valores de 
        un array a string.";
    ?>
    <h2>Inciso 5</h2>
    <p>Dar el valor de las variables $a, $b, $c al final del siguiente script:</p>
    <?php
        $a = "7 personas";
        $b = (integer) $a;
        $a = "9E3";
        $c = (double) $a;
        echo '$a: '.$a.'<br>';
        echo '$b: '.$b.'<br>';
        echo '$c: '.$c.'<br>';
    ?>
    <h2>Inciso 6</h2>
    <p>Dar y comprobar el valor booleano de las variables $a, $b, $c, $d, $e y $f y muéstralas 
        usando la función var_dump(<"datos">). 
        Después investiga una función de PHP que permita transformar el valor booleano de $c y $e 
        en uno que se pueda mostrar con un echo:
    </p>
    <?php
        $aa = "0";
        $bb = "TRUE";
        $c = FALSE;
        $d = ($a OR $b);
        $e = ($a AND $c);
        $f = ($a XOR $b);
        echo '$a: ';
        var_dump($aa);
        echo '<br>$b: ';
        var_dump($bb);
        echo '<br>$c: ';
        var_dump($c);
        echo '<br>$d: ';
        var_dump($d);
        echo '<br>$e: ';
        var_dump($e);
        echo '<br>$f: ';
        var_dump($f);
    ?>
    <h2>Inciso 7</h2>
    <p>Usando la variable predefinida $_SERVER, determina lo siguiente:</p>
    <ol type = "a">
        <li>
           <p>La versión de Apache y PHP</p>
           <?php
                $version = apache_get_version();
                echo "Versió de apache: $version";
                echo '<br>Versión actual de PHP: ' . phpversion();
           ?>
        </li>
        <li>
            <p>El nombre del sistema operativo (servidor)</p>
            <?php
                echo php_uname();
            ?>
        </li>
        <li>
            <p>El idioma del navegador (cliente)</p>
            <?php
                $idioma = $_SERVER['HTTP_ACCEPT_LANGUAGE'];
                echo $idioma;
            ?>
        </li>
    </ol>
</body>
</html>