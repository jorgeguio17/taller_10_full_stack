<?php
include "./operations.php";
$numberOne=0;
$numberTwo=0;
$operation="";

$numberOne=getNumber();
$numberTwo=getNumber();

$operation=showMenu();

$result= operator($numberOne, $numberTwo, $operation);

echo "El resultado es: ".$result;
?>