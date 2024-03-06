<?php

echo "O primeiro número de Fibonacci é o 1, que iniciará o intervalo. Qual o último número deseja para encerrar o intervalo?" .PHP_EOL;
$numero = fgets(STDIN).PHP_EOL;
echo "Qual número deseja saber se está contido no intervalo estabelecido?".PHP_EOL;
$num = fgets(STDIN);

function teste($numero)
{
    $fibo = array();
    for ( $i = 1; $i <= $numero ; $i++) { 
        if ($i <= 2) { 
            $fibo[$i] = $i;         
        } else{
            $fibo[$i] = $fibo[$i - 1] + $fibo[$i - 2];      
            
        }    
        
    }
   
    return $fibo;
}

$fibo = teste(10);


$search = array_search($num, $fibo);
if($search==true){
    echo "O número $num está contido no intervalo ";
}else {
    echo "O número $num não está contido no intervalo";
};




