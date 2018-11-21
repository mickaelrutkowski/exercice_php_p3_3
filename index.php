<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>PHP</title>
</head>
<body>
  <?php
  $max = 100;
  settype($max, 'integer');
  $random = rand(1, 100);
  settype($random, 'integer');
  while ($max >= 10) {
    $result = $random * $max;
    settype($result, 'integer');
    echo $result . ' ';
   $max--; 
  }
 ?>
</body>
</html>
