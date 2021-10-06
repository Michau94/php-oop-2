<?php

require_once __DIR__ . '/./Product.php';

class Book extends Product
{
    private $author;
    private $genre;
    private $pages;

    public function __construct($_name, $_collocation, $_author, $_genre, $_pages, $_price)
    {
        parent::__construct($_name, $_collocation, $_price);
        $this->author = $_author;
        $this->genre = $_genre;
        $this->pages = $_pages;
    }

    public function getBookPrice()
    {
        return $this->getPrice();
    }

    public function getInfo()
    {
        return "Autore: $this->author    Genere:$this->genre  Pagine:$this->pages";
    }
}
