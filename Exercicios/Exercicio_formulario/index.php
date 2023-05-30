<?php
session_start();
if ($_SESSION['aviso']) {
  echo $_SESSION['aviso'];
  $_SESSION['aviso'] = '';
}

?>


<form method="post" action="recebedor.php">

  <label>
    Qual seu nome ?
    <br>
    <input type="text" name="nome">
  </label>
  <br>
  <input type="submit" value="Salvar">

</form>