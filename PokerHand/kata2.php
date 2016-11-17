<?php
require"Main.php";
// TEST PAIR

$hand = new Main(['2D', '2S', '4D', '5D', '6D']) ;
var_dump($hand->isPair());
$hand2 = new Main(['2D', '3S', '4D', '5D', '6D']) ;
var_dump($hand2->isPair());
echo "---------- \n";
var_dump($hand->isDoublePair());
echo "---------- \n";
$hand3 = new Main(['2D', '4S', '4D', '5D', '5C']) ;
var_dump($hand3->isDoublePair());
echo "---------- \n";
$hand4 = new Main(['2D', '2S', '2C', '2H', '5C']) ;
var_dump($hand4->isCarre());
echo "---------- \n";
$hand5 = new Main(['2D', '2S', '2C', '5H', '5C']) ;
var_dump($hand5->isBrelan());
echo "---------- \n";
$hand6 = new Main(['2D', '4S', '3C', '5H', '6C']) ;
var_dump($hand6->isSuite());
echo "---------- \n";
var_dump($hand5->isSuite());
echo "---------- \n";
$hand7 = new Main(['2D', '4D', '3D', '5D', '6D']) ;
var_dump($hand7->isCouleur());
echo "---------- \n";
var_dump($hand6->isCouleur());
echo "---------- \n";
var_dump($hand->getMaxValueInComb());
echo "---------- \n";
var_dump($hand3->getMaxValueInComb());
echo "---------- \n";
var_dump($hand2->getMaxValueInComb());

