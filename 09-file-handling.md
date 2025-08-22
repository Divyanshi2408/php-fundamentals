# PHP File 09 – File Handling

## 🔹 PHP File Functions
- `fopen()` → Open a file
- `fclose()` → Close a file
- `fread()` → Read a file
- `fwrite()` → Write to a file
- `file_get_contents()` → Reads entire file into a string
- `file_put_contents()` → Writes entire string into file
- `unlink()` → Deletes a file

---

## 🔹 Open Modes in fopen()
- `"r"` → Read only
- `"w"` → Write (erase existing content)
- `"a"` → Append (write at end of file)
- `"x"` → Create new file (error if file exists)

---

## 🔹 Example: Write to a File
```php
<?php
  $file = fopen("example.txt", "w");
  fwrite($file, "Hello, PHP File Handling!\n");
  fclose($file);
?>
```

## 🔹 Example: Read from a File
```
<?php
  $file = fopen("example.txt", "r");
  $content = fread($file, filesize("example.txt"));
  fclose($file);
  echo $content;
?>
```

## 🔹 Example: Append to a File
```php
<?php
  $file = fopen("example.txt", "a");
  fwrite($file, "Adding new content.\n");
  fclose($file);
?>
```

## 🔹 Example: Delete a File
```php
<?php
  if (file_exists("example.txt")) {
    unlink("example.txt");
    echo "File deleted successfully.";
  } else {
    echo "File not found.";
  }
?>
```
