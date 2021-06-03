<?php
// 4.Realizar un programa de procesos en el que se almacenen 3 números en 3 variables 
// A, B y C. El diagrama debe decidir cual es el mayor y cual es el menor

$a = random_int(1,100);
$b = random_int(1,100);
$c = random_int(1,100);
echo "Numero A :".$a."<br>";
echo "Numero B :".$b."<br>";
echo "Numero C :".$c."<br><br>";

if($a > $b && $a > $c){
    echo "A es el mayor";
}elseif($b > $a && $b > $c){
    echo "B es el mayor";
}elseif ($c > $a && $c > $b) {
    echo "C es el mayor";
}

?>