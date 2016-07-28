<?php
$dictionnaire = file('liste.txt', FILE_IGNORE_NEW_LINES);

function anagramme($mot, $dictionnaire) {
    $mot_array = str_split($mot);
    $anagramme = array();

    foreach ($dictionnaire as $index => $item) {

        if (strlen($item) == strlen($mot)){
            $mot_dictionnaire = str_split($item);
            $bon = true;

            foreach ($mot_array as $lettre) {
                if(!in_array($lettre,$mot_dictionnaire)){
                    $bon = false;
                    break;
                }
            }
            if ($bon == true) {
                $anagramme[] = $item;
            }

        }
    }
    $indexMot = array_search($mot, $anagramme);
    array_splice($anagramme, $indexMot, 1);
    return $anagramme;
}

var_dump(anagramme("marie", $dictionnaire));
