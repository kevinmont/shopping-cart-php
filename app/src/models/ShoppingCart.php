<?php

namespace Cart;

use Cart\Daos\DbConnection;

class ShoppingCart
{

    private $id;
    private $cid;
    private $pid;
    private $title;
    private $quantity;
    private $totalAmount;
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

    public function getCid()
    {return $this->cid;}
    public function setCid($cid)
    {return $this->cid = $cid;}

    public function getPid()
    {return $this->pid;}
    public function setPid($pid)
    {return $this->pid = $pid;}

    public function getTitle()
    {return $this->title;}
    public function setTitle($title)
    {return $this->title = $title;}

    public function getQuantity()
    {return $this->quantity;}
    public function setQuantity($quantity)
    {return $this->quantity = $quantity;}

    public function getTotalAmount()
    {return $this->totalAmount;}
    public function setTotalAmount($totalAmount)
    {return $this->totalAmount = $totalAmount;}

    public function getCreatedOn()
    {return $this->createdOn;}
    public function setCreatedOn($createdOn)
    {return $this->createdOn = $createdOn;}

    public function addItem()
    {

    }

    public function updateItem()
    {

    }

    public function removeItem()
    {

    }

    public function removeAllItems()
    {

    }

}
