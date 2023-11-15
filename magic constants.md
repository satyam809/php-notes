In PHP, magic constants are predefined constants that change their values depending on where they are used. These constants are always prefixed with double underscores (e.g., `__FILE__`, `__LINE__`) and provide information about the current context of the script, the file, or the line in which they are used. Here are some commonly used magic constants:

1. `__LINE__`: Returns the current line number of the file.

   ```php
   echo 'This is line ' . __LINE__;
   ```

2. `__FILE__`: Returns the full path and filename of the file in which it is used.

   ```php
   echo 'This file is ' . __FILE__;
   ```

3. `__DIR__`: Returns the directory of the file. It is available from PHP 5.3 onwards.

   ```php
   echo 'This file is in the directory ' . __DIR__;
   ```

4. `__FUNCTION__`: Returns the name of the current function.

   ```php
   function myFunction() {
       echo 'This function is ' . __FUNCTION__;
   }
   myFunction();
   ```

5. `__CLASS__`: Returns the name of the current class.

   ```php
   class MyClass {
       function displayClassName() {
           echo 'This class is ' . __CLASS__;
       }
   }
   $obj = new MyClass();
   $obj->displayClassName();
   ```

6. `__METHOD__`: Returns the name of the current method (in the context of a class).

   ```php
   class MyClass {
       function displayMethodName() {
           echo 'This method is ' . __METHOD__;
       }
   }
   $obj = new MyClass();
   $obj->displayMethodName();
   ```

7. `__NAMESPACE__`: Returns the name of the current namespace.

   ```php
   namespace MyNamespace;
   echo 'This namespace is ' . __NAMESPACE__;
   ```

8. `__TRAIT__`: Returns the name of the current trait (in the context of a trait).

   ```php
   trait MyTrait {
       function displayTraitName() {
           echo 'This trait is ' . __TRAIT__;
       }
   }
   class MyClass {
       use MyTrait;
   }
   $obj = new MyClass();
   $obj->displayTraitName();
   ```

Magic constants can be very useful for debugging, logging, and for generating dynamic content based on the current script's context.