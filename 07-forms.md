# PHP File 07 – Forms & User Input

## 🔹 Superglobals in PHP
- **`$_GET`** → Collects form data sent with method **GET** (data shown in URL).
- **`$_POST`** → Collects form data sent with method **POST** (data hidden from URL).
- **`$_REQUEST`** → Can collect both GET and POST.

---

## 🔹 Example: GET Method
```html
<form method="get" action="07-forms.php">
  Name: <input type="text" name="username">
  <input type="submit" value="Submit">
</form>
```

```php
<?php
  if (isset($_GET['username'])) {
    $name = $_GET['username'];
    echo "Hello, $name!";
  }
?>
```

## 👉 URL after submit:
07-forms.php?username=Alice

## 🔹 Example: POST Method
```html
<form method="post" action="07-forms.php">
  Email: <input type="text" name="email">
  <input type="submit" value="Submit">
</form>

```php
<?php
  if (isset($_POST['email'])) {
    $email = $_POST['email'];
    echo "Your email is: $email";
  }
?>
```
👉 POST data is not visible in the URL.

## 🔹 Example: Handling Both
```php
<?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    echo "Hello (POST), $name";
  }

  if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['name'])) {
    $name = $_GET['name'];
    echo "Hello (GET), $name";
  }
?>
```

## 🔹 Security Tip
Always validate & sanitize user input to prevent XSS or SQL Injection.

Example:

```php
<?php
  $safe = htmlspecialchars($_POST['name']);
?>
```
