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

$dizainesException = [
    11 => "onze",
    12 => "douze",
    13 => "treize",
    14 => "quatorze",
    15 => "quinze",
    16 => "seize",
    71 => "soixante et onze",
    72 => "soixante douze",
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

function decoupage($nombre, $chiffres, $dizaines, $dizainesException){
    $chiffreLettre = "";
    //if(array_())
    switch (strlen($nombre))
    {
        case 1:
            $chiffreLettre = unite($nombre, $chiffres);
            break;
        case 2:
            $diz = ((int)($nombre/10))*10;
            $unit = $nombre%10;

            $chiffreLettre = dizaine($diz, $dizaines).unite($unit, $chiffres);
            break;
    }
    return $chiffreLettre;
}
var_dump(decoupage(72, $chiffres, $dizaines));
/*$un = unite(3, $chiffres);
$diz = dizaine(60,$dizaines);

echo $diz.$un;
*/
