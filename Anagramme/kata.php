<?php
$dictionnaire = file('liste.txt', FILE_IGNORE_NEW_LINES);

echo "entry ";
$handle = fopen ("php://stdin","r");
$line = fgets($handle);
$line = explode("\n", $line);
$mot = $line[0];
$longeur = strlen($mot);

function ordreTableaux($mot){
    $tabString = str_split($mot) ;
    sort($tabString) ;
    return implode('',$tabString) ;
}

$motOrdonne = ordreTableaux($mot);

foreach ($dictionnaire as $item){
    if (strlen($item) == $longeur){
       $itemOrdonne = ordreTableaux($item);
        if ($itemOrdonne == $motOrdonne){
            echo $item.PHP_EOL;
        }
    }
}



