<?php
$chiffres = [
    'zéro',
    'un',
    'deux',
    'trois',
    'quatre',
    'cinq',
    'six',
    'sept',
    'huit',
    'neuf',
    'dix',
    'onze',
    'douze',
    'treize',
    'quatorze',
    'quinze',
    'seize',
    'dix-sept',
    'dix-huit',
    'dix-neuf',
    'vingt',
];

function nombreEnLettres($nombre, $chiffres){

    if ($nombre >= 0 && $nombre <= 20){
        return $chiffres[$nombre];
    } elseif ($nombre < 30) {
       var_dump(str_split($nombre));
    }

}

var_dump(nombreEnLettres(22, $chiffres));