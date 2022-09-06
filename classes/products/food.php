<?php 
require_once __DIR__ . '/product.php';

class Food extends Product{
    //Declare variables
    protected $expiringDate;
    protected $dry;
    protected $ingredients;

    //Define the constructor
            /**
             * Creates a new Food istance
             * @param $_expiringDate The expiration date of the product
             * @param $_dry The product is dry
             * @param $_ingredients The ingredients of the product
             *  
             */
    public function __construct($_name, $_description, $_price, $_image, $_permit, $_category, $_expiringDate, $_dry, $_ingredients)
    {
        parent:: __construct($_name, $_description, $_price, $_image, $_permit, $_category);
        $this-> expiringDate = $_expiringDate;
        $this-> dry = $_dry;
        $this-> ingredients = $_ingredients;
    }

    //Define a method/function of the class
    public function getExpiringDate(){
        return $this-> expiringDate;
    }

    public function isDry(){
        return $this-> dry;
    }

    public function getIngredients(){
        return $this-> ingredients;
    }
}
?>