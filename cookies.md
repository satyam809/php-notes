A cookie in PHP is a small piece of data that is stored on the user's computer by the web browser. It's often used to remember information about the user and their preferences across different visits to a website.

Here's how you can set a cookie in PHP:

```php
<?php
// Set a cookie named "username" with a value "john_doe"
setcookie("username", "john_doe", time() + 3600); // Expires in 1 hour
?>
```

In this example:
- `setcookie()` is a PHP function used to set a cookie.
- The first parameter is the name of the cookie ("username" in this case).
- The second parameter is the value of the cookie ("john_doe" in this case).
- `time() + 3600` sets the cookie to expire in 1 hour (3600 seconds from the current time).

To retrieve and use the cookie value in PHP:

```php
<?php
// Check if the cookie is set
if(isset($_COOKIE["username"])) {
    // Retrieve the cookie value
    $username = $_COOKIE["username"];
    echo "Welcome back, $username!";
} else {
    echo "Welcome, guest!";
}
?>
```

In this example:
- `$_COOKIE["username"]` is used to retrieve the value of the "username" cookie.

Make sure to set and retrieve cookies before any HTML output to the browser, as headers (which include cookies) must be sent before any actual output.

Cookies are commonly used for features like remembering login status, storing shopping cart items, language preferences, etc. However, be cautious with sensitive data in cookies, and consider security implications.