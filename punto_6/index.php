<?php
echo "Digita tu nombre: ";
$name=readline();
echo "Digita tu edad en años: ";
$age=readline();

if( $age >= 18 ){
  echo "Hola $name, tienes $age años, eres mayor de edad";
  }
else{
  echo "Hola $name, tienes $age años, por lo tanto aún no eres mayor de edad";
}
?>