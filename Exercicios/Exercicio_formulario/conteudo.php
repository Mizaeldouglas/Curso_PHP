<?php

if (isset($_COOKIE['nome'])) {
  echo "Olá, " . $_COOKIE['nome'] . " - <a href='apagar.php'>Sair</a>";
}