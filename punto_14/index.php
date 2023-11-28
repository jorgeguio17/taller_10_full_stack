<?php
include "./passwordValidation.php";

echo "Ingrese su contraseña: ";
$password=readline();

if(leghtValidation($password) and upperLetterValidation($password) and numberValidation($password)){
  echo "Contraseña válida";
}
?>