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

$dizaine = [
    "zero",
    "dix",
    "vingt",
    "trente",
    "quarante",
    "cinquante",
    "soixante",
    "soixante-dix",
    "quatre-vingt",
    "quatre-vingt-dix"
];

function nombreEnLettres($nombre, $chiffres){

    $unit = $nombre % 10;
    $diz = ($nombre/10) % 10;
    $cent = ($nombre/100) % 10;
    var_dump($cent);

    if ($nombre >= 0 && $nombre <= 20){
        return $chiffres[$nombre];
    } elseif ($nombre < 30) {
        return "vingt ".nombreEnLettres(substr($nombre,1),$chiffres);
    } elseif ($nombre < 100) {
        return "soixante ".nombreEnLettres(substr($nombre,1),$chiffres);
    }

}

var_dump(nombreEnLettres(63, $chiffres));