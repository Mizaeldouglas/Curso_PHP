<?php
$a = [
  'nome' => 'Mizael',
  'idade' => 29,
  'empresa' => 'Uber',
  'cor' => 'Azul',
  'profissao' => 'Dev',
];

$chave = array_keys($a);
$valor = array_values($a);


echo "<table border='1'>";
echo "<tr>";

foreach ($chave   as $item) {
  echo "<th>" . $item . "</th> <br>";
}
echo "</tr>";

echo "<tr>";

foreach ($valor   as $item) {
  echo "<td>" . $item . "</td>";
}
echo "</tr>";
echo "</table>";
echo "<br>";
?>

<table border='1'>

  <?php
  foreach ($a   as $chave => $valor) : ?>
  <tr>
    <td><?php echo "<strong>" . $chave . "</strong>"; ?></td>
    <td><?php echo $valor; ?></td>
  </tr>


  <?php endforeach; ?>
</table>