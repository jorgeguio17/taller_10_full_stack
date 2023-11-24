<?php
echo "Digita el número: ";
$number=readline();
for($i=0;$i<=30;$i++){
  echo "El resultado de $i x $number es: " . $number*$i . "\n";
}
?>