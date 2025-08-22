# PHP File 08 – Include & Require

## 🔹 Why Use Include/Require?
- Helps **reuse code** (e.g., header, footer, navigation).
- Makes projects **modular** and **easier to maintain**.

---

## 🔹 include
- Includes a file, but if the file is **missing**, PHP gives a **warning** and continues execution.

```php
<?php
  include "header.php";
  echo "Welcome to my website!";
?>
```

## 🔹 require
Includes a file, but if the file is missing, PHP gives a fatal error and stops execution.

```php

<?php
  require "config.php";
  echo "Database connected!";
?>
```

## 🔹 include_once & require_once
Same as include and require, but ensures the file is included only once (avoids redeclaration errors).

```php
<?php
  include_once "header.php";
  require_once "config.php";
?>
```

## 🔹 Example Project Structure
```css
project/
   ├── header.php
   ├── footer.php
   └── index.php
```
header.php

```php
<?php
  echo "<h1>My Website</h1><hr>";
?>
```
footer.php

```php
<?php
  echo "<hr><p>&copy; 2025 My Website</p>";
?>
```
index.php

```php
<?php
  include "header.php";
  echo "Home Page Content<br>";
  include "footer.php";
?>
```
### 👉 Output:

```
My Website
-------------------
Home Page Content
-------------------
© 2025 My Website
```
