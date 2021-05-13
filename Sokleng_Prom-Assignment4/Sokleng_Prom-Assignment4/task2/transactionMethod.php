<?php 

class TransactionMethod {

    private $item;
    private $price;
    private $quantity;
    private $method;
    private $total;
    public function __construct($name, $price,$quantity,$method){
        $this -> name = $name;
        $this -> price = $price;
        $this -> quantity = $quantity;
        $this -> method = $method;
        $this -> total = $price * $quantity;
    }

    public function getTotal(){
        return $this -> total;
    }

    public function method(){
        return $this -> method;
    }

    public function display(){
        echo "<tr>
             <td style=\"border:1px solid black\">$this->name</td>
             <td style=\"border:1px solid black\">$this->price</td>
             <td style=\"border:1px solid black\">$this->quantity</td>
             <td style=\"border:1px solid black\">$this->method</td>
             <td style=\"border:1px solid black\">$this->total</td>
             </tr>"; 
    }
}
?>