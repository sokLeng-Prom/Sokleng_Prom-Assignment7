<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 1</title>
</head>
<body>
<?php 
    // Explain the advantage and disadvantage of multiple inheritance.
    // Write a PHP program to demonstrate that. 
    
        //  PHP doesn't have multiple inheritance but we can implement it by using trait and interface 
    
        //  advantage of multiple inheritance
        //      - flexibility of code
        //      - shortening the code 
        //      - code is more organized
        //      - can use again and again (reusability)
        //      - can overide the base class 
    
        trait Food {
            public function eat(){
                echo " can eat" . "\n"; 
            }
            public function drink(){
                echo "can't drink " . "\n";
            }

        }
        
        trait meat {
            public function taste(){
                echo "meat delictious?" . "\n"; 
            }
        }
        
        class Beef {

            use Food; 
            use meat;

            public function typeOfFood($type){
                echo $type . "\n"; 
                
            }
        
            public function taste(){
                echo "very delicious" . "\n"; 
            }
        }
        
            
        
        $beef = new Beef();
        // reuse the code
        $beef->eat();
        $beef -> drink();   
        $beef->taste(); 
        $beef->typeOfFood("I am beef"); 
        
        //   disadvage of multiple inheritance
        //      - complexity of code is increasing
        //      - ambuiguity for the subclass that derived from more than one classes
        //        if the subclass didn't overwrite the method it cause error
        //      - if have many superclass, the code is hard to maintain
        
        trait Fruit{
            public function Orange(){
                echo "Orange";
            }
        }

        trait Cook{
            public function Orange(){
                echo "second Orange";
            }
        }

        class FruitCook{
            use Fruit;
            use Cook;
        }

        $fruitCook = new FruitCook();

        //if implent the code below it was cause the error (the ambuiguity for subclass, derived from more than one class)
        // $fruitCook -> Orange();


    
?>

</body>
</html>