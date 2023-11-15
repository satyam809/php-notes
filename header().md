The `header()` function in PHP is used to send HTTP headers to the client's web browser before any other output is sent. It is commonly used for various purposes such as setting response codes, redirecting to other pages, specifying content types, and more. It is especially useful when you need to control how a web page behaves or is displayed.

**Syntax:**
```php
header("header_name: header_value");
```

Here's an example of how the `header()` function is used for various purposes:

1. **Setting HTTP Response Code**:

   You can use `header()` to set the HTTP response code. For example, to send a 404 "Not Found" status:

   ```php
   header("HTTP/1.1 404 Not Found");
   ```

2. **Setting Content Type**:

   You can set the content type of the response. For instance, to specify JSON content type:

   ```php
   header("Content-Type: application/json");
   ```

3. **Redirecting to Another Page**:

   You can use `header()` to perform redirects. For example, redirecting the user to a different page:

   ```php
   header("Location: https://example.com/new_page.php");
   ```

4. **Setting Cookies**:

   To set cookies, you can use the `Set-Cookie` header with the `header()` function:

   ```php
   header("Set-Cookie: user=John; expires=Sat, 01-Jan-2023 00:00:00 GMT; path=/");
   ```

5. **Caching Control**:

   You can control caching behavior using headers, e.g., to prevent caching:

   ```php
   header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
   header("Cache-Control: post-check=0, pre-check=0", false);
   header("Pragma: no-cache");
   ```

Here's a simple example that demonstrates using `header()` to set the content type and provide a JSON response:

```php
<?php
header("Content-Type: application/json");

$data = [
    "name" => "John Doe",
    "age" => 30,
    "city" => "New York"
];

echo json_encode($data);
?>
```

In this example, we set the content type to "application/json," and then we output a JSON-encoded array.

Keep in mind that the `header()` function should be called before any content (including HTML, text, or whitespace) is sent to the browser. Otherwise, it may result in a "Headers already sent" error.