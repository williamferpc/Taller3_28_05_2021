<?php 
// Realizar un programa que pueda sumar dos números leídos por teclado y escribir el resultado.

if(isset($_REQUEST['num1']) && isset($_REQUEST['num2'])){
    $suma = (int) $_REQUEST['num1'] + (int) $_REQUEST['num2'];
    echo("La suma es: ".$suma);
}

?>