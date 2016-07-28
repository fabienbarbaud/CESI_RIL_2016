<?php

$valeurs = [
    "2",
    "3",
    "4",
    "5",
    "6",
    "7",
    "8",
    "9",
    "T",
    "J",
    "Q",
    "K",
    "A",
];

$couleurs = [
    "C",
    "H",
    "S",
    "D",
];

$hand_1 = [
    [2,"S",],
    [5,"S",],
    ["J","C",],
    [10,"H",],
    [6,"D",],
];

$hand_2 = [
    [7,"S",],
    [7,"C",],
    ["K","C",],
    [8,"H",],
    [2,"D",],
];

function highCard($hand, $valeurs){
    $max = -1;
    $indexHMax = 0;
    foreach ($hand as $index => $carte) {
        if($max<array_search($carte[0],$valeurs)){
            $max = array_search($carte[0],$valeurs);
            $indexHMax = $index;
        }
    }
    return($hand[$indexHMax]);
}
function isPair($hand,$valeurs){
    $pair = false;
    $tab = [];
    foreach ($hand as $index => $carte) {
        $tab[$carte[0]]++;
    }
    return $pair;
}
function isDoublePair(){

}
function is3OfAKind(){

}
function isStraight(){

}
function isFlush(){

}
function isFull(){

}
function is4ofAKind(){

}
function isStraightFlush(){

}

var_dump(highCard($hand_1,$valeurs));