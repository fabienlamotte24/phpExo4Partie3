<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 4</title>
  </head>
  <body>
    <p>
<?php
/*Utilisation de la boucle for
1 - Définition de la variable avec une valeur
2 - condition
3 - Incrémentation à la moitié de sa valeur
ex : 1 - 1.5 - 2.25...*/
  for($incr = 1;$incr <= 10; $incr += $incr/2){
    /*Affichage*/
    echo $incr . '<br />';
  }
?>
    </p>
  </body>
</html>
