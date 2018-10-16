<?php

// afficher les tables de multiplication

echo '------------------------<br><br>';

echo '<table>';

// légende du tableau (axe des abcisses)

echo 'x';

for ($z = 0; $z<=10; $z++) {
    echo $z;
}
echo '<br>';


for ($i = 0; $i<=10; $i++) {
    echo $i;
    for ($j = 0; $j <=10; $j++) {
        echo $j * $i.'  ';
    }
    echo '<br>' ;
  }

  echo '</table>';

?>