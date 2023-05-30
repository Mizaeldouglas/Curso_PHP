<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mudulo - 3</title>
</head>

<body>
  <?php
  require('header.php');

  echo "Conteudo do site";




  echo "<br><hr><h3>Funções Nativas de Data/Hora</h3><br><br>";

  echo date('d/m/Y H:i:s');

  echo "<br><br>";
  echo "Padrão internacional " . date('Y-m-d');

  echo "<br><br>";
  echo date('d/F/Y');

  echo "<br><br>";
  $data = '2023-05-29';

  echo "data Formatada e convertida: " . date('d/m/Y', strtotime($data));





  echo "<br><hr><h3>Funções Nativas de Array (2/2)</h3><br><br>";

  $numero = [10, 20, 30, 85, 18];
  $numeros2 = [10, 20, 30, 85, 18];


  arsort($numero);


  foreach ($numero as $item) {
    echo "Ordenado o array: " . $item . "<br>";
  }
  print_r($numero);


  echo "<br><br>";


  $pos = array_search(85, $numero);

  echo $pos;



  echo "<br><br>";




  if (in_array(85, $numero)) {
    echo "EXISTE";
  } else {
    echo "NÃO EXISTE";
  }

  echo "<br><br>";



  array_pop($numero);
  array_shift($numeros2);


  foreach ($numeros2 as $item) {
    echo "array_pop remove o ultimo item: " . $item . "<br>";
  }

  echo "<br><br>";



  foreach ($numero as $item) {
    echo "array_pop remove o primeiro item: " . $item . "<br>";
  }


  echo "<br><hr><h3>Funções Nativas de Array (1/2)</h3><br><br>";

  $lista = ['nome1', 'nome2', 'nome3', 'nome4', 'nome5', 'nome6'];

  echo "COUNT Total: " . count($lista) . "<br>";

  $aprovados = ['nome1', 'nome4', 'nome6'];

  $reprovado = array_diff($lista, $aprovados);

  foreach ($reprovado as $item) {
    echo "array_diff: " . $item . "<br>";
  }


  echo "<br><br>";




  $filtrados = array_filter($numero, function ($item) {
    if ($item < 30) {
      return true;
    }
    return false;
  });

  foreach ($filtrados as $item) {
    echo "array_filter: " . $item . "<br>";
  }

  echo "<br><br>";

  $filtrados2 = array_map(function ($item) {
    return $item * 2;
  }, $numero);

  foreach ($filtrados2 as $item) {
    echo "array_map: " . $item . "<br>";
  }



  echo "<br><hr><h3>Funções Nativas de String (2/2)</h3><br><br>";

  $nomeCompleto2 =  "Mizael douglas de Mello";

  $posicao = strpos($nomeCompleto2, 'el');
  echo "Pocisaão de um letra: " . $posicao . "<br>";

  echo "Primeira letra Maiuscula de cada Palavra: " . ucwords($nomeCompleto2) . "<br>";

  $nomes = explode(' ', $nomeCompleto2);

  print_r($nomes) . "<br>";

  $numbers = 1294.15;

  echo "<br>" . number_format($numbers, 2, ',', '.');



  echo "<br><hr><h3>Funções Nativas de String (1/2)</h3><br><br>";

  $nomeSujo = '       Mizael      ';
  $nomeLimpo = trim($nomeSujo);

  echo $nomeLimpo . "<br>";

  echo "Nome SUJO:  " . strlen($nomeSujo) . "<br>";
  echo "Nome Limpo:  " . strlen($nomeLimpo) . "<br>";
  echo "Nome Minusculo:  " . strtolower($nomeSujo) . "<br>";
  echo "Substituir Nome:  " . str_replace('Mizael', 'Douglas', $nomeLimpo) . "<br>";

  $nomeCompleto =  "Mizael douglas de Mello";

  $nome = substr($nomeCompleto, 0, 4);
  echo "subString: " . $nome;







  echo "<br><hr><h3>Funções Nativas de Matemática</h3><br><br>";

  echo "PI: " . pi() . "<br><br>";
  $numero0 = 2.7;

  echo "<strong>Pra baixo: </strong>" . floor($numero0) . "<br>";
  echo "<strong>Pra cima: </strong>" . ceil($numero0) . "<br>";
  echo "<strong>Arendodar para cima para qual casa for mais perto: </strong>" . round($numero0) . "<br>";
  echo "<strong>Numero aleatorio: </strong>" . rand(1, 10) . "<br>";



  echo "<br><hr><h3>Função Recursivas</h3><br><br>";

  function dividir($numero)
  {
    $metade = $numero / 2;
    echo $metade . "<br>";
    if (round($metade) > 0) {
      dividir($metade);
    }
  }
  dividir(100);



  echo "<br><hr><h3>Função anonimas</h3><br><br>";

  $dizimo = function (int $valor) {
    return $valor * 0.1;
  };

  echo "Dizimo: " . $dizimo(100);


  echo "<br><hr><h3>Arrow Function</h3><br><br>";

  $dizimo2 = fn (int $valor) => $valor * 0.1;

  echo "Dizimo 2: " . $dizimo2(300);




  echo "<br><hr><h3>Função</h3><br><br>";

  function subsequente()
  {
    for ($i = 0; $i < 10; $i++) {
      echo $i . ", ";
    }
    echo "<br>";
  }

  subsequente();
  subsequente();
  subsequente();
  subsequente();

  echo "<br><hr><h3>Função com parametros</h3><br><br>";


  function somar($n1, $n2)
  {
    $total = $n1 + $n2;
    return $total;
  }

  echo somar(10, 20) . "<br>";


  echo "<br><hr><h3>Função com parametros Type e valor Padrão</h3><br><br>";

  function somar2(int $n1, int $n2)
  {
    $total = $n1 + $n2;
    return $total;
  }

  echo somar2("2", 20) . "<br>";

  echo "<br><hr><h3>Função com parametros com Referencia ou Valor</h3><br><br>";

  function somar4($n1, $n2, &$total)
  {
    $total = $n1 + $n2;
  };

  $l = 3;
  $k = 2;
  $s = 0;

  echo somar4($l, $k, $s);


  ?>



</body>

</html>