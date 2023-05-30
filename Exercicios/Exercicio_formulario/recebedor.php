<?php
session_start();

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);




if ($nome) {
  $espiracao = time() + (86400 * 30);
  setcookie('nome', $nome, $espiracao);
} else {

  $_SESSION['aviso'] = "Preencha os itens corretamente!";

  header("Location: index.php");
}
if (isset($_COOKIE['nome'])) {
  echo "Olá, " . $_COOKIE['nome'] . " - <a href='apagar.php'>Sair</a>";
}
