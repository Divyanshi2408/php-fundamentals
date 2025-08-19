
<?php
  $text = "Learning PHP Strings";

  // String length
  echo "Length: " . strlen($text) . "<br>";

  // Reverse string
  echo "Reverse: " . strrev($text) . "<br>";

  // Convert to uppercase
  echo "Uppercase: " . strtoupper($text) . "<br>";

  // Convert to lowercase
  echo "Lowercase: " . strtolower($text) . "<br>";

  // Find position of a word
  echo "Position of 'PHP': " . strpos($text, "PHP") . "<br>";

  // Replace a word
  echo "Replace: " . str_replace("Strings", "Functions", $text) . "<br>";
?>
