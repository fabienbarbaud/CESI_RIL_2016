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

    $unit = $nombre % 10;
    $ten = ($nombre/10) % 10;
    var_dump($ten);

    if ($nombre >= 0 && $nombre <= 20){
        return $chiffres[$nombre];
    } elseif ($nombre < 30) {
        return "vingt ".nombreEnLettres(substr($nombre,1),$chiffres);
    } elseif ($nombre < 70) {
        return "soixante ".nombreEnLettres(substr($nombre,1),$chiffres);
    }

}

var_dump(nombreEnLettres(63, $chiffres));