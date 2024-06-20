<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

        <!-- Text Fields -->
        Name: <br><input type="text" name="name"><br>
        E-mail: <br><input type="text" name="email"><br>
        Website: <br><input type="text" name="website"><br>
        Comment: <br><textarea name="comment" rows="5" cols="40"></textarea><br>

        <!-- Radio Buttons -->
        Gender: <br>
        <input type="radio" name="gender" value="female">Female
        <input type="radio" name="gender" value="male">Male <br>

        <input type="submit">

    </form>
</body>
</html>

<?php
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = test_input($_POST["name"]);
    $email = test_input($_POST["email"]);
    $website = test_input($_POST["website"]);
    $comment = test_input($_POST["comment"]);
    $gender = test_input($_POST["gender"]);
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
echo "<hr>";
echo "nama :".test_input($name)."<br>";
echo "email".test_input($email)."<br>";
echo "website".test_input($website)."<br>";
echo "comment".test_input($comment)."<br>";
echo "gender".test_input($gender)."<br>";

?>