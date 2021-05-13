
<?php
abstract class Payment{
    abstract public function pay(TransactionMethod $trans); 
}

class ABA extends Payment {
    public function pay(TransactionMethod $trans){
        $sale->addSales($trans); 
    }
}
class WING extends Payment {
    public function pay(TransactionMethod $trans){
        $sale->addSales($trans); 
    }
}

class PIPAY extends Payment {
    public function pay(TransactionMethod $trans){
        $sale->addSales($trans);  
    }
}
?>