# PHP File 04 – Loops

## 🔹 What are Loops?
- Loops let us run the same block of code **multiple times**.
- Useful for repeating tasks like printing numbers, processing arrays, etc.

---

## 🔹 Types of Loops in PHP

### 1. **While Loop**
Runs while the condition is true.
```php
<?php
  $i = 1;
  while ($i <= 5) {
    echo "Number: $i <br>";
    $i++;
  }
?>
```

### 2. **Do...While Loop**
Runs at least once, then repeats while the condition is true.

```
<?php
  $i = 1;
  do {
    echo "Number: $i <br>";
    $i++;
  } while ($i <= 5);
?>
```

### 3. **For Loop**
Used when you know the number of iterations.

```
<?php
  for ($i = 1; $i <= 5; $i++) {
    echo "Number: $i <br>";
  }
?>
```

### 4. **Foreach Loop**
Used to loop through arrays.

```
<?php
  $fruits = ["Apple", "Banana", "Mango"];
  foreach ($fruits as $fruit) {
    echo $fruit . "<br>";
  }
?>
```

## 🔹 Loop Control
- break → Exit the loop
- continue → Skip the current iteration and continue with the next one

```
<?php
  for ($i = 1; $i <= 5; $i++) {
    if ($i == 3) continue; // Skip number 3
    if ($i == 5) break;    // Stop the loop
    echo "Number: $i <br>";
  }
?>
```
