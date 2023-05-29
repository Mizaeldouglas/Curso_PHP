<?php
require('header.php');

?>

<form method="post" action="recebedor.php">

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