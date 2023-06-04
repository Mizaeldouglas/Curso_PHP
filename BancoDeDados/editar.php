<?php
require 'config.php';
require 'dao/UsuarioDAOMySQL.php';

$usuarioDAO = new UsuarioDaoMysql($pdo);

$usario = false;
$id = filter_input(INPUT_GET, 'id');
if ($id) {

  $usario = $usuarioDAO->findById($id);
}
if ($usario === false) {
  header("Location: index.php");
  exit;
}


?>


<h1>Editar um Usuário</h1>
<form action="editar_action.php" method="post">
  <input type="hidden" name="id" value="<?= $usario->getId(); ?>">
  <label>
    Nome: <br>
    <input type="text" name='name' value="<?= $usario->getNome(); ?>">
  </label>
  <br><br>
  <label>
    Email: <br>
    <input type="email" name='email' value="<?= $usario->getEmail(); ?>">
  </label>
  <br><br>
  <input type="submit" value="Salvar">
</form>