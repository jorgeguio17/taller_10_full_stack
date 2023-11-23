<?php
const TICKET = 25000;
$total=0;
echo "Ingrese tipo de afiliación: ";
$type=readline();
echo "Ingrese cantidad de personas: ";
$people=readline();

switch(strtoupper($type)){
  case "A":
    $total=TICKET*$people*0.70;
    echo "El total a pagar es: $".$total;
    break;
  case "B":
    $total=TICKET*$people*0.75;
    echo "El total a pagar es: $".$total;
    break;
  case "C":
    $total=TICKET*$people*0.90;
    echo "El total a pagar es: $".$total;
    break;
  case "D":
    $total=TICKET*$people*0.95;
    echo "El total a pagar es: $".$total;
    break;
  default:
    echo "No hay descuento, el total a pagar es: " . $total=TICKET*$people;
    break;
}
?>