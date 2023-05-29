<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercicio DATE</title>
</head>

<body>
  <?php
  function mostrarDate()
  {

    $data = '2023-05-07';

    $dataF = date('N', strtotime($data));

    switch ($dataF) {
      case $dataF == 1:
        echo "Segunda- feira";
        break;
      case $dataF == 2:
        echo "Terça - feira";
        break;
      case $dataF == 3:
        echo "Quarta - feira";
        break;
      case $dataF == 4:
        echo "Quinta - feira";
        break;
      case $dataF == 5:
        echo "Sexta - feira";
        break;
      case $dataF == 6:
        echo "Sabado";
        break;
      case $dataF == 7:
        echo "Domigo";
        break;
      default:
        echo "Algma coisa deu errado! ";
        break;
    }
  }

  echo mostrarDate();





  ?>
</body>

</html>