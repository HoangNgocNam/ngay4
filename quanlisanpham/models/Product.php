<?php
namespace models;
class Product
{
private $name;
private $price;

    public function __construct($name = '', $price = 0)
    {
        $this->name = $name;
        $this->price = $price;
}

    /**
     * @return mixed|string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed|string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return int|mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param int|mixed $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }
}