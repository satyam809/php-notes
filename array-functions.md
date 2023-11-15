PHP offers a variety of array functions that are frequently used in web development. Here are some of the most commonly used PHP array functions with examples:

1. **`array()`** - Create an array.
   ```php
   $fruits = array("apple", "banana", "cherry");
   ```

2. **`count()`** - Count the number of elements in an array.
   ```php
   $count = count($fruits); // Returns 3
   ```

3. **`array_push()`** - Add one or more elements to the end of an array.
   ```php
   array_push($fruits, "date", "fig");
   ```

4. **`array_pop()`** - Remove and return the last element of an array.
   ```php
   $lastFruit = array_pop($fruits); // $lastFruit contains "fig"
   ```

5. **`array_shift()`** - Remove and return the first element of an array.
   ```php
   $firstFruit = array_shift($fruits); // $firstFruit contains "apple"
   ```

6. **`array_unshift()`** - Add one or more elements to the beginning of an array.
   ```php
   array_unshift($fruits, "grape", "kiwi");
   ```

7. **`in_array()`** - Check if a value exists in an array.
   ```php
   $found = in_array("banana", $fruits); // Returns true
   ```

8. **`array_merge()`** - Merge two or more arrays into one.
   ```php
   $moreFruits = array("orange", "pear");
   $combined = array_merge($fruits, $moreFruits);
   ```

9. **`array_slice()`** - Extract a portion of an array.
   ```php
   $selectedFruits = array_slice($fruits, 1, 3); // Returns an array with "banana", "cherry", "date"
   ```

10. **`array_keys()`** - Get the keys of an array.
   ```php
   $keys = array_keys($fruits); // Returns an array with 0, 1, 2, ...
   ```

11. **`array_values()`** - Get the values of an array.
   ```php
   $values = array_values($fruits); // Returns an array with "apple", "banana", "cherry", ...
   ```

12. **`array_reverse()`** - Reverse the order of elements in an array.
   ```php
   $reversed = array_reverse($fruits);
   ```

These are just a few of the many array functions available in PHP. They are essential for working with data in web applications and can help streamline various tasks.