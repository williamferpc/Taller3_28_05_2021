<?php 
// Realice un programa que calcule el máximo de N números leídos desde teclado
header("Content-type: application/json; charset=utf-8");
$output = (array)[];

if(isset($_REQUEST['numeros'])){
    $arrnum = $_REQUEST['numeros'];
    asort($arrnum);
    $output['numeromayor'] = end($arrnum);
    echo(json_encode($output));
}

?>