<?php

class CreditCard
{

    private $number;
    private $name;
    private $surname;
    private $expires;

    public function __construct($_number, $_name, $_surname, $_expires)
    {

        $this->number = $_number;
        $this->name = $_name;
        $this->surname = $_surname;
        $this->expires = $_expires;
    }

    public function setCC($number)
    {
        if (is_numeric($number) && strlen($number) == 16) {

            return $this->number = $number;
        } else {
            throw new Exception("Invalid CC number");
        }
    }


    public function getCCNumber()
    {
        if (!isset($this->number) || strlen($this->number) != 16) {

            throw new Exception("no CC inserted");
        } else {

            return $this->number;
        }
    }
}
