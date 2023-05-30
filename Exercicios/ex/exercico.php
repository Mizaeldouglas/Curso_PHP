<?php 

$lista = [
  'nome' => "MizaelDouglas",
  'idade' => 29,
  'atributos' => [
    'forca' => 60,
    'agilidade' => 80,
    'destresa' => 50
  ],
  'vida' => 1000,
  'mana' => 928
];

echo 'NOME: '.$lista['nome'] . "<br>";
echo 'FORÇA: '.$lista['atributos']['forca'] . "<br>";
echo 'VIDA: '.$lista['vida'] . "<br>";