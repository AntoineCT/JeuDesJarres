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

$cleTrouve = 0;

while($cleTrouve < 3) {
    $choix = readline("Saisissez un numéro de jarre entre 1 et 5 : ");
    if($jarres["jarre" . $choix] == "clé") {
        echo "Vous avez trouvé une clé !\n";
        $cleTrouve++;
    } elseif($jarres["jarre" . $choix] == "serpent") {
        echo "Vous avez perdu ! ";
        break;
    }
}

if($cleTrouve == 3) { 
    echo "Vous avez trouvé 3 clés ! Vous avez gagné ! ";
}