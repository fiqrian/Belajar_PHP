<?php

namespace Data;

class Shape
{
    //Parent
    public function getCorner()
    {
        return  0;
    }
}

class Rectangle extends Shape
{
    //Child
    public function getCorner()
    {
        return  4;
    }
    public function getParentCorner()
    {
        //memanggil parrent dengan kode parent
        return parent::getCorner();
    }
}
