<?php
$dictionnaire = file('liste.txt', FILE_IGNORE_NEW_LINES);

function anagramme($mot, $dictionnaire) {
    $mot_array = str_split($mot);

    foreach ($dictionnaire as $index => $item) {

        if (strlen($item) == strlen($mot)){
            $mot_dictionnaire = str_split($item);
           // in_array()
        }
    }
}

anagramme("marie", $dictionnaire);