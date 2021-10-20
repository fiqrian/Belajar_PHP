<?php
require_once "Product.php";

use Product;

$product = new Product("Apple", 10000);

echo $product->getName() . PHP_EOL;
echo $product->getPrice() . PHP_EOL;

$dummy = new Product2("Produk", 20000);
$dummy->info();

//error tidak bisa diakses karena bersifat private
$product->name = "Orange" . PHP_EOL;
$product->price = "20000" . PHP_EOL;
