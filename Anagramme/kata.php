<?php
$dictionnaire = file('liste.txt', FILE_IGNORE_NEW_LINES);

function anagrammes($mot, $dictionnaire)
{
    $mot_array = str_split($mot);
    $anagramme = array();

    foreach ($dictionnaire as $index => $item) {

        if (strlen($item) == strlen($mot)) {
            $mot_dictionnaire = str_split($item);

            if (isAnagram($mot_array, $mot_dictionnaire)) {
                $anagramme[] = $item;
            }
        }
    }
    $indexMot = array_search($mot, $anagramme);
    array_splice($anagramme, $indexMot, 1);
    return $anagramme;
}

function isAnagram($tab1, $tab2)
{
    sort($tab1);
    sort($tab2);
    return ($tab1 == $tab2);
}

var_dump(anagrammes("marie", $dictionnaire));

$tab = ["m", "a", "r", "i", "e"];
$tabDic = ["a", "i", "m", "e", "r"];
//var_dump(isInArray($tab, $tabDic));
//var_dump(isAnagram($tab, $tabDic));