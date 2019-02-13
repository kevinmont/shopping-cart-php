<?php

namespace Cart;

use Cart\Daos\DbConnection;

class Customer
{

    private $id;
    private $name;
    private $email;
    private $mobile;
    private $address;
    private $createdOn;
    private $dbConnection;

    public function __construct()
    {
        $db = new DbConnection();
        $this->dbConnection = $db->getConnection();
    }

    public function getId()
    {return $this->id;}
    public function setId($id)
    {return $this->id = $id;}

    public function getName()
    {return $this->name;}
    public function setName($name)
    {return $this->name = $name;}

    public function getEmail()
    {return $this->email;}
    public function setEmail($email)
    {return $this->email = $email;}

    public function getMobile()
    {return $this->mobile;}
    public function setMobile($mobile)
    {return $this->mobile = $mobile;}

    public function getAddress()
    {return $this->address;}
    public function setAddress($address)
    {return $this->address = $address;}

    public function getCreatedOn()
    {return $this->createdOn;}
    public function setCreatedOn($createdOn)
    {return $this->createdOn = $createdOn;}
}
