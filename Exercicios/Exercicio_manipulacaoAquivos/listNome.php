<?php
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);

// echo $nome;

$texto = file_get_contents('texto.txt');
// print_r($texto);


$texto .= "<br><li>" . $nome . "</li>";

file_put_contents('texto.txt', $texto);

echo $texto;