<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h4>Form Post</h4>
    <form action="01A-welcome.php" method="POST">
        Name: <input type="text" name="name"><br>
        E-mail: <input type="text" name="email"><br>
        <input type="submit">
    </form>
    <br><br><hr>    <br><br>
    <!-- Same example, but the method is set to GET instead of POST: -->
    <h4>Form Get</h4>
    <form action="01B-welcome_get.php" method="GET">
        Name: <input type="text" name="name"><br>
        E-mail: <input type="text" name="email"><br>
        <input type="submit">
    </form>
</body>
</html>