<?php 
class Category {
    protected $id;
    protected $name;
 

    public function __construct($_id, $_name)
    {
        $this -> id = $_id;
        $this -> name = $_name;
    }

    public function getId(){
        return $this-> id;
    }

    public function setId($_id){
        $this-> name = $_id;
    }

    public function getName(){
        return $this-> name;
    }

    public function setName($_name){
        $this-> name = $_name;
    }
}
?>