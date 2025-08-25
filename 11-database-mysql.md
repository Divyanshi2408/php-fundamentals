# PHP File 11 – Database (MySQL)

## 🔹 Why use a Database?
- Store and manage large amounts of data.
- Example: User accounts, blog posts, products.

---

## 🔹 Connecting PHP with MySQL (2 Ways)

### 1️⃣ Using `mysqli`
```php
<?php
$conn = new mysqli("localhost", "root", "", "testdb");

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully!";
?>
```

### 2️⃣ Using PDO
```php
<?php
try {
  $pdo = new PDO("mysql:host=localhost;dbname=testdb", "root", "");
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully!";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>
```

### 🔹 Basic SQL Queries in PHP
Create Table
```php
$sql = "CREATE TABLE users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(50) NOT NULL,
  email VARCHAR(100),
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";
$conn->query($sql);
```
Insert Data
```php
$sql = "INSERT INTO users (username, email) VALUES ('Alice', 'alice@example.com')";
$conn->query($sql);
```
Fetch Data
```php
$result = $conn->query("SELECT * FROM users");
while($row = $result->fetch_assoc()) {
  echo $row["id"]." - ".$row["username"]."<br>";
}
```
Update Data
```php
$sql = "UPDATE users SET email='new@example.com' WHERE id=1";
$conn->query($sql);
```
Delete Data
```php
$sql = "DELETE FROM users WHERE id=1";
$conn->query($sql);
```

## 🔹 Best Practices
- Use Prepared Statements to prevent SQL Injection.
- Always check for connection errors.
- Close connections after queries.
