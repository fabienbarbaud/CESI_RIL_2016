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
    }

}

var_dump(nombreEnLettres(9, $chiffres));