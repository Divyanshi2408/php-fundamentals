# PHP File 02 – Strings

## 🔹 What is a String?
- A **string** is a sequence of characters.
- Strings are written inside **quotes** (`" "` or `' '`).

```php
<?php
  $str1 = "Hello";
  $str2 = 'World';
  echo $str1 . " " . $str2; // Output: Hello World
?>
```

## 🔹 String Concatenation
Use the dot (.) operator to join strings.

```
<?php
  $first = "PHP";
  $second = "Rocks";
  echo $first . " " . $second; // PHP Rocks
?>
```

## 🔹 String Functions
PHP has many built-in functions to work with strings.

| Function | Description | Example |
|----------|-------------|---------|
| `strlen($str)` | Get string length | `strlen("Hello") → 5` |
| `strrev($str)` | Reverse a string | `strrev("PHP") → PHP` |
| `strtolower($str)` | Convert to lowercase | `"HELLO" → "hello"` |
| `strtoupper($str)` | Convert to uppercase | `"hello" → "HELLO"` |
| `strpos($str, "sub")` | Find position of substring | `"Hello PHP", "PHP" → 6` |
| `str_replace("find", "replace", $str)` | Replace text | `"I like Java" → "I like PHP"` |


## 🔹 String Interpolation
- Double quotes ("") → Variables are parsed inside the string.
- Single quotes ('') → Variables are not parsed.
```
<?php
  $name = "Alice";

  echo "Hello $name";  // Output: Hello Alice
  echo 'Hello $name';  // Output: Hello $name
?>
```
