<?php
$arrayNumber = array();
$total=0;
  for($i=0;$i<5;$i++){
    echo"Escriba número para sumar: ";
    $arrayNumber[$i]=readline();
  }

  foreach($arrayNumber as $sum){
    $total=$total+$sum;
    }
echo "La sumatoria es: $total"
?>