<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 4</title>
  </head>
  <body>
    <p>
<?php
  $incr = 1;
  while($incr <= 10){
    echo $incr . '<br />';
    $incr += $incr/2;
  }
?>
    </p>
  </body>
</html>
