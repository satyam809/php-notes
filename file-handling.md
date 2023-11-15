File handling in PHP allows you to perform various operations on files, such as reading, writing, creating, deleting, and more. You can work with text files, binary files, and directories. Here's an overview of file handling in PHP with examples for common operations:

**1. Opening and Reading a File:**

You can open and read the contents of a file using functions like `fopen()` and `fgets()`. Here's an example of reading a text file:

```php
<?php
$filename = 'example.txt';
$file = fopen($filename, 'r');

if ($file) {
    while (($line = fgets($file)) !== false) {
        echo $line;
    }
    fclose($file);
} else {
    echo "Failed to open the file.";
}
?>
```

**2. Writing to a File:**

You can open a file for writing using `fopen()` with the 'w' mode. Be cautious because this will overwrite the existing file content. Here's an example:

```php
<?php
$filename = 'example.txt';
$file = fopen($filename, 'w');

if ($file) {
    fwrite($file, "Hello, World!");
    fclose($file);
    echo "File written successfully.";
} else {
    echo "Failed to open the file for writing.";
}
?>
```

**3. Appending to a File:**

To add content to an existing file without overwriting it, use 'a' mode in `fopen()`. Example:

```php
<?php
$filename = 'example.txt';
$file = fopen($filename, 'a');

if ($file) {
    fwrite($file, "Appending more content.");
    fclose($file);
    echo "Content appended successfully.";
} else {
    echo "Failed to open the file for appending.";
}
?>
```

**4. Checking File Existence:**

You can use `file_exists()` to check if a file exists:

```php
<?php
$filename = 'example.txt';

if (file_exists($filename)) {
    echo "The file exists.";
} else {
    echo "The file does not exist.";
}
?>
```

**5. Deleting a File:**

You can use `unlink()` to delete a file:

```php
<?php
$filename = 'example.txt';

if (file_exists($filename)) {
    if (unlink($filename)) {
        echo "File deleted successfully.";
    } else {
        echo "Failed to delete the file.";
    }
} else {
    echo "The file does not exist.";
}
?>
```

**6. Working with Directories:**

You can create, read, and delete directories using functions like `mkdir()`, `opendir()`, and `rmdir()`. Here's an example of creating a directory:

```php
<?php
$dirname = 'new_directory';

if (!is_dir($dirname)) {
    if (mkdir($dirname, 0755)) {
        echo "Directory created successfully.";
    } else {
        echo "Failed to create the directory.";
    }
} else {
    echo "Directory already exists.";
}
?>
```

These are basic examples of common file handling operations in PHP. File handling also includes more advanced operations like copying files, renaming files, and working with binary files. Remember to handle errors and exceptions for robust file handling in your PHP applications.