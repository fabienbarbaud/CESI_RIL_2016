<?php
define('HIGHTCARD', 1);
define('PAIR', 2);
define('DOUBLEPAIR', 3);
define('BRELAN', 4);
define('SUITE', 5);
define('COULEUR', 6);
define('FULL', 7);
define('CARRE', 8);
define('SUITECOULEUR', 9);

class Main
{
    private $nbPair;
    private $maxHand;
    private $valCard = [];
    private $nbOccurences = [];
    private $tableauCouleur = [];


    function __construct($hand)
    {
        $taille = count($hand);
        foreach ($hand as $card) {
            $this->valCard[] = $this->getValue($card);
            $this->tableauCouleur[] = $this->getCouleur($card);
        }
        $this->nbOccurences = array_count_values($this->valCard);
        $this->nbPair = array_count_values($this->nbOccurences);
    }
    public function getValueComb(){
        if ($this->isCouleur() && $this->isSuite()) {
            return SUITECOULEUR;
        } else if ($this->isCarre()) {
            return CARRE;
        } else if ($this->isBrelan() && $this->isPair()){
            return FULL;
        } else if ($this->isCouleur()){
            return COULEUR;
        } else if ($this->isSuite()){
            return SUITE;
        } else if ($this->isBrelan()) {
            return BRELAN;
        } else if ($this->isDoublePair()) {
            return DOUBLEPAIR;
        } else if ($this->isPair()) {
            return PAIR;
        } else {
            return HIGHTCARD;
        }
    }
    public function getMaxValueInComb()
    {
        //rsort($this->nbOccurences);
        $max = max($this->nbOccurences);
        $highest = 0;
        foreach ($this->nbOccurences as $key => $value) {
            if ($value == $max) {
                if ($highest < $key) {
                    $highest = $key;
                }
            }
        }
        return $highest;
    }

    private function getValue($card)
    {
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

    function build($hand, $taille)
    {
        $nbPair = 0;
        $highest = 0;
        foreach ($hand as $card) {
            $tableValeur [] = getValue($card);
        }
        $arrayNbOccurence = array_count_values($tableValeur);
        $tmp = array_count_values($arrayNbOccurence);
        if (array_key_exists($taille, $tmp)) {
            $nbPair = (int)$tmp[$taille];
        }
        foreach ($arrayNbOccurence as $key => $value) {
            if ($value == $taille) {
                if ($highest < $key) {
                    $highest = $key;
                }
            }

        }
        return ['nb' => $nbPair, 'valeurMax' => $highest];
    }

    function isCarre()
    {

        return array_key_exists(4, $this->nbPair);
    }

    function isBrelan()
    {
        return array_key_exists(3, $this->nbPair);
    }

    public function isPair()
    {

        return array_key_exists(2, $this->nbPair) && $this->nbPair[2] == 1;
    }

    function isDoublePair()
    {
        return array_key_exists(2, $this->nbPair) && $this->nbPair[2] == 2;
    }

    function isSuite()
    {
        $cpt = 0;
        sort($this->valCard);
        for ($i = 0; $i < count($this->valCard) - 1; $i++) {
            if ($this->valCard[$i] + 1 == $this->valCard[$i + 1]) {
                $cpt++;
            }
        }
        if ($cpt == 4) {
            return true;
        } else {
            return false;
        }
    }

    function getCouleur($card)
    {
        return substr($card, 1);
    }

    function isCouleur()
    {
        $valuecouleur = array_count_values($this->tableauCouleur);
        return (count($valuecouleur) == 1);
    }
}