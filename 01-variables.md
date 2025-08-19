# PHP File 01 – Variables & Output

## 🔹 What is PHP?
- PHP = **Hypertext Preprocessor**
- A **server-side scripting language** used for web development
- Runs on the server and generates HTML

## 🔹 Writing PHP Code
PHP code is written inside `<?php ... ?>` tags:

```php
<?php
  echo "Hello, World!";
?>
```

## 🔹 Variables
- Variables in PHP start with $
- Must start with a letter or underscore
- Are case-sensitive

```
<?php
  $name = "Alice";
  $age = 20;
  $isStudent = true;

  echo "My name is $name and I am $age years old.";
?>
```

## 🔹 Data Types
- String → "Hello"
- Integer → 42
- Float/Double → 3.14
- Boolean → true / false
- Array → ["apple", "banana"]
- Object → Class instances
- NULL → No value

## 🔹 Output Functions
- echo → Outputs text or variables
- print → Similar to echo (slower, returns 1)

```
<?php
  echo "Hello, PHP!";
  print "This is a print statement.";
?>
```
