<?php
echo "Digita el primer número: ";
$number_1=readline();
echo "Digita el segundo número: ";
$number_2=readline();
echo "¿Qué operación quieres hacer? ¿Sumar, Restar, Multiplicar o Dividir? Solo debe digitar las primera letra de la operación que quieras: ";
$operation=readline();

if(strtoupper($operation)=="S"){
  echo "Tu resultado es: " . ($number_1 + $number_2);
}
elseif(strtoupper($operation)=="R"){
  echo "Tu resultado es: " . ($number_1 - $number_2);
}
elseif(strtoupper($operation)=="M"){
  echo "Tu resultado es: " . ($number_1 * $number_2);
}
elseif(strtoupper($operation)=="D"){
  echo "Tu resultado es: " . ($number_1 / $number_2);
}
else{
  echo "Digitaste una operación errada, intenta de nuevo en otra oportunidad";
}
?>