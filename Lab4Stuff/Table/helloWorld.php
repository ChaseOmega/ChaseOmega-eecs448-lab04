<?php
$tableSize = 10;
echo "<table>";
echo "<th>" . " " . "</th>";
for ($j=1; $j <= $tableSize ; $j++)
{
  echo "<th>" . $j . "</th>";
  // code...
}
for ($i=1; $i <= $tableSize; $i++)
{
  echo "<tr>";
  echo "<th>" . $i . "</th>";
  for ($j=1; $j <= $tableSize; $j++)
  {
    echo "<th>" . $i*$j . "</th>";
    // code...
  }// code...
  echo "</tr>";
}
echo "</table>";
?>
