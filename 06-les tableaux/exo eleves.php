<?php

$notes = [10, 20, 30];
echo $notes[0].'<br>';

$notes = ['Jean' => 10, 'Eric' => 20, 'Matthieu' => 15];
echo $notes['Eric'].'<br>';

$morpion = [
    ['X', 'O', 'X'],
    ['X', 'Xa', 'O'],
    ['X', 'O', 'O']
];

echo $morpion[1][1] .'<br><br>';

$fruits = ['A' => 'abricot', 'B'=> 'banane', 'C'=>'cerise'];
foreach ($fruits as $lettre => $fruit) {
    echo $lettre . ' : ' .$fruit .'<br>';
}
echo '<br>';

// Exercice sur les tableaux--------------------

$eleves = [
    0 => [
        'nom' => 'Matthieu',
        'notes' => [10, 8, 16, 20, 17, 16, 15, 2]
    ],
    1 => [
        'nom' => 'Thomas',
        'notes' => [20, 18, 12, 15, 13, 7]
    ],
    2 => [
        'nom' => 'Jean',
        'notes' => [17, 20, 6, 2, 16, 18, 9]
    ],
    3 => [
        'nom' => 'Enzo',
        'notes' => [1, 14, 6, 2, 1, 8, 9]
    ]
];

    $addition = 0;
    foreach ($eleves as $eleve) {
        echo $eleve['nom'] . ' a eu : ';
        // la boucle récupérant les notes de l'élève
        $notesCount = count($eleve['notes']);
        foreach ($eleve['notes'] as $key => $note) { //$key var servir
            echo $note;
            // si la note est la dernière
            if($key === $notesCount -1) {
            echo ';';
            }
        // si la note est l'avant dernière
        elseif($key === $notesCount -2) {
            echo 'et ';
            }
            else {
                echo ',';
            } 
        }
        echo'<br>';
    }

// Moyenne de jean________________________________________
    echo '<h2>Moyenne de Jean</h2>';

    $addition = 0;

    foreach ($eleves[2]['notes'] as $note) {
    $addition = $addition + $note;
    }
    $soustraction = count($eleves[2]['notes']);
    $moyenne = $addition/$soustraction;
    echo 'la moyenne de Jean est de ' .$moyenne;


// combien d'élèves ont la moyenne_________________________________

    echo "<h2>Combien d'élèves ont la moyenne ?</h2>";

    foreach ($eleves as $eleve) {
        $soustraction = count($eleve['notes']);// soustracteur

        // echo $eleve['nom'] . ' a eu : ';
        // la boucle récupérant les notes de l'élève
        foreach ($eleve['notes'] as $note) {
            $addition = $addition + $note;
            $moyenne = $addition/$soustraction;
            //  echo $note .' - ';
            // $addition = $addition + $note;
        }
        echo $moyenne .' -- ';

        echo '<br>';
    }


    // Voir si quelqu'un a eu 20.

    $isTwenty = false;

    foreach ($eleves as $eleve) {
        foreach ($eleve['notes'] as $note) {
            if(20 === $note) {
                $isTwenty = true;
                break 2;
            }
        }
    }

    if ($isTwenty) {
        echo 'quelqu\'un a eu 20';
    } else {
        echo 'personne n\'a eu 20';
    }


    // foreach ($eleves as $eleve) {
    //     foreach ($eleve['notes'] as $note) {
    //         if ($note === 20) {
    //             echo $eleve['nom'] .' a eu 20 ; ';
    //             break 2;
    //         } 
    //         else {
    //             echo 'personne n\'a eu 20 ; ';
    //         } 
    //     }
    // }
    

?>