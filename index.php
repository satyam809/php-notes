<!DOCTYPE html>
<html>

<head>
    <title>Submit Form Without Submit Button</title>
</head>

<body>

    <form id="myForm" method="post">
        <input type="text" name="data" value="1">
    </form>

    <script>
        // Get the form element by its ID
        var form = document.getElementById("myForm");
        form.addEventListener('submit', (event) => {
            event.preventDefault();
            let formData = new FormData(form);
            var dataValue = formData.get("data");

            // Log the form data to the console
            alert("Form Data:", dataValue);

            // Submit the form using JavaScript
            form.submit();
        });
    </script>

</body>

</html>