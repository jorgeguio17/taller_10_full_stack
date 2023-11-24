<?php
$j=0;
echo "Los números impares son: " . "\n - ";
for($i=1;$i<=100;$i=$i+2){
  echo "$i - ";
  $j=$j+$i;  
}
echo "\n La sumatoria de los números impares entre 0 y 100 es: $j";
?>