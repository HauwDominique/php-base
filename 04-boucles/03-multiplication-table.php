<?php

// afficher les tables de multiplication

echo '------------------------<br>';

echo '<table>';

// légende du tableau (axe des abcisses)

echo '<tr>';
echo '<td> x </td>'; //ici on affiche la croix en haut à gauche du tableau

// ici on affiche la 1ere ligne contenant les 10 chiffres à droite de la croix
for ($x = 0; $x<=10; $x++) {
    echo '<td>' .$x .'</td>';
}
echo '</tr>';

for ($i = 0; $i<=10; $i++) {
    echo '<td>' .$i .'</td>' ;//affiche le premier chiffre de la 1ere ligne (donc chiffre de la colonne)
    for ($j = 0; $j <=10; $j++) { //commence la boucle pour calculer chaque ligne
        echo '<td>' .$j * $i.'</td>' ; //affiche le résultat de la multiplication pour la ligne entière (sauf le 1er chiffre 1ere colonne)
    }
    echo '</tr><br>' ;
  }

  echo '</table>';


  // Copie du tableau sans mise en forme
  // for ($i = 0; $i<=10; $i++) {
  //   echo $i;
  //   for ($j = 0; $j <=10; $j++) {
  //       echo $j * $i.'  ';
  //   }
  //   echo '<br>' ;
  // }


?>