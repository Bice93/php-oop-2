<?php

class Customer{
    protected $firstname;
    protected $lastname;
    protected $email;
    protected $address;
    protected $city;
    protected $phone;

    public function __construct($_firstname, $_lastname, $_email, $_address, $_city, $_phone)
    {
        $this->firstname = $_firstname;
        $this->lastname = $_lastname;
        $this->email = $_email;
        $this->address = $_address;
        $this->city = $_city;
        $this->phone = $_phone;
    }


}
?>