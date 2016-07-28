<?php
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

function convertToRomain($nbArabe) {
    $nbRomain =  "";
    if ($nbArabe == 4) {
        $nbRomain = "IV";
    }
    if ($nbArabe >=5) {
        $nbArabe-=5;
        $nbRomain.="V";
    }

    for ($i=0; $i<$nbArabe; $i++) {
         $nbRomain.="I";
    }
    return $nbRomain;
}

var_dump(convertToRomain(4));