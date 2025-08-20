
<?php
  // While loop
  echo "<b>While Loop:</b><br>";
  $i = 1;
  while ($i <= 5) {
    echo "Number: $i <br>";
    $i++;
  }

  echo "<hr>";

  // Do...while loop
  echo "<b>Do...While Loop:</b><br>";
  $j = 1;
  do {
    echo "Number: $j <br>";
    $j++;
  } while ($j <= 5);

  echo "<hr>";

  // For loop
  echo "<b>For Loop:</b><br>";
  for ($k = 1; $k <= 5; $k++) {
    echo "Number: $k <br>";
  }

  echo "<hr>";

  // Foreach loop
  echo "<b>Foreach Loop:</b><br>";
  $fruits = ["Apple", "Banana", "Mango"];
  foreach ($fruits as $fruit) {
    echo $fruit . "<br>";
  }

  echo "<hr>";

  // Loop control
  echo "<b>Loop Control:</b><br>";
  for ($x = 1; $x <= 5; $x++) {
    if ($x == 3) continue; // Skip 3
    if ($x == 5) break;    // Stop loop
    echo "Number: $x <br>";
  }
?>
