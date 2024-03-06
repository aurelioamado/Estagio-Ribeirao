<?php

$indice = 13;
$SOMA = 0;
$k = 0;

while($k<$indice){
    $k++;
    $SOMA += $k;
}

echo "Ao final do processamento o valor de SOMA será = $SOMA" . PHP_EOL;