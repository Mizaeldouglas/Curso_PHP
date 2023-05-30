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

  echo "<br><hr><h3>Excluindo arquivos</h3><br><br>";

  unlink('lista.txt');
  echo "ARQUIVO EXCLUIDO COM SUCESSO!!";



  echo "<br><hr><h3>Escrevendo em arquivos</h3><br><br>";

  $texto .= "\nMizael Douglas de Mello";

  file_put_contents('texto.txt', $texto);

  echo "Arquivo criado com sucesso";


  echo "<br><hr><h3>Manipulando arquivos de texto</h3><br><br>";

  $texto = file_get_contents('texto.txt');

  // $texto = explode('\n', $texto);

  // echo "Linhas: " . count($texto);
  print_r($texto);



  ?>



</body>

</html>