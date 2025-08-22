<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (!empty($_POST['username']) && !empty($_POST['email'])) {
    $name = htmlspecialchars($_POST['username']); // Prevent XSS
    $email = htmlspecialchars($_POST['email']);
    echo "Welcome, $name!<br>";
    echo "Your email is: $email<br>";
  } else {
    echo "Please fill in all fields.<br>";
  }
}
?>

<!-- HTML Form -->
<form method="post" action="07-forms.php">
  Name: <input type="text" name="username"><br><br>
  Email: <input type="text" name="email"><br><br>
  <input type="submit" value="Submit">
</form>
