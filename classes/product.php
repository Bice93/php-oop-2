<?php 

require_once __DIR__ . '/category.php';

class Product{
    protected $name;
    protected $description;
    protected $price;
    protected $image;
    protected $permit;
    protected $category = [];


    public function __construct($_name, $_description, $_price, $_image, $_permit)
    {
        $this -> setName($_name);
        $this -> description = $_description;
        $this -> price = $_price;
        $this -> image = $_image;
        $this -> permit = $_permit;
    }


    public function getName(){
        return $this-> name;
    }

    public function setName($_name){
        $this-> name = $_name;
    }
}
?>