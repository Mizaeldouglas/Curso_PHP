<?php
// echo "<pre>";
// print_r($_FILES);
if (in_array($_FILES['arquivo']['type'], array('image/jpeg', 'image/jpg', 'image/png',))) {
  $nome = md5(time() . rand(0, 9999)) . '.jpg';

  move_uploaded_file($_FILES['arquivo']['tmp_name'], 'arquivo/' . $nome);
  echo "Arquivo enviado com sucesso!";
} else {
  echo "Arquivo não permitido";
}