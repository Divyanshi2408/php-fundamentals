<?php
  // Simple function
  function sayHello() {
    echo "Hello, PHP!<br>";
  }
  sayHello();

  echo "<hr>";

  // Function with parameter
  function greet($name) {
    echo "Hello, $name!<br>";
  }
  greet("Alice");
  greet("Bob");

  echo "<hr>";

  // Function with return value
  function add($a, $b) {
    return $a + $b;
  }
  $result = add(10, 20);
  echo "10 + 20 = $result<br>";

  echo "<hr>";

  // Function with default parameter
  function welcome($name = "Guest") {
    echo "Welcome, $name!<br>";
  }
  welcome();
  welcome("John");

  echo "<hr>";

  // Using some built-in functions
  echo "Current year: " . date("Y") . "<br>";
  echo "Random number (1-100): " . rand(1, 100) . "<br>";
  echo "Rounded value of 3.7: " . round(3.7) . "<br>";
  echo "Length of 'Hello': " . strlen("Hello") . "<br>";
?>
