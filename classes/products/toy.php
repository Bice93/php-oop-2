<?php 
require_once __DIR__ . '/product.php';

class Toy extends Product{
    //Declare variables
    protected $materials;
    protected $color;


    //Define the constructor
            /**
             * Creates a new Food istance
             * @param $_materials The expiration date of the product
             * @param $_color The color of the product
             *  
             */
    public function __construct($_name, $_description, $_price, $_image, $_permit, $_category, $_materials, $_color)
    {
        parent:: __construct($_name, $_description, $_price, $_image, $_permit, $_category);
        $this-> materials = $_materials;
        $this-> color = $_color;
    }

    //Define a method/function of the class
    public function getMaterials(){
        return $this-> materials;
    }

    public function getColor(){
        return $this-> color;
    }
}
?>