<?php




class Product
{

    protected $name;
    protected $collocation;
    protected $type;
    protected $price;

    public function __construct($_name, $_collocation,  $_price, $_type = 'Generic')
    {

        $this->name = $_name;
        $this->collocation = $_collocation;
        $this->price = $_price;
        $this->type = $_type;
    }

    public function getName()
    {

        return $this->name;
    }

    public function getCollocation()
    {

        return $this->collocation;
    }

    public function getPrice()
    {

        return $this->price;
    }

    public function getInfo()
    {
        return "Tipo:$this->type";
    }
}
