<?php 
// Realizar un programa que permita leer 2 números diferentes 
// y nos diga cual es el mayor de los 2 números.

if(isset($_REQUEST['num1']) && isset($_REQUEST['num2'])){
    if ($_REQUEST['num1'] == $_REQUEST['num2']){
        echo("Son iguales"); return;
    }
    if($_REQUEST['num1'] > $_REQUEST['num2']){
        echo("El numero 1 es mayor al numero 2");
    }else{
        echo("El numero 2 es mayor al numero 1");
    }
}

?>