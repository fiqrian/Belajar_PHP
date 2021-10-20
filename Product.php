<?php
class Product
{
    private string $name;
    private int $price;

    public function __construct(string $name, int $price)
    {
        $this->name = $name;
        $this->price = $price;
    }
    public function getName(): string
    {
        return $this->name;
    }
    public function getPrice(): string
    {
        return $this->price;
    }
}

class Product2 extends Product
{
    public function info()
    {
        echo "name $this->name" . PHP_EOL;
        echo "price $this->price" . PHP_EOL;
    }
}
