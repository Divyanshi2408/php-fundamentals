# PHP File 05 – Conditional Statements

## 🔹 What are Conditionals?
- Conditional statements let us **execute code based on conditions**.
- PHP supports:
  1. if
  2. if...else
  3. if...elseif...else
  4. switch

---

## 🔹 If Statement
Executes code if the condition is **true**.
```php
<?php
  $age = 18;
  if ($age >= 18) {
    echo "You are an adult.";
  }
?>
```

## 🔹 If...Else Statement
```php
<?php
  $age = 16;
  if ($age >= 18) {
    echo "You are an adult.";
  } else {
    echo "You are a minor.";
  }
?>
```

### 🔹 If...Elseif...Else Statement
```php
<?php
  $marks = 75;
  if ($marks >= 90) {
    echo "Grade: A";
  } elseif ($marks >= 75) {
    echo "Grade: B";
  } elseif ($marks >= 50) {
    echo "Grade: C";
  } else {
    echo "Grade: F";
  }
?>
```

## 🔹 Switch Statement
Used when comparing one variable against many values.

```php
<?php
  $day = "Tuesday";
  switch ($day) {
    case "Monday":
      echo "Start of the week!";
      break;
    case "Tuesday":
      echo "Second day of the week.";
      break;
    case "Friday":
      echo "Weekend is near!";
      break;
    default:
      echo "Just another day.";
  }
?>
```
## 🔹 Comparison Operators

| Operator | Meaning | Example |
|----------|---------|---------|
| `==`  | Equal | `$a == $b` |
| `===` | Identical (same type & value) | `$a === $b` |
| `!=`  | Not equal | `$a != $b` |
| `!==` | Not identical | `$a !== $b` |
| `>`   | Greater than | `$a > $b` |
| `<`   | Less than | `$a < $b` |
| `>=`  | Greater or equal | `$a >= $b` |
| `<=`  | Less or equal | `$a <= $b` |
