<?php
// déclaration d'une variable 'number' initialisée à '140'
$number = 140;
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>PHP Partie1 exo6</title>
  </head>
  <body>
    <p>
      <?php
      /*Affichage du résultat souhaité grâce à 'echo'
      >>>>> version sur une ligne, plus simple, plus rapide, moins fastidieux !! */
      echo ($number + 30)/2;
      ?>
    </p>
    <p>
      <?php
      /* version pour shadok, mais au moins on sait
      que c'est possible de faire comme ça, ici on vient modifier la variable ligne par ligne
      en détaillant le calcul */
        $number = $number + 30;
        $number = $number / 2;
        echo $number;
      ?>
    </p>
    <p>
      <?php
      /* autre version pour shadok: version 'simplifiée' de la précédente */
        $number += 30;
        $number /= 2;
        echo $number;
      ?>
    </p>
  </body>
</html>
