<?php

$jarres = [
    "jarre1" => "",
    "jarre2" => "",
    "jarre3" => "",
    "jarre4" => "",
    "jarre5" => ""
];

$clePlace = 0;
$cleTrouve = 0;

$difficulte = readline("Choisissez une difficulté (1, 2, 3) : ");
if($difficulte == 1) {
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
}

if($difficulte == 2) {
    while($clePlace < 3) {
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
}

if($difficulte == 3) {
    while($clePlace < 2) {
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
}

while($cleTrouve < 3) {
    $choix = readline("Saisissez un numéro de jarre entre 1 et 5 : ");
    if($jarres["jarre" . $choix] == "clé") {
        echo "Vous avez trouvé une clé !\n";
        $cleTrouve++;
    } elseif($jarres["jarre" . $choix] == "serpent") {
        echo "Vous avez trouvé un serpent ! Vous avez perdu ! ";
        break;
    }
}

if($cleTrouve == 3) { 
    echo "Vous avez trouvé 3 clés ! Vous avez gagné ! ";
}