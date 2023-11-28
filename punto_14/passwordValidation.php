<?php

function leghtValidation($value){
  if(strlen($value)>=8){
    return true;
  }  
  else{
    echo "Ingrese más de ocho caracteres";
  }
}

function upperLetterValidation($value){
  $array=str_split($value);
  foreach($array as $mayus){
    if(ctype_upper($mayus)){
      return true;
    }
  }
  echo "Ingrese al menos una mayuscula ";
}
function numberValidation($value){
  $array=str_split($value);
  foreach($array as $number){
    if(is_numeric($number)){
      return true;
    }
  }
  echo "Ingrese al menos un número";
}
?>