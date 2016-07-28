<?php
$dictionnaire = file('liste.txt', FILE_IGNORE_NEW_LINES);

function anagramme($mot, $dictionnaire) {
    $mot_array = str_split($mot);
    $anagramme = array();

    foreach ($dictionnaire as $index => $item) {

        if (strlen($item) == strlen($mot)){
            $mot_dictionnaire = str_split($item);

            if (isInArray($item,$mot_dictionnaire)) {
                $anagramme[] = $item;
            }

        }
    }
    $indexMot = array_search($mot, $anagramme);
    array_splice($anagramme, $indexMot, 1);
    return $anagramme;
}

function isInArray($mot_array, $mot_dictionnaire){
    $bon = true;

    foreach ($mot_array as $lettre) {
        if(!in_array($lettre,$mot_dictionnaire)){
            $bon = false;
            break;
        }
    }

    return $bon;
}

function isAnagram($tab1, $tab2){

}
//var_dump(anagramme("marie", $dictionnaire));

$tab = ["m", "a", "r", "i", "e"];
$tabDic = ["a", "i", "m", "e", "r"];
var_dump(isInArray($tab, $tabDic));
