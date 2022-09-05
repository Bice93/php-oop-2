<?php 

require_once __DIR__ . '/product.php';
require_once __DIR__ . '/customerLogin.php';

class Cart{
    protected $quantity;
    protected $totalPrice;
    protected $discount;


    public function __construct($_quantity, $_totalPrice, $_discount)
    {
        $this->quantity = $_quantity;
        $this->totalPrice = $_totalPrice;
        $this->discount = $_discount;
    }

    
}

?>