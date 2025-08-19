
<?php
  // Indexed array
  $fruits = ["Apple", "Banana", "Orange"];
  echo "First fruit: " . $fruits[0] . "<br>";

  echo "All fruits:<br>";
  foreach ($fruits as $fruit) {
    echo $fruit . "<br>";
  }

  echo "<hr>";

  // Associative array
  $person = [
    "name" => "Alice",
    "age" => 22,
    "city" => "London"
  ];
  echo "Name: " . $person["name"] . "<br>";
  echo "Age: " . $person["age"] . "<br>";
  echo "City: " . $person["city"] . "<br>";

  echo "<hr>";

  // Multidimensional array
  $students = [
    ["John", 20, "A"],
    ["Alice", 22, "B"],
    ["Bob", 19, "C"]
  ];
  echo "Student 1: " . $students[0][0] . " - Grade: " . $students[0][2] . "<br>";
  echo "Student 2: " . $students[1][0] . " - Grade: " . $students[1][2] . "<br>";

  echo "<hr>";

  // Array functions
  echo "Total fruits: " . count($fruits) . "<br>";
  array_push($fruits, "Mango");
  echo "After adding Mango: " . implode(", ", $fruits) . "<br>";
  array_pop($fruits);
  echo "After removing last: " . implode(", ", $fruits) . "<br>";
?>
