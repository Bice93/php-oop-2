<?php

require_once __DIR__ . '/customer.php';

class CustomerLogin extends Customer{
    protected $username;
    protected $password;


    public function __construct($_firstname, $_lastname, $_email, $_address, $_city, $_phone, $_username, $_password)
    {
        parent::__construct($_firstname, $_lastname, $_email, $_address, $_city, $_phone);
        $this->username = $_username;
        $this->password = $_password;
    }
}
?>