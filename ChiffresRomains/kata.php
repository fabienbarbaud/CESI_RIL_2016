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

function convertToRomain($nbArabe, $mapping) {
    $nbRomain =  "";

    arsort($mapping);
    foreach ($mapping as $romIndex => $arabeItem) {
        $nboccurence = floor($nbArabe/$arabeItem);
        for ($i = 0;$i < $nboccurence;$i++){
            $nbRomain .= $romIndex;
            $nbArabe-=$arabeItem;
        }

    }
    return $nbRomain;
}

var_dump(convertToRomain(1,$mapping));