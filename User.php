<?php



class User
{

    protected $name;
    protected $lastName;
    protected $email;
    protected $discount;
    protected $level;


    public function __construct($_name, $_lastName, $_email, $_level = 1)
    {

        $this->name = $_name;
        $this->lastName = $_lastName;
        $this->email = $_email;
        $this->level = $_level;
    }

    protected function customerInfo()
    {
        return "Nome: $this->name Cognome: $this->lastName";
    }

    public function  getUserName()
    {
        return $this->customerInfo();
    }

    protected function setDiscount()
    {
        if ($this->level <= 1) {
            return $this->discount = 10;
        } elseif ($this->level > 1 && $this->level <= 3) {
            return $this->discount = 25;
        } else {
            return $this->discount = 0;
        }
    }

    public function getDiscount()
    {
        $this->setDiscount();
        return  $this->discount;
    }

    public function getUserLevel()
    {
        return $this->level;
    }
}
