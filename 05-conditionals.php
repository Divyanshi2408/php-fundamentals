<?php
  // If statement
  $age = 20;
  if ($age >= 18) {
    echo "You are an adult.<br>";
  }

  echo "<hr>";

  // If...else
  $age = 16;
  if ($age >= 18) {
    echo "You are an adult.<br>";
  } else {
    echo "You are a minor.<br>";
  }

  echo "<hr>";

  // If...elseif...else
  $marks = 75;
  if ($marks >= 90) {
    echo "Grade: A<br>";
  } elseif ($marks >= 75) {
    echo "Grade: B<br>";
  } elseif ($marks >= 50) {
    echo "Grade: C<br>";
  } else {
    echo "Grade: F<br>";
  }

  echo "<hr>";

  // Switch statement
  $day = "Tuesday";
  switch ($day) {
    case "Monday":
      echo "Start of the week!<br>";
      break;
    case "Tuesday":
      echo "Second day of the week.<br>";
      break;
    case "Friday":
      echo "Weekend is near!<br>";
      break;
    default:
      echo "Just another day.<br>";
  }
?>
