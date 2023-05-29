<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php
  $igredientes = [
    'açucar',
    'farinha',
    'ovo',
    'leite',
    'fermento em pó'
  ];

  echo "$igredientes[2]";

  $igredientes2 = [
    ...$igredientes,
    'corante'
  ];
  echo "<br>" . "$igredientes2[5]";
  print_r($igredientes2)
  

  ?>
</body>

</html>