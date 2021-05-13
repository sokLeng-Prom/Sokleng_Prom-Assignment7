<?php

require_once("transactionMethod.php");
require_once("paymentCategories.php");

class Calculation {
    private $orders = [];
    
    public function pay(TransactionMethod $trans){
        if($trans->method() == "ABA"){
            $aba = new ABA($trans);
            $this -> orders [] = $trans;
        }
        else if($trans->method() == "WING"){
            $wing = new WING($trans);
            $this -> orders [] = $trans;
        }else if($trans->method() == "PIPAY"){
            $pipay = new PIPAY($trans);
            $this -> orders [] = $trans;
        }
    }
   

    public function displayTransaction($method){
        $count = 0; 
        for($i = 0; $i < count($this->orders); $i++){
            if($this->orders[$i]->method() == $method){
                $count += 1; 
            }
        }
        return $count; 
    }

    public function displayByMethods(){
        $count = 0; 
        $methods = func_get_args();
        for($i = 0; $i < count($methods); $i++){
            if($methods[$i] == "ABA"){
                $count += $this -> displayTransaction("ABA"); 
            }
            else if($methods[$i] == "WING"){
                $count += $this -> displayTransaction("WING"); 
            }
            else if($methods[$i] == "PIPAY"){
                $count += $this -> displayTransaction("PIPAY");   
            }
            
        }
        return $count;
    }

    public function displayTable(){
        usort($this->orders, function($a, $b) {
            if($a->getTotal()==$b->getTotal()) return 0;
            return $a->getTotal() < $b->getTotal()?1:-1;
        });
        echo "
        <table style=\"width:100%;border:1px solid black\">
        <tr >
        <th style=\"border:2px margin:10% solid black\">Name</th>
        <th style=\"border:2px margin:10% solid black\">Price</th> 
        <th style=\"border:2px margin:10% solid black\">Quantity</th>
        <th style=\"border:2px margin:10% solid black\">Method</th>
        <th style=\"border:2px margin:10% solid black\">Total</th>
        </tr>"; 

        for($i = 0; $i < count($this->orders); $i++){
            $this->orders[$i]->display(); 
            echo "<br>" . "\n\n"; 
        }

        

    }


}

?>