<?php
session_start();

require('header.php');

if ($_SESSION['aviso']) {
  echo $_SESSION['aviso'];
  $_SESSION['aviso'] = '';
}

?>
<br>
<a href="apagar.php">APAGAR COOKIE</a>
<br>

<form method="post" action="listNome.php">

  <label>
    NOME:
    <br>
    <input type="text" name="nome">
  </label>

  <br><br>
  <label>
    IDADE:
    <br>
    <input type="text" name="idade">
  </label>

  <br><br>
  <label>
    EMAIL:
    <br>
    <input type="text" name="email">
  </label>

  <br><br>
  <input type="submit" value="Enviar">

</form>