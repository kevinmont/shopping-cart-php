<?php
namespace Cart;
use Cart\Daos\DbConnection;

class Workshop
{

    private $id;
    private $title;
    private $price;
    private $description;
    private $image;
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

    public function getTitle()
    {return $this->title;}
    public function setTitle($title)
    {return $this->title = $title;}

    public function getPrice()
    {return $this->price;}
    public function setPrice($price)
    {return $this->price = $price;}

    public function getDescription()
    {return $this->description;}
    public function setDescription($description)
    {return $this->description = $description;}

    public function getImage()
    {return $this->image;}
    public function setImage($image)
    {return $this->image = $image;}

    public function getCreatedOn()
    {return $this->createdOn;}
    public function setCreatedOn($createdOn)
    {return $this->createdOn = $createdOn;}

    public function getAllWorkshops()
    {
        $query = "SELECT * FROM workshops";
        $statement = $this->dbConnection->prepare($query);
        $statement->execute();

        $workshops = $statement->fetchAll(\PDO::FETCH_ASSOC);

        return $workshops;
    }
}
