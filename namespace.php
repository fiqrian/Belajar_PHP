<?php
//namespace berguna saat penempatan class yang di tempat yng sama dengan nama yang sama agar tidak terjadi conflict/error.
//kode use berguna mengimport data agar tidak dipanggil berulang
use function Helper\helpme;
//kode as berguna mengganti nama/alias jika ada nama yang sama
use const Helper\APPLICATION as APP;

require_once "Helper.php";

//memanggil Const APPLICATION di class Helper menggunakan APP yang sudah di alias
echo APP . PHP_EOL;
helpme();

//Global NameSpace secara default namespace saat membuat file sudah termasuk namespace tetapi secara default 
//Global NamepSpace  yang tidak memiliki nama namespace

namespace{

}