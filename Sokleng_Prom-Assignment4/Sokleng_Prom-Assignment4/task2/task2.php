<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 2</title>
</head>
<body>
    <?php
    
    require_once("calculation.php");
    require_once("transactionMethod.php");

    $item1 = new TransactionMethod("item1",5,1,"ABA");
    $item2 = new TransactionMethod("item2", 3,2,"WING");
    $item3 = new TransactionMethod("item3",4,1,"ABA");
    $item4 = new TransactionMethod("item4",5,1,"ABA");
    $item5 = new TransactionMethod("item5",6,1,"PIPAY");
    $item6 = new TransactionMethod("item6",10,1,"ABA");
    $item7 = new TransactionMethod("item7", 15,1,"WING");
    $item8 = new TransactionMethod("item8", 2,1,"WING");
    
    $sales = new Calculation();
    $sales -> pay($item1);
    $sales -> pay($item2);
    $sales -> pay($item3);
    $sales -> pay($item4);
    $sales -> pay($item5);
    $sales -> pay($item6);
    $sales -> pay($item7);
    $sales -> pay($item8);
    
    echo "TASK 2". "<br><br><br>";
    echo "Number of sales by ABA method: " . $sales -> displayByMethods("ABA") . "<br>";
    echo "number of sales by Pipay and Wing method: " . $sales -> displayByMethods("WING","PIPAY") ;
    
    $sales -> displayTable();
    ?>
</body>
</html>