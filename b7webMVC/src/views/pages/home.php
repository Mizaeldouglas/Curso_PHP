<?php $render('header'); ?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    .container {
      margin-top: 50px;
    }

    .btn {
      display: flex;
      justify-content: center;

      margin-bottom: 10px;
    }

    .linke {
      justify-content: center;
      text-decoration: none;
      color: #fff;
      background-color: #085F63;
      padding: 15px;
      border-radius: 10px;
    }

    h1 {
      text-align: center;
    }

    table,
    th,
    td {
      border: 1px solid black;
    }

    table {
      border-collapse: collapse;
      margin: auto;
    }

    th,
    td {
      padding: 10px;
      text-align: center;
      width: 120px;
    }

    th {
      font-weight: bold;
    }


    tr:nth-child(even) {
      background-color: #DCEBE6;
    }

    tr:hover:nth-child(1n + 2) {
      background-color: #085F63;
      color: #fff;
    }

    .link_ancora:hover:nth-child(1n) {
      background-color: #085F63;
      color: #fff;
    }
  </style>
</head>
<div class="container">
  <div class="btn">
    <a class="linke" href="<?= $base; ?>/novo">Novo Usuario</a>
  </div>

  <table border="1">
    <tr>
      <th>ID</th>
      <th>NOME</th>
      <th>E-MAIL</th>
      <th>AÇÕES</th>
    </tr>
    <tr>
      <?php foreach ($usuarios as $item) : ?>

    <tr>
      <td><?= $item['id']; ?></td>
      <td><?= $item['nome']; ?></td>
      <td><?= $item['email']; ?></td>
      <td>
        <a class="link_ancora" href="<?= $base; ?>/usuario/<?= $item['id']; ?>/editar">✎</a>
        <a class="link_ancora" href="<?= $base; ?>/usuario/<?= $item['id']; ?>/excluir">✘</a>
      </td>
    </tr>


  <?php endforeach ?>
  </tr>
  </table>
</div>



<?php $render('footer'); ?>

</html>