<?php


$string = 'Desejo muito esse estagio';
$qtd = strlen("$string");
For($i=1;$i<=$qtd;$i++)
{
    $invert= $string[-$i];
   echo $invert;
}
