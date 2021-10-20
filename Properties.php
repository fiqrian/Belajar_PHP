<?php 
//ambil data dari file DataClass.php
require_once"DataClass.php";

//ambil class daro file Dataclass.php
$DataClass = new Data("Fiqrian",null);

$DataClass ->nama = "Fiqrian";
//data alamat tidak diisi atau null
$DataClass ->Alamat =null;
//Data Tidak di set otomatis data yg terpakai secara default menggunakan yang ada di class
// $DataClass ->negara ="Indonesia";

//mengambl object
echo "Nama : $DataClass->nama <br>".PHP_EOL;
echo "Alamat : $DataClass->Alamat<br>".PHP_EOL;
echo "Negara : $DataClass->negara<br>".PHP_EOL;

//test object
var_dump($DataClass);

//error harus memakai string
// $DataClass->nama = [];