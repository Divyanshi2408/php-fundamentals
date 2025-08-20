# PHP File 06 – Functions

## 🔹 What is a Function?
- A **function** is a block of code that can be reused.
- Helps keep code organized and reduces repetition.

---

## 🔹 Defining and Calling a Function
```php
<?php
  function sayHello() {
    echo "Hello, PHP!";
  }

  sayHello(); // Call the function
?>
```

## 🔹 Function with Parameters
```php
<?php
  function greet($name) {
    echo "Hello, $name!";
  }

  greet("Alice"); // Output: Hello, Alice!
  greet("Bob");   // Output: Hello, Bob!
?>
```

## 🔹 Function with Return Value
```php
<?php
  function add($a, $b) {
    return $a + $b;
  }

  $sum = add(5, 3);
  echo "The sum is: $sum"; // Output: 8
?>
```

## 🔹 Default Parameters
```php
<?php
  function greet($name = "Guest") {
    echo "Hello, $name!";
  }

  greet();       // Output: Hello, Guest!
  greet("John"); // Output: Hello, John!
?>
```

## 🔹 Built-in Functions Examples
PHP has many built-in functions:

- date("Y") → Current year
- rand(1, 100) → Random number
- round(3.7) → Round number
- strlen("Hello") → String length
