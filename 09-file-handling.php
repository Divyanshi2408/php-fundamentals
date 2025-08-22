<?php
// 1. Write to a file
$file = fopen("sample.txt", "w");
fwrite($file, "This is the first line.\n");
fwrite($file, "This is the second line.\n");
fclose($file);
echo "File created and written successfully.<br>";

// 2. Read from the file
$file = fopen("sample.txt", "r");
$content = fread($file, filesize("sample.txt"));
fclose($file);
echo "<strong>File Content:</strong><br>";
echo nl2br($content) . "<br>";

// 3. Append new content
$file = fopen("sample.txt", "a");
fwrite($file, "This line was appended later.\n");
fclose($file);
echo "New content appended.<br>";

// 4. Read again using file_get_contents()
echo "<strong>Updated File Content:</strong><br>";
echo nl2br(file_get_contents("sample.txt")) . "<br>";

// 5. Delete the file (comment this if you want to keep file)
if (file_exists("sample.txt")) {
  unlink("sample.txt");
  echo "File deleted successfully.<br>";
}
?>
