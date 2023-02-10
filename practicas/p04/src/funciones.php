<?php

function multiplo5y7($numero) {
    if($_GET['numero'] % 5 == 0 && $_GET['numero'] % 7 == 0){
    	return $_GET['numero'] . ' SI es multiplo de 5 y 7';     
    }else{  
    	return $_GET['numero'] . ' NO es multiplo de 5 y 7';
    }
    return 'respuesta: '.$numero;
}

function matriz ($a,$b,$min,$max){
    //$a = 1; $b = 3; $min = 100; $max = 999; 
    $cont = 0;
    for($x=0;$x<$a;$x++){
        for($y=0;$y<$b;$y++){
            $r[$x][$y]=rand($min,$max);
            echo $r[$x][$y].",  ";
            ++$cont;
        }
        echo "</br>";
        if($a > 0){
            $a = ++$a;
        }
        if($r[$x][0] % 2 != 0 && $r[$x][1] % 2 == 0 && $r[$x][2] % 2 != 0){
            break;
        }
    }
    echo "</br>".$cont . " numeros obtenidos en " . ($a-1) . " iteraciones";
}
function cicloWhile($numero){
    $rand_number = 1;
    if($_GET['numero'] > 9999 or $_GET['numero'] < 1){
        return "Numero fuera de rango, por favor uilice numeros entre 1 y 9999";
    }
    while($rand_number % $_GET['numero'] != 0){
        $rand_number = rand(1, 9999);
        if($rand_number % $_GET['numero'] == 0){
            return "El primer multiplo aleatorio para el numero ".$_GET['numero'] . " es ".$rand_number;
            break;
        }
    }
}

function cicloDoWhile($numero){
    $rand_number = 1;
    if($_GET['numero'] > 9999 or $_GET['numero'] < 1){
        return "Numero fuera de rango, por favor uilice numeros entre 1 y 9999";
    }
    do{
        $rand_number = rand(1, 9999);
        if($rand_number % $_GET['numero'] == 0){
            return "Para el numero ".$_GET['numero'] . " el primer multiplo aleatorio encontrado es ".$rand_number;
            break;
        }
    }
    while($rand_number % $_GET['numero'] != 0);
}

function codeAscii(){
    for($x=97;$x<123;$x++){
        $r[$x]=chr($x);
        }
    return $r;     
}

?>