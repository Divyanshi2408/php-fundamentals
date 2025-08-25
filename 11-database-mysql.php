<?php
// Database connection (mysqli)
$conn = new mysqli("localhost", "root", "", "testdb");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "✅ Connected to database!<br>";

// 1. Create table if not exists
$sql = "CREATE TABLE IF NOT EXISTS users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(50) NOT NULL,
  email VARCHAR(100),
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";
$conn->query($sql);

// 2. Insert sample data
$conn->query("INSERT INTO users (username, email) VALUES ('Alice', 'alice@example.com')");
$conn->query("INSERT INTO users (username, email) VALUES ('Bob', 'bob@example.com')");

// 3. Fetch and display data
echo "<strong>Users List:</strong><br>";
$result = $conn->query("SELECT * FROM users");
while($row = $result->fetch_assoc()) {
    echo $row["id"]." - ".$row["username"]." - ".$row["email"]."<br>";
}

// 4. Update data
$conn->query("UPDATE users SET email='updated@example.com' WHERE username='Alice'");
echo "✅ User Alice updated.<br>";

// 5. Delete a user
$conn->query("DELETE FROM users WHERE username='Bob'");
echo "✅ User Bob deleted.<br>";

// Close connection
$conn->close();
?>
