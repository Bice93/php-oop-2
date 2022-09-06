<?php
require_once __DIR__ . '/customerLogin.php';
class Customer{
    protected $firstname;
    protected $lastname;

    public function __construct($_firstname, $_lastname)
    {
        $this->firstname = $_firstname;
        $this->lastname = $_lastname;
    }

    public function getFirstName(){
        return $this-> firstname;
    }

    public function getLastName(){
        return $this-> lastname;
    }
}

// $UtenteUno = new Customer('Gigi', 'Massa');
// $UtenteRegistrato = new CustomerLogin('Sara', 'Ambrosi', 'Sarax34', 'sara@gmail.com', '123sara');
// var_dump($UtenteUno, $UtenteRegistrato);
?>