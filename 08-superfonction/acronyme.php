<?php

echo '<h3>Fonction World of Warcraft</h3>';

$name = 'World of Warcraft';

$array_keywords = explode(' ', $name);

// on récupère les valeurs du tableau avec une boucle
foreach ($array_keywords as $value) {
    // on récupère la premiere lettre de chaque mot (à partir de l'index 0)
    $initiale = substr($value, 0, 1);
    echo strtoupper ($initiale);

}

echo '<h3>Fonction Conjugaison au présent </h3>';

$verbe = 'trouver';

function conjugaison($verbe){
    $longueurVerbe = strlen($verbe) -2;
    // trouver la base verbale
    $baseVerbe = substr($verbe, 0, $longueurVerbe);
    return $baseVerbe; //retourne la base verbale (ex 'cherch')
}

//le verbe sans sa terminaison---------------------------------

$baseVerbale = conjugaison($verbe); 

// la boucle pour aller chercher les terminaisons
// $tableauVerbeGroupe1 = ['e', 'es', 'e', 'ons', 'ez', 'ent'];
// foreach ($tableauVerbeGroupe1 as $terminaison) {
//     echo $baseVerbale .$terminaison .'<br>';
// }

$tableauVerbeGroupe1 = ['Je _e', 'Tu _es', 'Il _e', 'Nous _ons', 'Vous _ez', 'Ils _ent'];
foreach ($tableauVerbeGroupe1 as $chaine) {
    echo str_replace ('_', $baseVerbale,  $chaine).'<br>';
}

echo '<h3>Conjugaison à l\'imparfait</h3>';

$tableauVerbeGroupe1Imparfait = ['Je _ais', 'Tu _ais', 'Il _ait', 'Nous _ions', 'Vous _iez', 'Ils _aient'];
foreach ($tableauVerbeGroupe1Imparfait as $chaine) {
    echo str_replace ('_', $baseVerbale,  $chaine).'<br>';
}



$base = array("je", "tu", "il", "nous", "vous", "ils");
var_dump($base);
$replacements = array(0 => "j\'");
// $replacements2 = array(0 => "grape");

$basket = array_replace($base, $replacements);
var_dump($basket);

var_dump(__DIR__);