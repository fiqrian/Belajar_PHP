<?php 
//ambil data dari file DataClass.php
require_once "DataClass.php";

//ambil class daro file Dataclass.php
$DataClass = new Data("Fiqrian",null);
$DataClass ->nama = "Fiqrian";
$DataClass ->Alamat ="Bandung";
$DataClass ->negara ="indonesia";
//mengambl object
echo "Nama : $DataClass->nama <br>".PHP_EOL;
echo "Alamat : $DataClass->Alamat<br>".PHP_EOL;
echo "Negara : $DataClass->negara<br>".PHP_EOL;
//test object
var_dump($DataClass);