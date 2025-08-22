<?php
// Including header and footer files
include "header.php";

echo "This is the main content area.<br>";

require "footer.php";

// Trying include_once and require_once
include_once "header.php"; // Will not include again
require_once "footer.php"; // Will not include again
?>

Example Supporting Files (create in same folder):

📘 header.php

<?php
  echo "<h2>Welcome to PHP Fundamentals</h2><hr>";
?>

📘 footer.php

<?php
  echo "<hr><p>&copy; 2025 PHP Fundamentals</p>";
?>
