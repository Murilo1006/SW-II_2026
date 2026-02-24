<?php

//LAÇOS DE REPETIÇÃO
//CONTADOR DE 1 A 10

for ($i=1; $i <= 10; $i++) { 
    echo "$i - ";
}

echo "<hr>";

$a = 1;
while ($a <= 10) {
    echo "$a - ";
    $a++;
}

echo "<hr>";

$b = 1;
do {
    echo "$b - ";
    $b++;
} while ($b <= 10);
?>