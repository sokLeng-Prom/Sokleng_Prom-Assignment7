<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 2</title>
</head>
<body>
<!-- There is an indexed array $arr = [2, 3, 4, 6, 7, 9, 11, 20].
Write a php program to filter this array by even number
using arrow function. -->
    <?php
    $arr = [2,3,4,6,7,9,11,20];
    $evenNumber = array_filter(
        $arr, fn($num) => $num%2 == 0);
    print_r($evenNumber);
    foreach ($evenNumber as $x){
        echo $x . " ";
    }
    ?>
</body>
</html>