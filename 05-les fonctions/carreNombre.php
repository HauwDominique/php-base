<?php

// une fonction calculannt le carré d'un nombre

$number = 3;
function carre($nombre) {
    return $nombre * $nombre;
}

echo 'le carré du chiffre ' . $number . ' est de : ' .carre($number) .'<br>';

// l'aire d'un rectangle

function aireRectangle ($width, $length) {
    return $width * $length;
}

echo 'l\'aire du rectangle est de : ' .aireRectangle(3, 5) .'<br>'; 

// l'aire du cercle (une fonction dans une fonction)

function aireCircle($radius) {
    return carre($radius) * M_pi;
}

echo 'l\'aire du cercle est de : ' .aireCircle(10) .'<br>';

// Prix TTC

$price = "10";

function prixTTC ($prixHT) {
    return $prixHT + ($prixHT* 0.20);
}

echo 'le prix TTC de ' .$price .' est de : ' .prixTTC($price) .' euro' .'<br>'; 

// Ajout 3em parametre fonction

function prixTTCetHT ($prix) {
    $prixTTC = ($prix * 0.20) + $prix;
    $prixHT = $prix * 0.80;
    return ' le prix TTC de ' .$prix  .' est de : ' .$prixTTC .' et le prix HT est de : ' .$prixHT;
}

echo prixTTCetHT(10);


$price = "10";

// function prixTTCetHT ($prix) {
//     $prixTTC = ($prix * 0.20) + $prix;
//     $prixHT = $prix * 0.80;

//     if ( global $price = $prixTTC) {

//     }
//     return ' le prix TTC de ' .$prix  .' est de : ' .$prixTTC .' et le prix HT est de : ' .$prixHT;
// }



?>