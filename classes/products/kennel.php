<?php 
require_once __DIR__ . '/product.php';

class Toy extends Product{
    //Declare variables
    protected $materials;
    protected $dimension;


    //Define the constructor
            /**
             * Creates a new Food istance
             * @param $_materials The expiration date of the product
             * @param $_dimension The dimension of the product
             *  
             */
    public function __construct($_name, $_description, $_price, $_image, $_permit, $_category, $_materials, $_dimension)
    {
        parent:: __construct($_name, $_description, $_price, $_image, $_permit, $_category);
        $this-> materials = $_materials;
        $this-> dimension = $_dimension;
    }

    //Define a method/function of the class
    public function getMaterials(){
        return $this-> materials;
    }

    public function getDimension(){
        return $this-> dimension;
    }
}
?>