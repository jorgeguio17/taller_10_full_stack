<?php
const TICKET = 25000;
$total=0;
echo "Ingrese tipo de afiliación: ";
$type=readline();
echo "Ingrese cantidad de personas: ";
$people=readline();

if(strtoupper($type)=="A" or strtoupper($type)=="B"){
  $total=$people*TICKET*0.70;
  echo "La cantidad a pagar es: ". $total;
}
else{
  $total=$people*TICKET;
  echo "La cantidad a pagar es: " . $total;
}
?>