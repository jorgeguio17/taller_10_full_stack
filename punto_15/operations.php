<?php
function getNumber(){
  echo "Ingrese un numero: \n";
  return readline();
}
function showMenu(){
  echo "Digite el número de alguna de las siguientes opciones: \n";
  echo "1. Sumar \n";
  echo "2. Restar \n";
  echo "3. Multiplicar \n";
  echo "4. Dividir \n";
  return readline();
}

function operator($x,$y,$option){
  switch($option){
    case "1":
      return add($x,$y); 
      break;
    case "2":
      return sub($x,$y); 
      break;
    case "3":
      return dot($x,$y); 
      break;
    case "4":
      return split($x,$y); 
      break;
    default:
      echo "Operación no válida \n";
      break;
  }
}
function add($x,$y){
  return $x+$y;
}
function sub($x,$y){
  return $x-$y;
}
function dot($x,$y){
  return $x*$y;
}
function split($x,$y){
  return $x/$y;
}
?>