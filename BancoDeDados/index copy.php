<?php

$pdo = new PDO("mysql:dbname=test;host=localhost", "root", "");

$sql = $pdo->query('SELECT * FROM usuarios');

$dados = $sql->fetchAll(PDO::FETCH_ASSOC);

echo "TOTAl: " . $sql->rowCount();

echo "<pre>";
print_r($dados);