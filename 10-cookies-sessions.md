# PHP File 10 – Cookies & Sessions

## 🔹 What are Cookies?
- Small files stored in the user's browser.
- Used to **remember preferences** (e.g., dark mode, username).
- Created with `setcookie()`.

### Example:
```php
<?php
  setcookie("username", "Alice", time() + (86400 * 7), "/");
  // Cookie "username" will last 7 days
?>
```

### Retrieve:

```php
<?php
  if (isset($_COOKIE["username"])) {
    echo "Welcome back, " . $_COOKIE["username"];
  }
?>
```

## 🔹 What are Sessions?
- Stored on the server side (more secure than cookies).
- Used to store user login state or sensitive info.
- Started with session_start().

### Example:
```php
<?php
  session_start();
  $_SESSION["user"] = "Alice";
  echo "Session started for " . $_SESSION["user"];
?>
```

### Retrieve:

```php
<?php
  session_start();
  echo "Welcome, " . $_SESSION["user"];
?>
```
### Destroy session:

```php
<?php
  session_start();
  session_unset();
  session_destroy();
?>
```

## 🔹 Key Differences

| Feature  | Cookies (Client-side) | Sessions (Server-side) |
|----------|------------------------|-------------------------|
| **Storage**  | Browser | Server |
| **Security** | Less secure | More secure |
| **Size**     | ~4KB limit | Larger (depends on server) |
| **Lifetime** | Defined by expiry time | Ends when session expires |
