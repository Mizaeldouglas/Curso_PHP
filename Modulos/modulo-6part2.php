<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mudulo - 6 part2</title>
</head>

<body>
  <?php

  require 'autoload.php';

  $mat = new Matematica();
  echo "Soma: " . $mat->somar(20, 30) . "<br>";
  $algo = new Algo();
  echo  "Multiplicar: " . $algo->multiplicar(10, 5);

  ?>



</body>

</html>