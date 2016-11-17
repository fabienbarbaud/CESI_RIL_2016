<?php

echo "Entrez un nombre à convertir : ";
$handle = fopen ("php://stdin","r");
$line = fgets($handle);
$line = explode("\n", $line);
$valeur = $line[0];


$mapping = [
    'I' => 1,
    'IV' => 4,
    'V' => 5,
    'IX' => 9,
    'X' => 10,
    'XL' => 40,
    'L' => 50,
    'XC' => 90,
    'C' => 100,
    'CD' => 400,
    'D' => 500,
    'CM' => 900,
    'M' => 1000,
];



arsort($mapping);
foreach ($mapping as $index => $val){
    if ($valeur == 0){
        echo "Try again";
        break;
    }
    while($valeur - $val >= 0 ){
       echo $index;
       $valeur -= $val;
   }

}