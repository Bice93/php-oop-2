<?php 

require_once __DIR__ . '/food.php';
require_once __DIR__ . '/toy.php';


class Product{
    //Declare variables
    protected $name;
    protected $description;
    protected $price;
    protected $image;
    protected $permit;
    protected $category;

    //Define the constructor
            /**
             * Creates a new Product istance
             * @param $_name The name of the product
             * @param $_description The description of the product
             * @param $_price The price of the product
             * @param $_image The image of the product
             * @param $_permit The type of animal that is permitted for that product
             * @param $_category The category of the product
             *  
             */
    public function __construct($_name, $_description, $_price, $_image, $_permit, $_category)
    {
        $this -> setName($_name);
        $this -> setDescription($_description);
        $this -> setPrice($_price);
        $this -> setImage($_image);
        $this -> setPermit($_permit);
        $this -> setCategory($_category);
    }

    //Define a method/function of the class
    public function getName(){
        return $this-> name;
    }

    public function getDescription(){
        return $this-> description;
    }

    public function getPrice(){
        return $this-> price;
    }

    public function getImage(){
        return $this-> image;
    }

    public function getPermit(){
        return $this-> permit;
    }

    public function getCategory(){
        return $this-> category;
    }

    public function setName($_name){
        $this-> name = $_name;
    }

    public function setDescription($_description){
        $this-> description = $_description;
    }

    public function setPrice($_price){
        $this-> price = $_price;
    }

    public function setImage($_image){
        $this-> image = $_image;
    }

    public function setPermit($_permit){
        $this-> permit = $_permit;
    }

    public function setCategory($_category){
        $this-> category = $_category;
    }
}

// $ProdottoUno = new Product('Cuccia XX', 'Cuccia per cani fatta a mano', 65.50, 'Immagine del prodotto', 'Cani', 'Boxer');
// $ProdottoDue = new Food('NaturalPet', 'Cibo per cani', 4.30, 'Immagine del prodotto cibo', 'Cane', 'Dog Adult', '20/12/2023', false, 'Manzo, Verdure');
// $ProdottoTre = new Toy('Trixie', 'Gioco d\'azione e intelligenza per gatti', 8.00, 'Immagine del gioco', 'Gatti', 'Cat puppy', 'Plastica', '25x13');
// var_dump($ProdottoUno, $ProdottoDue, $ProdottoTre);
?>