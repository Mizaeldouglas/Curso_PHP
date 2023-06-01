<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Calculadora POO</title>
</head>

<body>
  <?php
  require('calculadora.php');

  $calc = new Calculadora();
  $calc->add(12);
  $calc->add(2);
  $calc->sub(1);
  $calc->multiply(3);
  $calc->divide(2);
  $calc->add(0.5);
  echo "Total: " . $calc->total();






  ?>




</body>

</html>