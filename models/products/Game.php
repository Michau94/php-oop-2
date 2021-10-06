<?php
require_once __DIR__ . '/./Product.php';

class Game extends Product
{
    private $producer;
    private $genre;
    private $platform;

    public function __construct($_name, $_collocation, $_producer, $_genre, $_price, $_platform = 'PC')
    {
        parent::__construct($_name, $_collocation, $_price);
        $this->producer = $_producer;
        $this->genre = $_genre;
        $this->platform = $_platform;
    }

    public function getInfo()
    {
        return "Produttore: $this->producer, Genere:$this->genre  Piattaforma:$this->platform";
    }
}
