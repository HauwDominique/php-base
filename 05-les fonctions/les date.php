<?php

// echo date('l d F Y').', il est ' .date('g\h i')  .' et ' .date('s') .' secondes <br>';

$seconde = date('s'); //renvoie 00, 01, 02
echo date('l d F Y');
echo ' il est ';
echo date ('H\hi\ \e\t ');
echo $seconde .'seconde';
echo ($seconde >1) ? 'q' : '';

// echo date ('c / ');
// echo date ('H\h i\m s\s') .'<br>';
// echo time() . ' - Timestamp now <br>';
// echo $futurDay .' - Timestamp dans 10 jours<br>';

// récupérer le jour qu'il sera dans 10 jours exactement.

$futurDay = strtotime ('+10 day');
echo 'Dans 10 jours nous serons ' .date('l', $futurDay) .'<br>';
// on peut aussi faire 
// echo 'Dans 10 jours nous serons ' .date('l', strtotime('+10 day'));

// var dump(date('d/m/y', time());
var dump(date('d/m/y', strtotime ('+ 10 days'));

// Trouver quel jour sera ton prochain anniversaire
$timestampBirthday = strtotime('13 april 2019');
echo 'Le jour de mon anniversaire sera un ' .date('l', $timestampBirthday);


?>