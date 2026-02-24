<?php

$jarres = [
    "jarre1" => "",
    "jarre2" => "",
    "jarre3" => "",
    "jarre4" => "",
    "jarre5" => ""
];

$clePlace = 0;

while($clePlace < 4) {
    $cle = array_keys($jarres);
    $cleAleatoire = $cle[rand(0, 4)];
    if($jarres[$cleAleatoire] == "") {
        $jarres[$cleAleatoire] = "clé";
        $clePlace++;
    }
}

foreach($jarres as $cle => $jarre) {
    if($jarre == "") {
        $jarres[$cle] = "serpent";
    }
}

$choix = readline("Saisissez un numéro de jarre entre 1 et 5 : ");

if($jarres["jarre" . $choix] == "clé") {
    echo "Vous avez gagné !";
} elseif($jarres["jarre" . $choix] == "serpent") {
    echo "Vous avez perdu ! ";
}