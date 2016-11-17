<?php
$mapping = [
    '2' => 2,
    '3' => 3,
    '4' => 4,
    '5' => 5,
    '6' => 6,
    '7' => 7,
    '8' => 8,
    '9' => 9,
    '10' => 10,
    'J' => 11,
    'Q' => 12,
    'K' => 13,
    'A' => 14,
];
$hand= ['2H', '2D', '2S', '5C', 'KD'];
$hand2= ['3H', '3D', '2S', 'KC', 'AD'];

$mappingvaluehand =
function calculMain ($hand) {
 $valueHand = 0;


}

mainCompare($hand,$hand2);

function mainCompare($hand,$hand2) {
  if (highestCard($hand) < highestCard($hand2)) {
      echo "Hand2 gagne";
  }
  else if (highestCard($hand) > highestCard($hand2)) {
      echo "Hand1 gagne";
  }

    else {
      echo "égalité";
  }
};

function highestCard ($hand) {
    $valMax = 0;
    foreach ($hand as $card) {
        $valCard = getValue($card);
        if ($valCard > $valMax) {
            $valMax = $valCard;
        }
    }
    return $valMax;
}
function getValue ($card){
    $mapping = [
        '2' => 2,
        '3' => 3,
        '4' => 4,
        '5' => 5,
        '6' => 6,
        '7' => 7,
        '8' => 8,
        '9' => 9,
        '10' => 10,
        'J' => 11,
        'Q' => 12,
        'K' => 13,
        'A' => 14,
    ];
    return $mapping [substr($card, 0, -1)];
}
var_dump(verifyPair($hand, 3));
function verifyPair($hand, $taille){
    $nbPair = 0;
    $highest = 0;
    foreach ($hand as $card) {
        $tableValeur [] = getValue($card);
    }
    $arrayNbOccurence =array_count_values($tableValeur);
    $tmp = array_count_values($arrayNbOccurence);
    if (array_key_exists($taille,$tmp)){
    $nbPair = (int)$tmp[$taille];
    }
    foreach ($arrayNbOccurence as $key => $value){
        if ( $value == $taille) {
            if ($highest <$key){
                $highest = $key;
            }
        }

    }
    return ['nb'=>$nbPair, 'valeurMax' => $highest];
}

