<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mudulo - 4</title>
</head>

<body>
  <?php
  echo "<br><hr><h3>Array array_keys e array_values</h3><br><br>";
  $arrayc = [
    'nome' => 'Mizael',
    'idade' => 29,
    'empresa' => 'Uber',
    'cor' => 'Azul',
    'profissao' => 'Dev',
  ];

  $chaves = array_keys($arrayc);

  print_r($chaves);
  echo "<br>";
  $valores = array_values($arrayc);
  print_r($valores);



  echo "<br><hr><h3>Array key_exists</h3><br><br>";
  $arrayb = [
    'nome' => 'Mizael',
    'idade' => 29,
    'empresa' => 'Uber',
    'cor' => 'Azul',
    'profissao' => 'Dev',

  ];

  if (key_exists('idade', $arrayb)) {
    $idade = $arrayb['idade'];
    echo $idade . " anos";
  } else {
    echo "Não tem idade";
  }




  echo "<br><hr><h3>Array Range</h3><br><br>";
  $a = [3, 4, 5];
  $a2 = range("x", "y",);

  foreach ($a2 as $item) {
    echo "<a href='#'>" . $item . "</a>" . "<br>";
  }

  echo ("ola");



  ?>



</body>

</html>