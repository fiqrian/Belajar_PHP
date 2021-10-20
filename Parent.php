<?php

require_once "Manager.php";

use Data\{Shape, Rectangle};

$shape = new Shape();
echo $shape->getCorner() . PHP_EOL;


$rectangle = new Rectangle();
echo $rectangle->getCorner() . PHP_EOL;
//memanggil function
echo $rectangle->getParentCorner() . PHP_EOL;
