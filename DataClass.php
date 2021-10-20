<?php 

class Data
{
    //membuat contsractor
    function __construct(string $nama, ?string $alamat){
        $this->nama = $nama;
        $this->alamat = $alamat;
    }
    function  __destruct()
    {
        echo "Object Person $this->nama is destroyed". PHP_EOL;
    }

//membuat dengan constant
const AUTHOR = "Fiqrian Faturachman";

var string $nama;
//menggunakan null, agar data kosong data dan tidak terjadi error
var ?string $alamat= null;
var string $negara ="Inggris";

//This keyword memakai function saat ini
function SayHello(?string $nama){
    if(is_null($nama) ){
        echo "Hi, my name is $this->nama <br>". PHP_EOL;

    }else{
        echo "Hi $nama, my name is $this->nama<br>".PHP_EOL;
    }

}
//function Const Menggunakan SELF (SELF KEYWORD)
function info()
{
    echo "Author: " . self::AUTHOR . PHP_EOL;
}

//Function FizzBuzz 
function fizzbuzz($var){
    for($var; $var <= 100 ; $var++){
        if($var % 3 == 0 && $var % 5 == 0){
            echo "FizzBuzz<br>";
        }
        elseif($var % 3 == 0){
            echo "Fizz<br>";
        }
        elseif($var % 5 == 0){
            echo "Buzz<br>";
        }else{
            echo $var."<br>";
        }
    }
}
    
}
