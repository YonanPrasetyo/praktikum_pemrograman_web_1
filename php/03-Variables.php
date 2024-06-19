<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $txt = "Yonan Prasetyo";
        echo "Nama saya adalah $txt";
        echo "<br>";
        echo "Nama saya adalah " . $txt;
        echo "<hr>";


        var_dump(5); // int
        var_dump("Yonan Praetyo"); // string
        var_dump(3.14); // float
        var_dump(true); // bool
        var_dump([1, 2, 3]); // array
        var_dump(null); // null
        echo"<hr>";

        // PHP Variables Scope
        $x = 5; // global scope

        function myTest() {
        // using x inside this function will generate an error
        echo "<p>Variable x inside function is: $x</p>";
        }
        myTest();

        echo "<p>Variable x outside function is: $x</p>";
        echo "<hr>";

        function myTest2() {
            $y = 5; // local scope
            echo "<p>Variable x inside function is: $y</p>";
        }
        myTest2();
        
        // using x outside the function will generate an error
        echo "<p>Variable x outside function is: $y</p>";
        echo "<hr>";

        // PHP The global Keyword

        $a = 5;
        $b = 10;

        function myTest3() {
            global $a, $b;
            $b = $a + $b;
        }

        myTest3();
        echo $b; // outputs 15
        echo "<hr>";

        // PHP The static Keyword
        function myTest4() {
            static $g = 0;
            echo $g . "<br>";
            $g++;
        }
        
        myTest4();
        myTest4();
        myTest4();
    
    ?>
</body>
</html>