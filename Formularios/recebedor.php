<br>
<a href="index.php">Voltar Para o inicio</a>
<br>
<br>
<br>

<?php
session_start();




$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT);



if ($nome && $idade && $email) {

  $espiracao = time() + (86400 * 30);

  setcookie('nome', $nome, $espiracao);


  echo "NOME: " . $nome . "<br>";
  echo "IDADE: " . $idade . "<br>";
  echo "EMAIL: " . $email . "<br>";
} else {

  $_SESSION['aviso'] = "Preencha os itens corretamente!";

  header("Location: index.php");
}