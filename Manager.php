<?php
class Manager
{
    var string $nama;
    function SayHello(string $nama): void
    {
        echo "Hi $nama, my name is $this->name" . PHP_EOL;
    }
}

//Function Overriding / menimpa file 
class VicePresident extends Manager
{
    function SayHello(string $nama): void
    {
        echo "Hi $nama, my name is VP $this->name" . PHP_EOL;
    }
}
