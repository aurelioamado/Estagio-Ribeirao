<?php



function q1()
{
    $a = array();
    for($a=1; $a<8 ; $a+=2){
        echo $a . PHP_EOL;
    }
    
    return $a;
}

function q2()
{
    $b = array();
    for($b=1; $b<128 ; $b*=2){
        echo $b . PHP_EOL;
    }
    
    return $b;
}


echo "Resposta da alternativa a: " . PHP_EOL;
$a = q1();
echo $a .PHP_EOL;

echo "Resposta da alternativa b: " . PHP_EOL;
$b = q2();
echo $b .PHP_EOL;










