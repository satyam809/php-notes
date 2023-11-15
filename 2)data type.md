PHP is a dynamically typed language, which means you don't have to declare the data type of a variable when you create it. PHP automatically determines the data type based on the value assigned to the variable. PHP supports several data types, and here are some common ones with examples:

1. **Integer (int)**: Whole numbers, both positive and negative.

   ```php
   $age = 30;
   $negative = -5;
   ```

2. **Float (float or double)**: Numbers with a decimal point or in exponential form.

   ```php
   $price = 19.99;
   $scientific = 6.022e23;
   ```

3. **String (string)**: Sequence of characters enclosed in single or double quotes.

   ```php
   $name = "John";
   $message = 'Hello, World!';
   ```

4. **Boolean (bool)**: Represents true or false values.

   ```php
   $isStudent = true;
   $isEmployee = false;
   ```

5. **Array**: An ordered, map-like collection of values.

   ```php
   $fruits = array("apple", "banana", "cherry");
   $person = ["first_name" => "John", "last_name" => "Doe"];
   ```

6. **Object**: Instances of user-defined classes.

   ```php
   class Car {
       public $make;
       public $model;
   }
   $myCar = new Car();
   $myCar->make = "Toyota";
   $myCar->model = "Camry";
   ```

7. **Resource**: A special variable that holds a reference to an external resource, like a file or database connection.

   ```php
   $file = fopen("example.txt", "r");
   ```

8. **NULL**: A variable that has no value assigned or has been explicitly set to null.

   ```php
   $notSet = null;
   ```

9. **Resource**: A data type used for storing a reference to external resources like files, database connections, or sockets.

   ```php
   $file = fopen("example.txt", "r");
   ```

10. **Callable**: A data type representing functions or methods that can be called.

    ```php
    function sayHello() {
        echo "Hello, World!";
    }
    $myFunction = "sayHello";
    ```

These are the primary data types in PHP. Depending on your needs, you can use the appropriate data type for your variables and data. Keep in mind that PHP is loosely typed, so variables can change data types during execution if you assign a different type of value to them.