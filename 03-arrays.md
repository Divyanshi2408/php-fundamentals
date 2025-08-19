# PHP File 03 – Arrays

## 🔹 What is an Array?
- An **array** is a variable that can hold **multiple values**.
- Each value has an **index** (position).

---

## 🔹 Types of Arrays
1. **Indexed Array** → Uses numeric indexes (0, 1, 2…)
2. **Associative Array** → Uses named keys
3. **Multidimensional Array** → Arrays inside arrays

---

## 🔹 Indexed Array
```php
<?php
  $fruits = ["Apple", "Banana", "Orange"];
  echo $fruits[0]; // Apple
  echo $fruits[1]; // Banana
?>
```

Looping through an array:

```
<?php
  $fruits = ["Apple", "Banana", "Orange"];
  foreach ($fruits as $fruit) {
    echo $fruit . "<br>";
  }
?>
```

## 🔹 Associative Array
```
<?php
  $person = [
    "name" => "Alice",
    "age" => 22,
    "city" => "London"
  ];
  echo $person["name"]; // Alice
?>
```

## 🔹 Multidimensional Array
```
<?php
  $students = [
    ["John", 20, "A"],
    ["Alice", 22, "B"],
    ["Bob", 19, "C"]
  ];
  echo $students[0][0]; // John
  echo $students[1][2]; // B
?>
```

## 🔹 Useful Array Functions

| Function | Description | Example |
|----------|-------------|---------|
| `count($arr)` | Count items in array | `count($fruits)` |
| `array_push($arr, "x")` | Add item to end | `array_push($fruits, "Mango")` |
| `array_pop($arr)` | Remove last item | `array_pop($fruits)` |
| `in_array("x", $arr)` | Check if item exists | `in_array("Apple", $fruits)` |
| `array_merge($a1, $a2)` | Merge arrays | `array_merge($fruits1, $fruits2)` |
