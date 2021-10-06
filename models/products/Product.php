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

    protected function getName()
    {

        return $this->name;
    }

    protected function getCollocation()
    {

        return $this->collocation;
    }
}
