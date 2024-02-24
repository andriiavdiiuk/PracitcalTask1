<?php
class Product
{
    private string $name;
    private string $price;
    private string $category;

    function __construct(string $name,string $category,float $price)
    {
        $this->name = $name;
        $this->category = $category;
        $this->price = $price;
    }
    function setName(string $name) : void
    {
        $this ->name = $name;
    }
    function getName() : string
    {
        return $this->name;
    }
    function setPrice(string $price) : void
    {
        $this ->price = $price;
    }
    function getPrice() : string
    {
        return $this->price;
    }
    function setCategory(string $category) : void
    {
        $this ->category = $category;
    }
    function getCategory() : string
    {
        return $this->category;
    }

    function calculateDiscount(float $discount) : float
    {
        return $this->price -($this->price * $discount / 100);
    }
}
?>
