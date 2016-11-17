<?php
/**
 * Created by PhpStorm.
 * User: vaio
 * Date: 17/11/2016
 * Time: 10:34
 */


$couleurs = [
    'T' => 1,
    'C' => 2,
    'P' => 3,
    'H' => 4
];
$OrdreCombi = [
    'high card',
    'pair',
    'double pair',
    'brelan',
    'couleur',
    'suite',
    'full',
    'carre',
    'quinte flush'
];

$tabValues = [
    '2' => 2,
    '3' => 3,
    '4' => 4,
    '5' => 5,
    '6' => 6,
    '7' => 7,
    '8' => 8,
    '9' => 9,
    '10' =>10,
    'V' => 11,
    'D' => 12,
    'R' => 13,
    'A' => 14
];
$main1 = ['2P', '2T', '7H', '7P', '8P'];
$main2 = ['5H', '5D', 'VS', 'VC', 'RD'];

function isSuite($tab, $tabValues) {
    $keysValue = array_keys($tab);
    if (($tabValues[$keysValue[4]]-$tabValues[$keysValue[0]]) == 4){
        $bool = true;
    }else{
        $bool = false;
    }
    return $bool;
}

function whatinhand($main, $tabValues) {

    $tabCardval = [];
    $tabCouleur = [];

    foreach ($main as $card){
        list($tabCardval[], $tabCouleur[]) = str_split($card);
    }

    $tabCouleurs = array_count_values($tabCouleur);
    $compteur = array_count_values($tabCardval);
    $return = [];
    switch(count($compteur)){
        case 2:
            $keys = array_keys($compteur);
            $firstkey = array_shift($keys);
            if($compteur[$firstkey] == 4 || $compteur[$firstkey] == 1){
                $return = ['carre',array_search(4,$compteur)];

            }else $return = ['full',array_search(3,$compteur)];
            break;
        case 3:
            if (in_array(3,$compteur)){
                $keysValue = array_keys($compteur);

                $return = ['brelan',array_search(3,$compteur)];
            }else {
                $compteur = array_reverse($compteur, true);
                $return = ['double pair',separateTab($compteur)];
            }
            break;
        case 4:
            $compteur = array_reverse($compteur, true);
            $return = ['pair',separateTab($compteur)];
            break;
        case 5:
            if(isSuite($compteur, $tabValues)){
                if(count($tabCouleurs) === 1){
                    $return = ['quinte flush',endKey($compteur)];
                }else{

                    $return = ['suite',endKey($compteur)];
                }
            }else{
                if(count($tabCouleurs) === 1){
                    $return = ['couleur',array_reverse($compteur,true)];
                }else{
                    $return = ['high card',array_reverse($compteur,true)];
                }
            }
            break;
    }
    return $return;
}

function endKey($array){
    end($array);
    return key($array);
}

function separateTab($compteur){
    foreach($compteur as $key => $val){
        if($val == 2){
            $tab['double'][] = $key;
        }else {
            $tab['simple'][] = $key;
        }

    }
    return $tab;
}

$player1 = whatinhand($main1, $tabValues);
$player2 = whatinhand($main2, $tabValues);
var_dump($player1);
var_dump($player2);


function winner($player1,$player2,$OrdreCombi,$tabValues){
    if(array_search($player1[0],$OrdreCombi) > array_search($player2[0],$OrdreCombi)){
        echo 'PLAYER 1 GAGNE.';
    }elseif(array_search($player1[0],$OrdreCombi) < array_search($player2[0],$OrdreCombi)){
        echo 'PLAYER 2 GAGNE.';
    }else{
        if (is_array($player1[1])){
            $final = null;
            if(isset($player1[1]['double'])) {
                for ( $i=0; $i<count($player1['double']);$i++ ){
                    if ($player1['double'][$i] > $player2['double'][$i]){
                        $final =  'PLAYER 1 GAGNE.';
                        break;
                    } elseif ($player1['double'][$i] > $player2['double'][$i]) {
                        $final = 'PLAYER 2 GAGNE.';
                        break;
                    }
                }
            }elseif(isset($player1[1]['simple'])) {
                for ( $i=0; $i<count($player1['simple']);$i++ ){
                    if ($player1['simple'][$i] > $player2['simple'][$i]){
                        $final =  'PLAYER 1 GAGNE.';
                        break;
                    } elseif ($player1['simple'][$i] > $player2['simple'][$i]) {
                        $final = 'PLAYER 2 GAGNE.';
                        break;
                    }
                }
            }

            if(is_null($final)) {
                echo 'EGALITE';
            }else {
                echo $final;
            }
        } else {
            if(array_search($player1[1],$tabValues) > array_search($player2[1],$tabValues)){
                echo 'PLAYER 1 GAGNE.';
            }elseif(array_search($player1[1],$tabValues) < array_search($player2[1],$tabValues)){
                echo 'PLAYER 2 GAGNE.';
            }else{
                echo 'EGALITE';
            }
        }
    }
}

winner($player1,$player2,$OrdreCombi,$tabValues);

