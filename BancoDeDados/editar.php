<?php
require 'config.php';
require 'dao/UsuarioDAOMySQL.php';

$usuarioDAO = new UsuarioDaoMysql($pdo);

$info = [];

$id = filter_input(INPUT_GET, 'id');
if ($id) {



  $sql = $pdo->prepare("SELECT * FROM usuarios WHERE id = :id");
  $sql->bindValue(':id', $id);
  $sql->execute();

  if ($sql->rowCount() > 0) {

    $info = $sql->fetch(PDO::FETCH_ASSOC);
  } else {
    header("Location: index.php");
    exit;
  }
} else {
  header("Location: index.php");
  exit;
}


?>


<h1>Editar um Usuário</h1>
<form action="editar_action.php" method="post">
  <input type="hidden" name="id" value="<?= $info['id'] ?>">
  <label>
    Nome: <br>
    <input type="text" name='name' value="<?= $info['nome'] ?>">
  </label>
  <br><br>
  <label>
    Email: <br>
    <input type="email" name='email' value="<?= $info['email'] ?>">
  </label>
  <br><br>
  <input type="submit" value="Salvar">
</form>