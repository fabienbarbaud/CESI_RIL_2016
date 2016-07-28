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
    'neuf'
];

$dizaines = [
    "zero",
    "dix-",
    "vingt-",
    "trente-",
    "quarante-",
    "cinquante-",
    "soixante-",
    "soixante-dix-",
    "quatre-vingt-",
    "quatre-vingt-dix-"
];

function nombreEnLettres($nombre, $chiffres){


    var_dump($cent);

    if ($nombre >= 0 && $nombre <= 20){
        return $chiffres[$nombre];
    } elseif ($nombre < 30) {
        return "vingt ".nombreEnLettres(substr($nombre,1),$chiffres);
    } elseif ($nombre < 100) {
        return "soixante ".nombreEnLettres(substr($nombre,1),$chiffres);
    }
}

function unite($nombre, $chiffres){
    return $chiffres[$nombre];
}

function dizaine($nombre, $dizaines){
    $diz = ($nombre/10)%10;
    return $dizaines[$diz];
}

$un = unite(3, $chiffres);
$diz = dizaine(60,$dizaines);

echo $diz.$un;

