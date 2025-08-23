<?php
// Start session
session_start();

// 1. Set a cookie
setcookie("username", "Alice", time() + (86400 * 7), "/"); // 7 days
echo "Cookie 'username' is set.<br>";

// 2. Read cookie
if (isset($_COOKIE["username"])) {
    echo "Hello, " . $_COOKIE["username"] . "! (from cookie)<br>";
} else {
    echo "Cookie not found.<br>";
}

echo "<hr>";

// 3. Set session variable
$_SESSION["user"] = "Alice";
echo "Session variable set: user = " . $_SESSION["user"] . "<br>";

// 4. Read session variable
if (isset($_SESSION["user"])) {
    echo "Welcome, " . $_SESSION["user"] . "! (from session)<br>";
}

echo "<hr>";

// 5. Destroy session (uncomment to test logout)
// session_unset();
// session_destroy();
// echo "Session destroyed.<br>";
?>
