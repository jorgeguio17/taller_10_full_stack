<?php
echo "Digita el número: ";
$number=readline();
$i=0;
while($i<=30){
  echo "El resultado de $i x $number es: " . $number*$i . "\n";
  $i++;
}
?>