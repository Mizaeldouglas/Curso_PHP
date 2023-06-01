<?php
require 'classe1.php';
require 'classe2.php';
require 'classes/matematica/basico.php';

use classes\matematica\Basico as Basico;

$basico = new Basico();



$a = new class3\MinhaClasse();
$b = new class2\MinhaClasse();
$c = new \classes\matematica\Basico();




echo $a->testar() . "<br>";
echo $b->testar() . "<br>";
