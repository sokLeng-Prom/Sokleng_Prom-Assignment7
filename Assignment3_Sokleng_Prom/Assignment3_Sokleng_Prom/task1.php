<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 1</title>
</head>
<body>

<!-- Write a program to reverse this string from “emocleW ot
PHP” to “Welcome to PHP” -->

    <?php 
        function reverseString($string){
            $arr = explode(" ", $string);
            $stringReverse = array_map(fn($x) => strrev($x), $arr);
            return join(" ", $stringReverse);
        }
        echo reverseString("Welcome to PHP");
    ?>
</body>
</html>