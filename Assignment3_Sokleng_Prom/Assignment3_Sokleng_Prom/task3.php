<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 3</title>
</head>
<body>
<!-- We want to implement a function that could sum all
provided values as below.
● $total = sum (2, 3) then $total = 5
● $total = sum (2, 3, 4) then $total = 9
● $total = sum (2, 3, 4, 5) then $total = 14 -->
    <?php
    function addition(){
        $arr = func_get_args();
        $sum = array_sum($arr);
        return $sum;
    }
    
    echo "total = ".addition(2,3) . "\n"; 
    echo "total = ".addition(2,3,4) . "\n"; 
    echo "total = ".addition(2,3,4,5) . "\n"; 
    ?>

    
</body>
</html>