<?php
require"Main.php";
// TEST PAIR

$hand = new Main(['2D', '2S', '4D', '5D', '6D']) ;
$hand2 = new Main(['2D', '3S', '4D', '5D', '6D']) ;

if($hand->getValueComb()> $hand2->getValueComb()){
    echo "la main 1 gagne";
}else if($hand->getValueComb()< $hand2->getValueComb()){
    echo "la main 2 gagne";
}else{
    echo "égalité";
}