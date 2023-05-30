<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Modulo - 2</title>
</head>

<body>
  <?php
  $idade = 28;
  // $nome = "Mizael";
  //echo ($idade < 18) ? "Menor de idade" : "Maior de idade";

  $nomeComppleto = $nome ?? "Visistante";
  $nomeComppleto .=  $sobrenome ?? " Não encontrado";

  echo $nomeComppleto;
  echo "<br>______________________________________________________<br><br><br>SWITCH<br><br>";

  switch ($tipo = "foto") {
    case 'foto':
      echo "Exibindo uma foto";
      break;
    case 'video':
      echo "Exibindo uma foto";
      break;
    case 'texto':
      echo "Exibindo um texto";
      break;
  }

  echo "<br>______________________________________________________<br><br><br>Loop WHILE<br><br>";
  $a = 0;

  while ($a <= 10) {
    echo $a++ . ", ";
  }

  echo "<br>______________________________________________________<br><br><br>Loop FOR<br><br>";

  for ($i = 0; $i <= 10; $i++) {
    echo $i . ", ";
  }

  echo "<br>______________________________________________________<br><br><br>Loop FOREACH<br><br>";

  $igredientes = [
    'açucar',
    'farinha',
    'ovo',
    'leite',
    'fermento em pó'
  ];

  echo "<ul>";
  foreach ($igredientes as $item) {
    echo '<li>' . $item . '</li>';
  };
  echo "</ul>";

  echo "<br>______________________________________________________<br><br><br>EXERCICIO LOOP<br><br>";


  $linha;
  $coluna;
  for ($coluna = 0; $coluna < 10; $coluna++) {
    for ($linha = 1; $linha < 10; $linha++) {
      echo "-";
    }
    echo "<br>";
  }


  echo "<br>______________________________________________________<br><br><br>EXERCICIO LOOP 2<br><br>";
  $linha2;
  $coluna2;
  for ($coluna2 = 0; $coluna2 < 20; $coluna2++) {
    for ($linha2 = 1; $linha2 < $coluna2; $linha2++) {
      echo '-';
    }
    echo "<br>";
  }





  ?>


</body>

</html>